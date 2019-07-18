<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use App\SmsMonitor;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;

class SendSmsController extends Controller
{

    public function index()
    {
        $user = Auth::user();


        return view('app.sendsms', compact('user'));
    }

    public function sendMessage(Request $request)
    {

        $user = Auth::user();
        $id = $user->id;
        $to = $request->receiver;
        $message = $request->message;

        $username = env('SMS_USERNAME'); // use 'sandbox' for development in the test environment
        $apiKey   = env('SMS_API_KEY'); // use your sandbox app API key for development in the test environment

        $AT       = new AfricasTalking($username, $apiKey);


        // Get one of the services
        $sms      = $AT->sms();
        // Use the service
        $result  = $sms->send([
            'to'      => $to,
            'message' => $message
        ]);
        // header("Content-Type: application/json; charset=UTF-8");
        $result1 = json_encode($result, true);
        // print_r(array_values($result));
        // die();
        // $result = '{
        //         "status": "success",
        //         "data": {
        //                  "SMSMessageData": {
        //                     "Message": "Sent to 1/1 Total Cost: KES 0.8000",
        //                              "Recipients": [
        //                                 {
        //                                 "cost": "KES 0.8000",
        //                                 "messageId": "ATXid_dfde4c8ef3f7c1affff51eeb4d67a936",
        //                                 "messageParts": 1,
        //                                 "number": "+254720875292",
        //                                 "status": "Success",
        //                                 "statusCode": 101
        //                                 }
        //                                 ]
        //         }
        //         }
        //         }';
        $result2 = json_decode($result1);
        //print_r($result2->data->SMSMessageData->Recipients[0]->messageId);
        // die();
        $data = new SmsMonitor();
        $data->receiver_no = $to;
        $data->sender_id = $id;
        $data->message = $message;
        $data->messageId = $result2->data->SMSMessageData->Recipients[0]->messageId;
        $data->status = $result2->status;
        $data->statusCode = $result2->data->SMSMessageData->Recipients[0]->statusCode;
        $data->cost = $result2->data->SMSMessageData->Recipients[0]->cost;
        $data->messageParts = $result2->data->SMSMessageData->Recipients[0]->messageParts;

        if ($data->save()) {
            return back();
        }
    }
}

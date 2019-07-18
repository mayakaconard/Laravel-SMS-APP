<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;
use App\SmsMonitor;
use Illuminate\Support\Facades\Auth;

class SendSmsController extends Controller
{

    public function index()
    {
        return view('app.sendsms');
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
        $result   = $sms->send([
            'to'      => $to,
            'message' => $message
        ]);
        $data = new SmsMonitor();
        $data->receiver_no = $to;
        $data->sender_id = $id;
        $data->messageId = $result->messageId;
        $data->status = $result->status;
        $data->statusCode = $result->statusCode;
        $data->cost = $result->cost;
        $data->messageParts = $result->messageParts;

        if($data->save()){
            
        }
        print_r($result);
    }
}

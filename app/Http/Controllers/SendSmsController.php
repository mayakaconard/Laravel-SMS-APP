<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

class SendSmsController extends Controller
{

    public function index()
    {
        return view('app.sendsms');
    }

    public function sendMessage()
    {

        $username = env('SMS_USERNAME'); // use 'sandbox' for development in the test environment
        $apiKey   = env('SMS_API_KEY'); // use your sandbox app API key for development in the test environment

        $AT       = new AfricasTalking($username, $apiKey);


        // Get one of the services
        $sms      = $AT->sms();
        // Use the service
        $result   = $sms->send([
            'to'      => '+254704699193',
            'message' => 'Hello Caleb. Am glad to inform you that this message is sent from my APP!'
        ]);

        print_r($result);
    }
}

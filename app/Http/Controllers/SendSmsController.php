<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendSmsController extends Controller
{
    public function index()
    {
        return view('app.sendsms');
    }
}

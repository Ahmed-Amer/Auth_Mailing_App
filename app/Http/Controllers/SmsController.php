<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;

class SmsController extends Controller
{
   public function index()
   {
    Vonage::sms()->send([
        'to' => '201062769606',
        'from' => '201094586306',
        'text' => 'Hi There'
    ]);
    echo "Message Sent";
   }
}

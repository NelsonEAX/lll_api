<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\JolllyEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $objMail = new \stdClass();
        $objMail->demo_one = 'Demo One Value';
        $objMail->demo_two = 'Demo Two Value';
        $objMail->sender = 'SenderUserName';
        $objMail->receiver = 'ReceiverUserName';

        Mail::to("nelsoneax@yandex.ru")->send(new JolllyEmail($objMail));
    }
}

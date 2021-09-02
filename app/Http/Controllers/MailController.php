<?php

namespace App\Http\Controllers;

use App\Mail\MailPasswordSend;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendOfficerPassword($request)
    {
        Log::info(print_r($request, true));
        try{
        Mail::to($request['email'])->send(new MailPasswordSend($request['name'],$request['email'], $request['password'] ));
    }
    catch(\Exception $e){
        return $e;
    }
        return true;
    }
}

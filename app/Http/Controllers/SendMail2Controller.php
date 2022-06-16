<?php

namespace App\Http\Controllers;


use App\Http\Requests\SendMail2Request;
use App\Mail\SendMail2;
use App\Models\Email;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class SendMail2Controller extends Controller
{
    public function send (SendMail2Request $request){

        $email = Email::all();


        if($request->email  != 'email'){
            $details = [
                'text' =>$request->text,
                'email' =>$request->email,
                'companyname' =>$request->companyname,
                'name' =>$request->name,
            ];
            $emais = $email;

            Mail::to($emais)->send(new SendMail2($details));
        }





    }
}

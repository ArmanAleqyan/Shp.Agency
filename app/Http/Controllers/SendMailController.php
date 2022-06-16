<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send (Request $request){




        if($request->text != null){
            $details = [
                'text' =>$request->text,
            ];
            $email = Email::all();

            $emais = $email;

            Mail::to($emais)->send(new SendMail($details));
        }




    }
}

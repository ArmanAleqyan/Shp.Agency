<?php

namespace App\Http\Controllers;


use App\Http\Requests\SendMail3Request;
use App\Mail\SendMail3;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class SendMail3Controller extends Controller
{
    public function send (SendMail3Request $request){



//        $request->validate([
//            'cv' => 'required|mimes:png,jpeg,xlx,xls,pdf,doc,docx'
//        ]);



        $details = [
            'cv' =>  $request->file('cv'),
            'phone' =>$request->phone,
            'name' =>$request->name,
        ];



        $email = Email::all();

        $emais = $email;
        if ($details){
            set_time_limit('0');
            Mail::to($emais)->send(new SendMail3($details));
        }

    }
}

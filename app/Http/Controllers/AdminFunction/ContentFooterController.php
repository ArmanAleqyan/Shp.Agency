<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\ContentFooter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentFooterController extends Controller
{
    public function index(){


        $contentfooter = ContentFooter::all();
        $line1 = $contentfooter[0]->line1;
        $line2 = $contentfooter[0]->line2;
        $line3 = $contentfooter[0]->line3;
        $phone = $contentfooter[0]->phone;
        $telegram = $contentfooter[0]->telegram;
        $WhatsApp  = $contentfooter[0]->WhatsApp;
        $line7 = $contentfooter[0]->line7;
        $email = $contentfooter[0]->email;
        $address = $contentfooter[0]->address;
        $privacy = $contentfooter[0]->privacy;
        $privacytext = $contentfooter[0]->privacytext;
        $data = $contentfooter[0]->privacytext;
        $cookie = $contentfooter[0]->cookie;
        $cookietext = $contentfooter[0]->cookietext;
        $instagram = $contentfooter[0]->instagram;
        $facebook = $contentfooter[0]->facebook;
        $linkdine = $contentfooter[0]->linkdine;


        return view('admin.contentfooter.contentfooter', compact(
            'line1', 'line2', 'line3', 'line7', 'phone', 'telegram', 'WhatsApp', 'email', 'address',
            'privacy', 'privacytext', 'cookie', 'cookietext', 'instagram', 'facebook', 'linkdine'));
    }

    public function update1(Request $request){

        $line1 =$request->line1;
        $line2 =$request->line2;
        if($line1){
            $post = ContentFooter::where('id', '=', 1)->update([
               'line1' => $line1
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'line1' => ""
            ]);

        }
        if ($line2){
            $post = ContentFooter::where('id', '=', 1)->update([
                'line2' => $line2
            ]);
            return redirect()->route('contentfooter')->with('ok', 'ok');
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'line2' => " "
            ]);
        }
        if($post){
            return redirect()->route('contentfooter')->with('ok', 'ok');
        }else{
            return redirect()->route('contentfooter')->with('ok');
        }
    }

    public function update2(Request $request){
        $line3 = $request->line3;
        $phone = $request->phone;
        $telegram = $request->telegram;
        $whatsapp = $request->whatsapp;
        $email = $request->email;
        $line7 = $request->line7;

        if($line3){
            $post = ContentFooter::where('id', '=' , 1)->update([
                'line3' => $line3
            ]);
        }else{
            $post = ContentFooter::where('id', '=' , 1)->update([
                'line3' => ""
            ]);
        }
        if($phone){
            $post = ContentFooter::where('id', '=' , 1)->update([
                'phone' => $phone
            ]);
        }else{
            $post = ContentFooter::where('id', '=' , 1)->update([
                'phone' => "#"
            ]);
        }
        if($telegram){
            $post = ContentFooter::where('id', '=' , 1)->update([
                'telegram' => $telegram
            ]);
        }else{
            $post = ContentFooter::where('id', '=' , 1)->update([
                'telegram' => "#"
            ]);
        }
        if($whatsapp){
            $post = ContentFooter::where('id', '=' , 1)->update([
                'WhatsApp' => $whatsapp
            ]);
        }else{
            $post = ContentFooter::where('id', '=' , 1)->update([
                'WhatsApp' => "#"
            ]);
        }
        if($email){
            $post = ContentFooter::where('id', '=' , 1)->update([
                'email' => $email
            ]);
        }else{
            $post = ContentFooter::where('id', '=' , 1)->update([
                'email' => '#'
            ]);
        }
        if($line7){
            $post = ContentFooter::where('id', '=' , 1)->update([
                'line7' => $line7
            ]);
        }else{
            $post = ContentFooter::where('id', '=' , 1)->update([
                'line7' => ""
            ]);
        }

        if($post){
            return redirect()->route('contentfooter')->with('ok', 'ok');
        }else{
            return redirect()->route('contentfooter')->with('ok');
        }
    }

    public function update3(Request $request){


     


        $text = ContentFooter::all();

        $data = json_encode($request->privacytext);
  
        $datas = json_encode($request->cookietext);
   
        
  


        $adres =$request->adres;
       $privacy =$request->privacy;
       $privacytext =$data;
       $cookie =$request->cookie;
       $cookietext =$datas;



        if($adres){
            $post = ContentFooter::where('id', '=', 1)->update([
                'address' => $adres
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'address' => ""
            ]);
        }
        if ($privacy){
            $post = ContentFooter::where('id', '=', 1)->update([
                'privacy' => $privacy
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'privacy' => " "
            ]);
        }
        if ($privacytext){
            $post = ContentFooter::where('id', '=', 1)->update([
                'privacytext' => $privacytext
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'privacytext' => " "
            ]);
        }

        if ($cookie){
            $post = ContentFooter::where('id', '=', 1)->update([
                'cookie' => $cookie
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'cookie' => " "
            ]);
        }
        if ($cookietext){
            $post = ContentFooter::where('id', '=', 1)->update([
                'cookietext' => $cookietext
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'cookietext' => " "
            ]);
        }

        if($post){
            return redirect()->route('contentfooter')->with('ok', 'ok');
        }else{
            return redirect()->route('contentfooter')->with('error');
        }
    }

    public function update4(Request $request){

        $instagram = $request->instagram;
        $facebook = $request->facebook;
        $linkdine = $request->linkdine;

        if($instagram){
            $post = ContentFooter::where('id', '=', 1)->update([
                'instagram' => $instagram
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'instagram' => "#"
            ]);
        }

        if ($facebook){
            $post = ContentFooter::where('id', '=', 1)->update([
                'facebook' => $facebook
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'facebook' => "#"
            ]);
        }
        if ($linkdine){
            $post = ContentFooter::where('id', '=', 1)->update([
                'linkdine' => $linkdine
            ]);
        }else{
            $post = ContentFooter::where('id', '=', 1)->update([
                'linkdine' => "#"
            ]);
        }


        if($post){
            return redirect()->route('contentfooter')->with('ok', 'ok');
        }else{
            return redirect()->route('contentfooter')->with('ok');
        }
    }


}

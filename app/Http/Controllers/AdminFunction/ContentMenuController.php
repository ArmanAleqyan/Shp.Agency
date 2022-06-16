<?php

namespace App\Http\Controllers\AdminFunction;


use App\Models\Email;
use App\Models\MenuContent;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentMenuController extends Controller
{
    public function index(){
       $menu = MenuContent::all();
        return view('admin.contentmenu.contentmenu', compact('menu'));
    }

    public function update(Request $request , $id){

        $name = $request->name;
        $url = $request->url;

        if($name){
            $post = MenuContent::where('id', '=', $id)->update([
               'name' => $name,
               'url' => $url
            ]);
        }else{
            $post = MenuContent::where('id', '=', $id)->update([
                'name' => " ",
                'url' => '#'
            ]);
        }
        if($post){
            return redirect()->route('contentmenu')->with('ok', 'ok');
        }

    }

    public function updateemail(){
        $email = Email::all();
        return view('admin.contentemail', compact('email'));
    }

    public function updateemailpost(Request $request, $id){

        $email = Email::where('id', '=' ,$id)->update([
           'email' => $request->email,
        ]);
        if($email){
            return redirect()->route('contentemail')->with('ok', 'ok');
        }
    }


}

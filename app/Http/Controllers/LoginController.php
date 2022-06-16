<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }


    public function login(LoginRequest $request){
        $user = User::where('email', '=' , $request->email)->get();
        if(!$user->isEmpty()){
            $user_dataa = $request->only(['email', 'password']);
            if (Auth::attempt($user_dataa)){
                return redirect()->route('adminhome');
            }else{
                return redirect()->route('login')->with('error', 'неверный пароль' );
            }
        }

    }








    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function settings(){
        return view('admin.SetingsAdminProfile');
    }

    public function updateprofile(UpdateProfileRequest $request){


        $user_id = auth()->user()->id;

        $password = User::where('id', '=', $user_id)->get();




        $update = User::where('id' , '=', $user_id)->update([
            'name' => $request->name,
            'password' => $password[0]->password,
            'email' => $password[0]->email,
        ]);

        if($update){
            return redirect()->route('settings')->with('success', 'Вы удачно обновили профиль');
        }else{
            return redirect()->route('settings')->with('error');
        }

    }

    public function updatepassword(PasswordRequest $request){

        $user_id = Auth::user()->id;
        $user = User::where('id' , '=' , $user_id)->get();

        if($request->oldpassword == $user[0]->originpassword){
            $user = User::where('id' , '=' , $user_id)->update([
                'password' => Hash::make($request->newpassword),
                'originpassword' => $request->newpassword
            ]);
            return redirect()->route('settings')->with('successpassword' , 'Вы удачно обновили пароль');
        }else{

            return redirect()->route('settings')->with('error' , 'неверный пароль');
        }





    }

}

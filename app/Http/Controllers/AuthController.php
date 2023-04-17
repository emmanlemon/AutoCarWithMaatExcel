<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;
use DB;

class AuthController extends Controller
{
    public function auth(){
        return view('auth.login');
    }   

    public function register(){
        return view('auth.register');
    }

    
    public function forgot_password(){
        return view('auth.forgot_password');
    }

    public function login(Request $request){
        $validateUser = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
            ]
        );

        if ($validateUser->fails()) {
            return redirect()->back()->withErrors(['msg' => 'The Message']);
        }
    }

    public function forgot_password_user(Request $request){
        $user = User::where('email', '=', $request->email)->get();
        if($user->isEmpty()){
            return redirect()->back()->with('message', 'Email Address is not existing');
        }else{
            $token = rand(6, '01234567');
            DB::table('password_reset_tokens')->insert(['email' => $request->email, 'token' => Hash::make($token)]);
            return redirect()->back()->with('message', 'Check Your Email For the Verification Code');
        }
    }
}
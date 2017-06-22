<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Response, Session, Auth, Hash;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
                        'email'=>'required|email',
                        'password'=>'required'
        	         ]);
        if($validation->fails()){
        	return redirect()->back()->withInput()->withErrors($validation->errors());
        }

        $credentials = [
           'email'=>$request->input('email'),
           'password'=>$request->input('password')
        ];
        if($request->has('remember')){
        	Auth::attempt($credentials,true);
        }else{
        	Auth::attempt($credentials);
        }
        
        if(Auth::check()){
        	return Auth::user();
        }else{
        	Session::flash('error_message','Incorrect email or password');
        	return redirect()->back()->withInput();
        }


    }
}

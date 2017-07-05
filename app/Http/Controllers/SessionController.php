<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Response, Auth, Hash;
use AuthenticationException;
use App\User, App\Role;

class SessionController extends Controller
{
	/**
	 * Display login form
	 */
	public function index()
	{
       return view('dashboard.home')->withTitle('Dashboard');
	}

	/**
	 * Display login form
	 */
	public function create()
	{
       return view('auth.login')->withTitle('Login');
	}
    
    /**
     * Autheticate user
     */
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
        	return redirect()->to('dashboard');
        }else{
        	session()->flash('error_message','Incorrect email or password');
        	return redirect()->back()->withInput();
        }
    }

    /**
     * Destroy session
     */
    public function destroy()
    {
    	if(Auth::check()){
    		Auth::logout();
    	}
    	return redirect()->to('signin');
    }
}

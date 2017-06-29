<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Store a newly created user
     */
    public function store(Request $request)
    {
    	$user = new User;
    	$user->first_name = $request->input('first_name');
    	$user->last_name = $request->input('last_name');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));
    	$user->save();
    }
}

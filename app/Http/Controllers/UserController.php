<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
	/**
	 * Displal the list of users
	 */
	public function index()
	{
        $data = [
           'users'=>User::all()
        ];
        return view('dashboard.users',$data)->withTitle('Users');
	}

    /**
     * Store a newly created user
     */
    public function store(Request $request)
    {
    	$user = new User;
    	$user->first_name = strtoupper($request->input('first_name'));
    	$user->last_name = $request->input('last_name');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));
    	$user->save();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\Department, App\Role, App\Target, App\Report, App\SubTarget;
use App\Events\TargetAssigned;
use DB, Mail;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('index')->withTitle('Home');  
    }
}

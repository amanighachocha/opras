<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Target;
use App\Events\TargetAssigned;
use App\Jobs\RemindReportSubmission;
use Artisan;
use Validator, Response, Session, Auth, Hash;

class TargetController extends Controller
{
    /**
     * Display the list of set targets
     */
    public function index()
    {

    }

    /**
     * Store new assigned target
     */
    public function store(Request $request)
    {
    	$validation = Validator::make($request->all(),[
                 'name'=>'required|string'      
    		]);
    	if($validation->fails()){
    		if($request->ajax()){
               return response()->json(['success'=>false,'message'=>$validation->messages()]);
    		}else{
               return redirect()->back()->withInput()->with($validation->messages());
    		}
    	}

        $target = new Target;
        $target->user_id = $request->input('user_id');
        $target->name = $request->input('name');
        $target->description = $request->input('description');
        $target->save();

        event(new TargetAssigned($target));

        if($request->ajax()){
	       return response()->json(['success'=>false,'message'=>'Target saved successfully']);
		}else{
		   session()->flash('success_message'=>'Target saved successfully');
	       return redirect()->back();
		}

    }
}

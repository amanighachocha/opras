<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\Target, App\Report;
use Validator, Response, Session, Auth, Hash, Storage;

class ReportController extends Controller
{
    /**
     * Display the list of authenticated user reports
     */
    public function index()
    {
    	$data = [
           'reports'=>User::find(Auth::user()->id)->reports()->with('reportable')->paginate(20),
           'targets'=>Target::all()
    	];
    	return view('dashboard.reports',$data)->withTitle('Reports');
    }

    /**
     * Store a newly submitted report
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
                 'title'=>'required|string',
                 'content'=>'required'      
            ]);
        if($validation->fails()){
            if($request->ajax()){
               return response()->json(['success'=>false,'message'=>$validation->messages()]);
            }else{
               return redirect()->back()->withInput()->with($validation->messages());
            }
        }

        $report = new Report;
        $report->user_id = Auth::user()->id;
        $report->title = $request->input('title');
        $report->content = $request->input('content');
        $report->reportable_id = $request->input('target_id');
        $report->reportable_type = 'main';
        if($request->hasFile('attachment')){
            $request->file('attachment')->storeAs('public/reports',$request->file('attachment')->getClientOriginalName());
            $report->attachment = $request->file('attachment')->getClientOriginalName();
        }
        $report->save();


        if($request->ajax()){
           return response()->json(['success'=>false,'message'=>'report saved successfully']);
        }else{
           session()->flash('success_message','report saved successfully');
           return redirect()->back();
        }
    }

    /**
     * Download the specified report
     */
    public function download($id)
    {
        $report = Report::find($id);
        return response()->download(storage_path('app/public/reports/'.$report->attachment));
    }
}

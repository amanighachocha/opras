<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Target;
use App\Events\TargetAssigned;
use App\Jobs\RemindReportSubmission;
use Artisan;

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
        // $target = new Target;
        // $target->user_id = 1;
        // $target->name = 'Configure server';
        // $target->save();

        // // $result = event(new TargetAssigned($target));
        // $job = (new RemindReportSubmission)->delay(10);
        // $result = dispatch($job);

        // return $result;
        return Artisan::call('make:controller',['name'=>'ReportController']);
    }
}

<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class RemindReportSubmission implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {    
        // $employees = Role::where('key','employee')->users()->get();
        // foreach($employees as $employee){
        //     Mail::send('emails.report_submission_remainder',['user'=>$employee],function($message){
        //          $message->to($employee->email);
        //          $message->from('hr@ifm.ac.tz');
        //          $message->subject('2017 - Report Submission');
        //     });
        // }
        return 'Employees notified successfully';
    }
}

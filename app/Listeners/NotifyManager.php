<?php

namespace App\Listeners;

use App\Events\TargetAssigned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Mail;
use App\Mail\TargetSet, App\Role;

class NotifyManager
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TargetAssigned  $event
     * @return void
     */
    public function handle(TargetAssigned $event)
    {
        // return 'Target has been set';
        $managers = Role::where('name','manager')->first()->users;
        
        foreach($managers as $user){
            $data = [
              'title'=>$event->target->name,
              'name'=>$user->first_name,
              'content'=>$event->target->description
            ];

            Mail::to($user->email)->send(new TargetSet($event->target,$data));
        }
    }
}

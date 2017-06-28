<?php

namespace App\Listeners;

use App\Events\TargetAssigned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        return 'Target has been set';
    }
}

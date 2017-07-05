<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Role, App\Target;

class TargetSet extends Mailable
{
    use Queueable, SerializesModels;

    public $target;

    public $data;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Target $target, $data)
    {
        $this->target = $target;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('emails.target-set-notification')
                    ->from('no-reply@scholardream.com')
                    ->subject($this->target->name)
                    ->with($this->data);
    }
}

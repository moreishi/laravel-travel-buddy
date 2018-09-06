<?php

namespace App\Listeners\Notifications;

use App\Events\PasswordChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendPasswordChanged;
use App\User;

class SendPasswordNotication
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
     * @param  PasswordChanged  $event
     * @return void
     */
    public function handle(PasswordChanged $event)
    {
        $user = User::find($event->user->id);
        Mail::to($event->user)->send(new SendPasswordChanged($user));
    }
}

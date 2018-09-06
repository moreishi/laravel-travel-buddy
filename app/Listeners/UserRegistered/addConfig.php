<?php

namespace App\Listeners\UserRegistered;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Configuration;

class addConfig
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        Configuration::create(['code' => 'email_a','value' => 'YES','user_id' => $event->user->id]);
        Configuration::create(['code' => 'email_b','value' => 'YES','user_id' => $event->user->id]);
    }
}

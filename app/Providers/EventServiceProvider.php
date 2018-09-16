<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            
        ],
        'App\Events\UserRegistered' => [
            'App\Listeners\UserRegistered\addConfig'
        ],
        'App\Events\ProfileVisited' => [
            'App\Listeners\ProfileVisited\addVisitor'
        ],
        'App\Events\EmailConfig' => [
            'App\Listeners\EmailConfig\saveProfileEmail'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

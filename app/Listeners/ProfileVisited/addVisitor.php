<?php

namespace App\Listeners\ProfileVisited;

use App\Events\ProfileVisited;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Visitor;
use Carbon\Carbon;

class addVisitor
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
     * @param  ProfileVisited  $event
     * @return void
     */
    public function handle(ProfileVisited $event)
    {
        
        $visitor = Visitor::updateOrCreate(
                    ['user_id' => $event->profile_id, 'visitor_id' => $event->user->id],
                    ['updated_at' => Carbon::now()]
                );
        
    }
}

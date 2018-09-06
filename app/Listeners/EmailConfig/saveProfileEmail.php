<?php

namespace App\Listeners\EmailConfig;

use App\Events\EmailConfig;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Configuration;

class saveProfileEmail
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
     * @param  EmailConfig  $event
     * @return void
     */
    public function handle(EmailConfig $event)
    {
        $email_a = ($event->request->email_a) ? "YES" : "NO" ;
        $email_b = ($event->request->email_b) ? "YES" : "NO" ;

        $this->update_email_configuration('email_a',$email_a,$event);
        $this->update_email_configuration('email_b',$email_b,$event);
    }

    public function update_email_configuration($code,$value,$event) {
        $update = Configuration::where([
            ['code','=',$code],
            ['user_id','=',$event->user->id],
        ])->update(['value' => $value]);
    }

}

<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('register'))
                    ->type('name','moreishi')
                    ->type('email','moreishi@gmail.com')
                    ->type('password','secret')
                    ->type('password_confirmation','secret')
                    ->press('Register')
                    ->assertPathIs('/home')
                    ->assertSee('Dashboard')
                    ->assertSee('You are logged in!');
        });
    }
}

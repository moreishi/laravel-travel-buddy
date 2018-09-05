<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHome()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertPathIs('/')
                    ->assertSee('Travel Buddy');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testTitle()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertTitle('Travel Buddy');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHasLoginLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('LOGIN');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testHasRegisterLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('REGISTER');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testClickRegisterLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->click('.btn-register')
                    ->assertPathIs('/register');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testClickLoginLink()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->click('.btn-login')
                    ->assertPathIs('/login');
        });
    }
    

}

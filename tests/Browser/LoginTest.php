<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class LoginTest extends DuskTestCase
{

    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('login'))
                    ->assertPathIs('/login');
        });
    }


    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLoginForm()
    {   

        $user = new User();
        $user->name = "moreishi";
        $user->email = "moreishi@gmail.com";
        $user->password = bcrypt('secret');
        $user->save();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit(route('login'))
                    ->type('email',$user->email)
                    ->type('password','secret')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->assertSee('Dashboard')
                    ->assertSee('You are logged in!');
        });

    }

    /**
     * 
     *
     * @return void
     */
    public function testLoginProcess()
    {   

        $user = new User();
        $user->name = "moreishi";
        $user->email = "moreishi@gmail.com";
        $user->password = bcrypt('secret');
        $user->save();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/')
                    ->clickLink('.btn-login')
                    ->assertPathIs(route('login'))
                    ->type('email',$user->email)
                    ->type('password','secret')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->assertSee('Dashboard')
                    ->assertSee('You are logged in!');
        });

    }
    

}

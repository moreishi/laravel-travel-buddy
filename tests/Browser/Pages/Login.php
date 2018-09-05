<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use App\User;

class Login extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/login';
    }

    /**
     * Assert that the browser is on the page.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@name' => 'input[name="name"]',
            '@email' => 'input[name="email"]',
            '@password' => 'input[name="password"]',
        ];
    }

    public function login(Browser $browser)
    {
        $browser->loginAs(User::where('email', 'moreishi@gmail.com')->firstOrFail);
    }

}

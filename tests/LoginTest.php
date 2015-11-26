<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function testRegisterUserCreateFromForm()
    {
        $this->visit('/auth/register')
            ->type('Taylor Otwell', 'name')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press('Register')
            ->seeInDatabase('users', ['email' => 'taylor@laravel.com']);

        $this->visit('auth/login')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->press('login')
            ->seePageIs('/home');

        $this->visit('auth/logout')
            ->seePageIs('/');

        $this->visit('auth/login')
            ->type('taylor@laravel.es', 'email')
            ->type('secret', 'password')
            ->press('login')
            ->seeStatusCode(200);

    }

}


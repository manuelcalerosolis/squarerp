<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function setUp()
    {
        parent::setUp();

        $this->app->make('Illuminate\Contracts\Http\Kernel')
            ->pushMiddleware('Illuminate\Session\Middleware\StartSession');
    }


    public function testRegisterUserCreateFromForm()
    {
        $this->visit('/auth/register')
            ->type('Taylor Otwell', 'name')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press(trans('forms.register'))
            ->seeInDatabase('users', ['email' => 'taylor@laravel.com']);

        $this->visit('/auth/login')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->press(trans('forms.login'))
            ->seePageIs('/home');

        $this->visit('auth/logout')
            ->seePageIs('/');

        $this->visit('auth/login')
            ->type('taylor@laravel.es', 'email')
            ->type('secret', 'password')
            ->press(trans('forms.login'))
            ->seeStatusCode(200);
    }

}


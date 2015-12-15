<?php

use \Mockery as m;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Session\Middleware\StartSession;

class LoginTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    protected $session;

    public function setUp()
    {
        parent::setUp();
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


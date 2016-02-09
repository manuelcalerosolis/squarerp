<?php

use \Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{

    use DatabaseTransactions;

    /**
     *
     */
    public function testRegisterUserCreateForm()
    {
        $this->visit('/auth/register')
            ->type('Taylor Otwell', 'name')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press(trans('forms.register'))
            ->seeInDatabase('users', ['email' => 'taylor@laravel.com']);
    }

    /**
     *
     */
    public function testLogoutAfterRegisterUserCreateForm()
    {
        $this->visit('/auth/logout')
            ->seePageIs('/');
    }


    /**
     *
     */
    public function testLoginUserCreateFromForm()
    {
        $this->visit('/auth/login')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->press('loginButton')
            ->seePageIs('/home');
//        ->press(trans('forms.login'))
    }

    /**
     *
     */
    public function testLogOutAfterLoginUserCreateFromForm()
    {
        $this->visit('auth/logout')
            ->seePageIs('/');
    }
}


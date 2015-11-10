<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function testUserFromArray()
    {

        // crea un usuario

        $data = [
            'name'      => 'joe doe',
            'email'     => 'joe@doe.com',
            'password'  => '12345678'
        ];
        $this->post('/user', $data)
            ->seeJsonEquals(['created' => true]);

        // cambiamos su nombre

        $data = [
            'name'      => 'paco'
        ];
        $this->put('/user/1', $data)
            ->seeJsonEquals(['updated' => true]);

        // eliminamos el usuario

        $this->delete('user/1')
            ->seeJson(['deleted' => true]);

    }

    public function testUserFromForm()
    {
        $this->visit('/user/create')
            ->type('Taylor Otwell', 'name')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press('Register')
            ->seeInDatabase('users', ['email' => 'taylor@laravel.com']);
    }

}



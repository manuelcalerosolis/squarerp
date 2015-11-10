<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;
    use WithoutMiddleware;

    public function testUserCreateFromForm()
    {
        $this->visit('/user/create')
            ->type('Taylor Otwell', 'name')
            ->type('taylor@laravel.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press('Register')
            ->seeInDatabase('users', ['email' => 'taylor@laravel.com']);
    }

    public function testUserCreateFromArray()
    {
        $data = [
            'name'      => 'joe doe',
            'email'     => 'joe@doe.com',
            'password'  => '12345678'
        ];
        $this->post('/user', $data)
            ->seeJsonEquals(['created' => true]);
    }

    public function getData()
    {
        $data = [
            'name'      => 'joe',
            'email'     => 'joe@doe.com',
            'password'  => '12345678',
            'password_confirmation' => '12345678'
        ];
        return $data;
    }

}


//public function testUserUpdate()
//{

//        $data = $this->getData(['name' => 'jane']);
//        $this->put('/user/1', $data)
//            ->seeJsonEquals(['updated' => true]);
//
//        // Obtenemos los datos de dicho usuario modificado
//        // y verificamos que el nombre sea el correcto
//
//        $this->get('user/1')
//            ->seeJson(['name' => 'jane']);
//}

//public function testUserDelete()
//{
    // Eliminamos al usuario
//
//        $this->delete('user/1')
//            ->seeJson(['deleted' => true]);
//}


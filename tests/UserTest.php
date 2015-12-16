<?php

use \Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{

    use DatabaseTransactions;

    public function testUserCreateFromForm()
    {
//        $this->visit('/user/create')
//            ->type('Taylor Otwell', 'name')
//            ->type('taylor@laravel.com', 'email')
//            ->type('secret', 'password')
//            ->type('secret', 'password_confirmation')
//            ->press('Register')
//            ->seeInDatabase('users', ['email' => 'taylor@laravel.com']);
    }

    public function testUserCreateErrorFromArray()
    {
//        //probamos crear un usuario que no cumple el requisito por longitud del campo nombre
//
//        $data = [
//            'name'      => 'joe',
//            'email'     => 'joe@doe.com',
//            'password'  => '12345678',
//            'password_confirmation'  => '12345678'
//        ];
//        $this->post('/user', $data)
//            ->seeStatusCode(302);
//
//        //creamos un usuario valido
//
//        $data = [
//            'name'      => 'joedoe',
//            'email'     => 'joe@doe.com',
//            'password'  => '12345678',
//            'password_confirmation'  => '12345678'
//        ];
//        $this->post('/user', $data)
//            ->seeJsonEquals(['created' => true]);
//
//        //modificamos un usuario
//
//        $data = [
//            'name'      => 'joedoe',
//            'email'     => 'joe@doe.com'
//        ];
//        $this->patch('/user/1', $data)
//            ->seeJsonEquals(['updated' => true]);
//
//        //borrar un usuario
//
//        $this->delete('/user/1')
//            ->seeJsonEquals(['deleted' => true ]);
//
    }


}


<?php

use \Illuminate\Foundation\Testing\WithoutMiddleware;
use \Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;

    public function testUserCreateErrorNameTooShort()
    {
        $data = [
            'name' => 'joe',
            'email' => 'joe@doe.com',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ];
        $this->post('/user', $data)
            ->seeStatusCode(302);
    }

    public function testUserCreate()
    {
        $data = [
            'name' => 'manuel',
            'email' => 'joe@doe.com',
            'password' => '12345678',
            'password_confirmation' => '12345678'
        ];

        $this->post('/user', $data)
            ->seeInDatabase('users', ['email' => 'joe@doe.com']);
    }

}


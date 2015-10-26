<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{

    use DatabaseMigrations;

    public function testUserCreate()
    {
        $data = $this->getData();

        // Creamos un nuevo usuario y verificamos la respuesta
        $this->post('/user', $data)->seeJsonEquals(['created' => true]);

        $data = $this->getData(['name' => 'jane']);
        // Actualizamos al usuario recien creado (id = 1)
        $this->put('/user/1', $data)
            ->seeJsonEquals(['updated' => true]);

        // Obtenemos los datos de dicho usuario modificado
        // y verificamos que el nombre sea el correcto
        $this->get('user/1')->seeJson(['name' => 'jane']);

        // Eliminamos al usuario
        $this->delete('user/1')->seeJson(['deleted' => true]);
    }

    public function getData($custom = array())
    {
        $data = [
            'name'      => 'joe',
            'email'     => 'joe@doe.com',
            'password'  => '12345'
        ];
        $data = array_merge($data, $custom);
        return $data;
    }
}

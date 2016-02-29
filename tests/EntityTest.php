<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class EntityTest extends TestCase
{
    use DatabaseTransactions;

    public function testEntityCreateFromForm()
    {
        $user = factory(App\Models\User::class)->create();

        $this->actingAs($user)
            ->visit('/entity/create')
            ->type('watchdog', 'company')
            ->type('manuel', 'first_name')
            ->type('calero', 'last_name')
            ->press(trans('forms.new'))
            ->seeInDatabase('entities', ['company' => 'watchdog']);
    }

//    public function testEntityCreateErrorFromArray()
//    {
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
//            'email'     => 'joedoe@laravel.com'
//        ];
//        $this->patch('/user/1', $data)
//            ->seeJsonEquals(['updated' => true]);
//
//        //borrar un usuario
//
//        $this->delete('/user/1')
//            ->seeJsonEquals(['deleted' => true ]);
//
//    }
//
//
//}


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
}


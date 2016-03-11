<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EntityTest extends TestCase
{
    use WithoutMiddleware;
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

    public function testEntityCreateErrorCompanyTooShort()
    {
        $user = factory(App\Models\User::class)->create();

        $data = [
            'company'       => 'wat',
            'first_name'    => 'manuel',
            'last_name'     => 'calero'
        ];

        $this->actingAs($user)
            ->post('/entity', $data)
            ->seeStatusCode(302);
    }

    public function testEntityCreate()
    {
        $user = factory(App\Models\User::class)->create();

        $data = [
            'company'       => 'gestool',
            'first_name'    => 'manuel',
            'last_name'     => 'calero'
        ];

        $this->actingAs($user)
            ->post('/entity', $data)
            ->seeStatusCode(200);
    }

}



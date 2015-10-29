<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Dog;
use Illuminate\Support\Facades\Artisan;

class ExampleTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate');
    }

    public function tearDown()
    {
        Artisan::call('migrate:reset');

        parent::tearDown();
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }

    public function testFetchesAdultsDogs()
    {
        Dog::create(['name' => 'Rover', 'age' => 1]);
        Dog::create(['name' => 'Bob', 'age' => 7 ]);

        $dogs = Dog::adults()->get();

        $this->assertCount(1, $dogs);
    }
}

<?php

use Illuminate\Database\Seeder;

class EntityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entities')->truncate();

        factory(App\Entity::class, 50)->create();

    }
}

DatabaseSeeder.php<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;

define('recordsNumber', 50);

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();
        factory(App\Models\User::class)->create([
            'name' => 'alberto',
            'email' => 'alberto@gestool.es',
            'password' => bcrypt('admin')
        ]);

        factory(App\Models\User::class, recordsNumber)->create();

        DB::table('entities')->truncate();
        factory(App\Models\Entity::class, recordsNumber)->create();

        DB::table('addresses')->truncate();
        factory(App\Models\Address::class, recordsNumber)->create();

        DB::table('Roles')->truncate();
        factory(App\Models\Rol::class)->create([
            'name' => 'client'
        ]);
        factory(App\Models\Rol::class)->create([
            'name' => 'provider'
        ]);
        factory(App\Models\Rol::class)->create([
            'name' => 'agent'
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

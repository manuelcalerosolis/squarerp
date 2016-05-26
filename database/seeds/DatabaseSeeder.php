DatabaseSeeder.php<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\EntityRole;

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

        DB::table('roles')->truncate();
        factory(App\Models\Role::class)->create([
            'name' => 'client'
        ]);
        factory(App\Models\Role::class)->create([
            'name' => 'provider'
        ]);
        factory(App\Models\Role::class)->create([
            'name' => 'agent'
        ]);

        DB::table('langs')->truncate();
        factory(App\Models\Lang::class)->create([
            'name' => 'Español (Spanish)',
            'iso_code' => 'es',
            'language_code' => 'es-es'
        ]);

        DB::table('products')->truncate();
        factory(App\Models\Product::class, recordsNumber)->create();

        DB::table('products_langs')->truncate();
        factory(App\Models\ProductLang::class, recordsNumber)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

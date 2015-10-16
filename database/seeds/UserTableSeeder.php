UserTableSeeder.php<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();

        factory(App\User::class)->create([
            'name' => 'administrador',
            'email' => 'mcalero@gestool.es'
        ]);
        factory(App\User::class, 49)->create();
    }
}


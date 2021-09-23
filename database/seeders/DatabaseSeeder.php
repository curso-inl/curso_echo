<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comisaria')->insert(
            [ 'descripcion'=>'Comisaria 11']
        );
        DB::table('comisaria')->insert([
            'descripcion' => 'Comisaria 12'
        ]);
        DB::table('users')->insert([
            'name' => 'Oliver',
            'email' => 'oliver@me.com',
            'password' => bcrypt('123'),
            'id_comisaria' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Alguien Mas',
            'email' => 'alguien@me.com',
            'password' => bcrypt('123'),
            'id_comisaria' => 2
        ]);

        // \App\Models\User::factory(10)->create();
    }
}

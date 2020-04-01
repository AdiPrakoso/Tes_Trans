<?php

use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => 'admin',
        	'name' => 'Admin',
        	'email' => 'admin@transisi.id',
        	'password' => bcrypt('transisi'),
        	'remember_token' => str_random(60)

        ]);
    }
}

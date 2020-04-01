<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('id_ID');

        for($i=0;$i<10;$i++){
        	DB::table('companies')->insert([
        		'nama' => $faker->name,
        		'email' => $faker->email,
        		'logo' => $faker->numberBetween(1,20),
        		'website' => $faker->name

        	]);
        }
    }
}

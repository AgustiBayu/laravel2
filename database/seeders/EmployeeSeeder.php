<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 10; $i++){

            DB::table('employees')->insert([
    			'nama' => $faker->name,
    			'jeniskelamin' => $faker->randomElement(['cowok' ,'cewek']),
    			'notelepon' => $faker->phoneNumber(),
    			// 'poto' => $faker->text(['aeae.jpg']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
    		]);
        }
        // DB::table('employees')->insert([
        //     'nama' => 'Agusti Bayu Samudro',
        //     'jeniskelamin' => 'cowok',
        //     'notelepon' => '081330654123',
        //     'poto' => 'aeae.jpg',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
    }
}

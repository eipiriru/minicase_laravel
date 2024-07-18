<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
            DB::table('pegawai')->insert([
                'name' => $faker->name,
                'alamat' => $faker->address,
                'pekerjaan' => $faker->jobTitle(),
                'tgl_lahir' => $faker->dateTime(),
            ]);
        }
    }
}

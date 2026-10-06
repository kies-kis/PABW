<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'jurusan' => $faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Mesin']),
                'umur' => $faker->numberBetween(18, 25),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
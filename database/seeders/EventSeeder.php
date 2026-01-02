<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('events')->insert([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'time' => $faker->dateTimeBetween('+1 days', '+1 year'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

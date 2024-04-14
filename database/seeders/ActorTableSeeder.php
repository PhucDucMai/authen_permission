<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // Import Faker
use Illuminate\Support\Facades\Hash;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Actor::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail
            ]);
        }
    }
}

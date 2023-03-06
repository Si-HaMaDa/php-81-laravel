<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('flights')->insert([
                'name' => Str::random(10),
                'number' => rand(1000, 9999),
                'color' => Str::random(10),
                'description' => Str::random(100),
                'active' => rand(0, 1),
            ]);
        }
    }
}

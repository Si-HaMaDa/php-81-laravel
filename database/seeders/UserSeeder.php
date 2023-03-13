<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'admin@admin.com',
        ], [
            'name' => 'John',
            'password' => Hash::make('password'),
            'is_admin' => 1
        ]);
        User::factory(10)->create();
    }
}

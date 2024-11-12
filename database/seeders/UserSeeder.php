<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Arie Setiadi',
            'email' => 'ariee.setiadi@gmail.com',
            'password' => Hash::make(config('auth.user_default_password')),
        ]);
    }
}

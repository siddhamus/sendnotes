<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->withRole('admin')->create([
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->withRole('instructor')->count(5)->create();

        User::factory()->withRole('student')->count(10)->create();
    }
}

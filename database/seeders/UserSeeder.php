<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory()->withRole('admin')->create([
            'email' => 'admin@example.com',
        ]);

        User::factory()->withRole('instructor')->count(5)->create();

        User::factory()->withRole('student')->count(10)->create();
    }
}

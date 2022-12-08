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
     *
     * @return void
     */
    public function run()
    {
        User::factory(15)->create();
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123456),
            'role_id' => 1,
        ]);
        User::factory()->create([
            'first_name' => 'Editor',
            'last_name' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make(123456),
            'role_id' => 2,
        ]);
        User::factory()->create([
            'first_name' => 'viewer',
            'last_name' => 'viewer',
            'email' => 'viewer@gmail.com',
            'password' => Hash::make(123456),
            'role_id' => 3,
        ]);
    }
}

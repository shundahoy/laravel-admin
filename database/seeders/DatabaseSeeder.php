<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create([
            'name' => 'Admin'
        ]);
        Role::factory()->create([
            'name' => 'Editor'
        ]);
        Role::factory()->create([
            'name' => 'Viewer'
        ]);
        User::factory(30)->create();
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

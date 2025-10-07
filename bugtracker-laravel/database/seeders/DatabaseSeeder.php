<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ticket;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => Hash::make('password'), 'is_admin' => true]
        );

        $user = User::firstOrCreate(
            ['email' => 'user@example.com'],
            ['name' => 'User', 'password' => Hash::make('password')]
        );

        Ticket::factory()->count(5)->create(['assigned_to' => $admin->id, 'reporter_id' => $user->id]);
        Ticket::factory()->count(5)->create(['assigned_to' => $user->id, 'reporter_id' => $admin->id]);
    }
}

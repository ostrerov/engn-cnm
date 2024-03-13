<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Operators;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@yourdomain.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('admin'),
            'created_at' => Carbon::now()
        ]);

        Operators::factory()->create([
            'name' => 'Kyivstar'
        ]);
    }
}

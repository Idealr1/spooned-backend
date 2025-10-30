<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\SectionAndTranslationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!User::where('email', 'admin@spooned.local')->exists()) {
            User::create([
                'name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@spooned.local',
                'password' => Hash::make('Admin123!'),
                'role' => 'admin',
            ]);
        }

        $this->call([
            SectionAndTranslationSeeder::class,
        ]);
    }
}

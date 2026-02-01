<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create super admin user
        $superAdmin = User::firstOrCreate(
            ['email' => 'admin@websekolah.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'is_active' => true,
                'no_telephone' => '081234567890',
            ]
        );

        // Assign super_admin role
        $superAdmin->assignRole('super_admin');

        $this->command->info('Super Admin created successfully!');
        $this->command->info('Email: admin@websekolah.com');
        $this->command->info('Password: password');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'manage_users',
            'verify_users',
            'manage_roles',
            'manage_permissions',
            'manage_posts',
            'publish_posts',
            'manage_categories',
            'view_dashboard',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission, 'guard_name' => 'web']
            );
        }

        // Create roles and assign permissions

        // 1. Super Admin - Full access (bypass all checks)
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        $superAdmin->syncPermissions(Permission::all());

        // 2. Admin - Manage users, posts, categories
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $admin->syncPermissions([
            'manage_users',
            'verify_users',
            'manage_posts',
            'publish_posts',
            'manage_categories',
            'view_dashboard',
        ]);

        // 3. Editor - Create/edit posts & categories
        $editor = Role::firstOrCreate(['name' => 'editor', 'guard_name' => 'web']);
        $editor->syncPermissions([
            'manage_posts',
            'manage_categories',
            'view_dashboard',
        ]);

        // 4. Viewer - Read-only access
        $viewer = Role::firstOrCreate(['name' => 'viewer', 'guard_name' => 'web']);
        $viewer->syncPermissions([
            'view_dashboard',
        ]);

        $this->command->info('Roles and permissions created successfully!');
    }
}

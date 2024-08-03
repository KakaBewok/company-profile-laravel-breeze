<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage statistics',
            'manage products',
            'manage principles',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections',
        ];

        //save permissions list to db
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                [
                    'name' => $permission
                ]
            );
        }

        //create roles
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);
        $designerRole = Role::firstOrCreate([
            'name' => 'designer'
        ]);
        $designerPermissions = [
            'manage products',
            'manage principles',
            'manage testimonials'
        ];
        $designerRole->syncPermissions($designerPermissions);


        $user = User::create([
            'name' => 'noprizal',
            'email' => 'rizalnov667@gmail.com',
            'password' => bcrypt(1234567890)
        ]);
        $user->assignRole($superAdminRole);
    }
}

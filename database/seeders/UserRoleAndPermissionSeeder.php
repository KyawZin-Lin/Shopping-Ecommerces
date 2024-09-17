<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions =[
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',

            'package-list',
            'package-create',
            'package-edit',
            'package-delete',

            'category-list',
            'category-create',
            'category-edit',
            'category-delete',
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $superAdminRole = Role::create(['name' => "SuperAdmin"]);
        $superAdminRole->givePermissionTo($permissions);

        $superAdminUser=User::create([
            'name' => 'SuperAdmin User', // Replace with your desired name
            'email' => 'superadmin@gmail.com', // Replace with your desired email
            'password' => Hash::make('12345678'), // Replace with a strong password
        ]);

        $superAdminUser->assignRole('SuperAdmin');


        $shopOwnerRole=Role::create(['name' => "ShopOwner"]);
        // $shopOwnerRole->givePermissionTo([
        //     'category-list',
        //     'category-create',
        //     'category-edit',
        //     'category-delete',
        // ]);

        $shopOwnerUser1=User::create([
            'name' => 'ShopOwner User', // Replace with your desired name
            'email' => 'shopowner@gmail.com', // Replace with your desired email
            'password' => Hash::make('12345678'), // Replace with a strong password
        ]);

        $shopOwnerUser1->assignRole('ShopOwner');

        $shopOwnerUser2=User::create([
            'name' => 'ShopOwner User 2', // Replace with your desired name
            'email' => 'shopowner2@gmail.com', // Replace with your desired email
            'password' => Hash::make('12345678'), // Replace with a strong password
        ]);

        $shopOwnerUser2->assignRole('ShopOwner');

    }
}

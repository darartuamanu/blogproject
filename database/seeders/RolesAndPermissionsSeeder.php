<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'publish posts']);
        Permission::create(['name' => 'subscribe']); // New permission

        // Create roles and assign existing permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('edit posts');
        $role->givePermissionTo('delete posts');
        $role->givePermissionTo('publish posts');

        $role = Role::create(['name' => 'editor']);
        $role->givePermissionTo('edit posts');
        $role->givePermissionTo('publish posts');
        
        $role = Role::create(['name' => 'author']);
        $role->givePermissionTo('publish posts');

        // Create the subscriber role and assign permissions
        $role = Role::create(['name' => 'subscriber']);
        $role->givePermissionTo('subscribe'); // Assign the 'subscribe' permission

        // You can also create a specific admin role if you need different permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('edit posts');
        $role->givePermissionTo('delete posts');
        $role->givePermissionTo('publish posts');
    }
}


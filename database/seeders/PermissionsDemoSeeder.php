<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        #Permission::create(['name' => 'edit articles']);
        #Permission::create(['name' => 'delete articles']);
        #Permission::create(['name' => 'publish articles']);
        #Permission::create(['name' => 'unpublish articles']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role1 = Role::create(['name' => 'Super-Admin']);
        #$role2->givePermissionTo('publish articles');
        #$role2->givePermissionTo('unpublish articles');

        // create roles and assign existing permissions
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'unix']);
        $role4 = Role::create(['name' => 'win']);
        $role5 = Role::create(['name' => 'database']);
        $role6 = Role::create(['name' => 'app']);
        $role7 = Role::create(['name' => 'backup']);

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Usuario Super-Admin',
            'email' => 'superadmin@test.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Usuario Admin',
            'email' => 'admin@test.com',
        ]);
        $user->assignRole($role2);
        
        $user = \App\Models\User::factory()->create([
            'name' => 'Usuario Unix',
            'email' => 'unix@test.com',
        ]);
        $user->assignRole($role3);

        $user = \App\Models\User::factory()->create([
            'name' => 'Usuario Win',
            'email' => 'win@test.com',
        ]);
        $user->assignRole($role4);

        $user = \App\Models\User::factory()->create([
            'name' => 'Usuario BD',
            'email' => 'bd@test.com',
        ]);
        $user->assignRole($role5);


        $user = \App\Models\User::factory()->create([
            'name' => 'Usuario App',
            'email' => 'app@test.com',
        ]);
        $user->assignRole($role6);


        $user = \App\Models\User::factory()->create([
            'name' => 'Usuario AyR',
            'email' => 'ayr@test.com',
        ]);
        $user->assignRole($role7);
    }
}

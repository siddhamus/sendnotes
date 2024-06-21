<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
{
    if (app()->environment('local', 'staging')) {
        // Only seed in local and staging environments
        $this->seedRolesAndPermissions();
    }
}

protected function seedRolesAndPermissions()
{
     // Create Roles
     $adminRole = Role::firstOrCreate(['name' => 'admin']);
     $instructorRole = Role::firstOrCreate(['name' => 'instructor']);
     $studentRole = Role::firstOrCreate(['name' => 'student']);

     // Define Permissions
     $permissions = [
         // Course permissions
         'view courses',
         'create courses',
         'edit courses',
         'delete courses',
         'publish courses',

         // Lesson permissions
         'view lessons',
         'create lessons',
         'edit lessons',
         'delete lessons',
         'publish lessons',
         
         // User permissions
         'view users',
         'create users',
         'edit users',
         'delete users',
         'assign roles',

         // Dashboard permissions
         'access dashboard',

         // Profile permissions
         'view profile',
         'edit profile',

         // Blog permissions (if managing content like a blog)
         'view blogs',
         'create blogs',
         'edit blogs',
         'delete blogs',

         // Contact page permissions (if managing contact requests)
         'view contacts',
         'manage contacts',

         // Miscellaneous
         'view resources',
         'manage resources'
     ];

     // Create Permissions
     foreach ($permissions as $permission) {
         Permission::firstOrCreate(['name' => $permission]);
     }

     // Assign Permissions to Roles
     $adminRole->givePermissionTo(Permission::all());
     $instructorRole->givePermissionTo([
         'view courses',
         'create courses',
         'edit courses',
         'publish courses',
         'view lessons',
         'create lessons',
         'edit lessons',
         'publish lessons',
         'view profile',
         'edit profile',
         'access dashboard',
         'view resources',
     ]);
     $studentRole->givePermissionTo([
         'view courses',
         'view lessons',
         'view profile',
         'edit profile',
         'view resources',
     ]);
}

}

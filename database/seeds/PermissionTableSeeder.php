<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'comment-list',
            'comment-create',
            'comment-edit',
            'comment-delete',
            'comment-forward',
            'comment-own-department-list',
            'comment-own-department-edit',
            'comment-own-department-forward',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'user-own-view',
            'user-own-edit',
            
            
         ];
 
 
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}

<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo([
        'admin',
        'product-list',
        'product-create',
        'product-edit',
        'product-delete'
        ]);

        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo(['user','product-list']);   
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Exceptions\PermissionAlreadyExists;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = [
            'owner' => [
                'edit property',
                'create property',
                'delete property',
            ],
            'admin' => [
                'accept property'
            ]
        ];
        $this->assignRolePermissions($rows);
    }

    protected function assignRolePermissions($rows)
    {
        //TODO: move this to helper function
        foreach ($rows as $role_name => $permissions) {
            $role = Role::create(['name' => $role_name]);
            foreach ($permissions as $per_name) {
                try{
                    $permissions = Permission::create(['name' => $per_name]);
                    $role->givePermissionTo($permissions);
                }catch(PermissionAlreadyExists $e)
                {
                    $role->givePermissionTo($per_name);
                }
            }
        }
    }
}

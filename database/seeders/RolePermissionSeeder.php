<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles_permissions')
            ->insert(
                [
                    //assign permissions for User roles. id = 1
                    [
                        'role_id' => 1,
                        'permission_id' => 1
                    ],

                    //assign permissions for Administrator roles. id = 2
                    [
                        'role_id' => 2,
                        'permission_id' => 1
                    ],
                    [
                        'role_id' => 2,
                        'permission_id' => 2
                    ],
                    [
                        'role_id' => 2,
                        'permission_id' => 3
                    ],

                    //assign permissions for Manager roles. id = 3
                    [
                        'role_id' => 3,
                        'permission_id' => 1
                    ],

                    [
                        'role_id' => 3,
                        'permission_id' => 2
                    ],

                ]
            );
    }
}

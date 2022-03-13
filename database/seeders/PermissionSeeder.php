<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Permission::create([
            'name' => 'manage_users',
            'description' => 'Permission to manage all users'
        ]);

        Permission::create([
            'name' => 'manage_chart',
            'description' => 'Permission to manage all charts'
        ]);

        Permission::create([
            'name' => 'manage_transaction',
            'description' => 'Permission to manage all transactions'
        ]);
    }
}

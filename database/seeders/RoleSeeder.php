<?php

namespace Database\Seeders;

use App\Models\Role;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'id' => 1,
            'name' => 'Administrator',
            'description' => 'Administrator adalah user yang mampu mengakses seluruh struktur sistem'
        ]);

        Role::create([
            'id' => 2,
            'name' => 'Researcher',
            'description' => 'User yang membuat survey'
        ]);

        Role::create([
            'id' => 3,
            'name' => 'Respondent',
            'description' => 'user yang menjawab survey'
        ]);
    }
}

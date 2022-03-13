<?php

namespace Database\Seeders;

use App\Models\UsersProfile;
use Database\Factories\UsersProfileFactory;
use Illuminate\Database\Seeder;

class UsersProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = new UsersProfileFactory();
        for ($i = 16; $i <= 60; $i++) {
            # code...
            $factory
                ->user($i)
                ->create();
        }
    }
}

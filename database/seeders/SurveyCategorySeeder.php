<?php

namespace Database\Seeders;

use Database\Factories\SurveyCategoryFactory;
use Illuminate\Database\Seeder;

class SurveyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $factory = new SurveyCategoryFactory();

        for ($i = 0; $i < 5; $i++) {
            # code...
            $factory
                ->category($i)
                ->create();
        }
    }
}

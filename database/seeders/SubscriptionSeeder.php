<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $faker = Faker::create();
        Subscription::factory()
            ->freeUser()
            ->create();
        Subscription::factory()
            ->perSurvey()
            ->create();
        Subscription::factory()
            ->mothlySubsription()
            ->create();
        Subscription::factory()
            ->enterprise()
            ->create();
    }
}

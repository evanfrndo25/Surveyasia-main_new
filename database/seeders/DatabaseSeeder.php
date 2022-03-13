<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [
                RoleSeeder::class,
                // PermissionSeeder::class,
                UserSeeder::class,
                UsersProfileSeeder::class,
                // RolePermissionSeeder::class,
                SubscriptionSeeder::class,
                CategorySubcriptionsSeeder::class,
                UsersSubscriptionsSeeder::class,
                // SurveyCaseSeeder::class,
                NewsSeeder::class,
                TransactionSeeder::class,
                SurveyCategorySeeder::class,
                QuestionBankTemplatesSeeder::class,
                QuestionBankSubTemplateSeeder::class,

                // QuestionOptionSeeder::class,
                ChartSeeder::class,

                SurveySeeder::class,
                QuestionSeeder::class,

            ]
        );
    }
}

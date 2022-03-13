<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;
use App\Models\CategorySubcriptions;
use Database\Factories\CategorySubcriptionFactory;

class CategorySubcriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $free = [
            'subscription_id' => Subscription::FREE,
            'title' => 'Free',
            'description' => 'Everything you need to set your survey project in motion. Get a feel of the tool.',
            'price' => 0,

        ];
        CategorySubcriptions::insert($free);

        $payPerSurvey = [
            [
                'subscription_id' => Subscription::PAY_PER_SURVEY,
                'title' => 'Make Your Own',
                'description' => 'Good choice for those of you who want to customize it yourself',
                'price' => 20000,

            ],
            [
                'subscription_id' => Subscription::PAY_PER_SURVEY,
                'title' => 'Contact Us',
                'description' => 'Opted by businesses looking for a custom solution.',
                'price' => 0,

            ],
        ];

        CategorySubcriptions::insert($payPerSurvey);

        $personal = [
            [
                'subscription_id' => Subscription::PERSONAL,
                'title' => 'Basic',
                'description' => 'All the integral features to get started with data collection',
                'price' => 249000,

            ],
            [
                'subscription_id' => Subscription::PERSONAL,
                'title' => 'Essential Annual',
                'description' => 'For early-stage start-ups. Your first step towards, building a brand.',
                'price' => 199000,

            ],
            [
                'subscription_id' => Subscription::PERSONAL,
                'title' => 'Plus Annual',
                'description' => 'Ideal for professionals. Meet all your survey requirements at once.',
                'price' => 449000,

            ],
            [
                'subscription_id' => Subscription::PERSONAL,
                'title' => 'Essential Annual Yearly',
                'description' => 'For early-stage start-ups. Your first step towards, building a brand.',
                'price' => 2388000,
            ],
            [
                'subscription_id' => Subscription::PERSONAL,
                'title' => 'Plus Annual Yearly',
                'description' => 'Ideal for professionals. Meet all your survey requirements at once.',
                'price' => 5388000,
            ]
        ];
        CategorySubcriptions::insert($personal);

        $business = [
            [
                'subscription_id' => Subscription::BUSINESS,
                'title' => 'Advantage',
                'description' => 'Perfect for small teams. Premium features to grow your business seamlessly.',
                'price' => 1099000,

            ],
            [
                'subscription_id' => Subscription::BUSINESS,
                'title' => 'Enterprise',
                'description' => 'All-rounder solution for your enterprise. Elevate your experience management.',
                'price' => 1999000,


            ],
            [
                'subscription_id' => Subscription::BUSINESS,
                'title' => 'Corporate',
                'description' => 'Opted by businesses looking for a custom solution.',
                'price' => 0,

            ]
        ];

        CategorySubcriptions::insert($business);
    }
}

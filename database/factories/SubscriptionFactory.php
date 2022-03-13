<?php

namespace Database\Factories;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subscription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'features' => $this->faker->paragraph()
        ];
    }

    public function freeUser()
    {
        # code...
        return $this->state(function (array $attr) {
            return [
                'name' => 'Free User',
                'slug' => 'free-user'
            ];
        });
    }

    public function perSurvey()
    {
        # code...
        return $this->state(function (array $attr) {
            return [
                'name' => 'Pay Per Survey',
                'slug' => 'pay-per-survey'
            ];
        });
    }

    public function mothlySubsription()
    {
        # code...
        return $this->state(function (array $attr) {
            return [
                'name' => 'Personal',
                'slug' => 'personal'
            ];
        });
    }

    public function enterprise()
    {
        # code...
        return $this->state(function (array $attr) {
            return [
                'name' => 'Business',
                'slug' => 'business'
            ];
        });
    }
}

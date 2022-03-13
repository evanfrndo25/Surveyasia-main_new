<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SurveyCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker,
            'description' => $this->faker->words(7, true)
        ];
    }

    public function category($index)
    {
        # code...
        $category = [
            'Customers',
            'Education',
            'Healthcare',
            'Employee',
            'Market Research'
        ];

        return $this->state(['name' => $category[$index]]);
    }
}

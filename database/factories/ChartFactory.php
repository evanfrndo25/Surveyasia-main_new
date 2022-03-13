<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(4, true),
            'description' => $this->faker->text(),
            'library_from' => $this->faker->words(3, true),
            'supported_questions' => $this->faker->text(),
            'default_configuration' => $this->faker->text()
        ];
    }

    /**
     * Define anything
     */
    public function makeSeed(array $data)
    {
        # code...
        return $this->state($data);
    }
}

<?php

namespace Database\Factories;

use App\Models\Survey;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SurveyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Survey::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->word(),
            'description' => $this->faker->word(),
            'user_id' => 1,
            'slug' => Str::slug($this->faker->words(3, true)),
            'category_id' => 1,
            'estimate_completion' => $this->faker->randomDigitNotNull(),
            'shareable_link' => null,
            'signature' => $this->faker->words(3, true),
            'attempted' => 0,
            'max_attempt' => 20,
            'status' => 'draft',
            'reward_point' => 0,
            'key' => null,
            'type' => 'free',
            'link_expired_at' => null
        ];
    }
}

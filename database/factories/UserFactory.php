<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'job' => $this->faker->jobTitle(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function researcher()
    {
        # code...
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::IS_RESEARCHER,
            ];
        });
    }
    public function date($year, $month, $day)
    {
        # code...
        return $this->state([
            'created_at' => Carbon::createFromDate($year, $month, $day),
            'updated_at' => Carbon::createFromDate($year, $month, $day)
        ]);
    }

    public function respondent()
    {
        # code...
        return $this->state(function (array $attributes) {
            return [
                'role_id' => Role::IS_RESPONDENT,
            ];
        });
    }

    public function changeDate($year, $month, $day)
    {
        # code...
        return $this->state([
            'created_at' => Carbon::createFromDate($year, $month, $day),
            'updated_at' => Carbon::createFromDate($year, $month, $day)
        ]);
    }
}

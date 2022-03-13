<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UsersProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Bezhanov\Faker\Provider\Educator;
use Bezhanov\Faker\Provider\Demographic;

class UsersProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersProfile::class;

    private $user;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //set faker provider extension
        $this->faker->addProvider(new Educator($this->faker));
        $this->faker->addProvider(new Demographic($this->faker));
        return [
            'user_id' => $this->faker->randomDigitNotNull(),
            'nik' => $this->faker->nik,
            'nama_lengkap' => $this->faker->title('male'),
            'gender' => 'L',
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->date(),
            'image_ktp' => url('/public/assets/img/Ktp.png'),
            'job' => $this->faker->jobTitle(),
            'job_location' => $this->faker->city(),
            'ktp_province' => $this->faker->state,
            'ktp_city' => $this->faker->city(),
            'ktp_district' => $this->faker->streetSuffix(),
            'ktp_postal_code' => $this->faker->postcode(),
            'ktp_address' => $this->faker->address(),
            'province' => $this->faker->state,
            'city' => $this->faker->city(),
            'district' => $this->faker->streetSuffix(),
            'postal_code' => $this->faker->postcode(),
            'address' => $this->faker->address(),
        ];
    }

    public function user($userId)
    {
        # code...
        $this->user = User::where('id', '=', $userId)->first();

        return $this->state([
            'user_id' => $this->user->id,
            'nama_lengkap' => $this->user->nama_lengkap,
        ]);
    }
}

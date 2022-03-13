<?php

namespace Database\Seeders;

use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create fake researcher
        $faker = Faker::create('id_ID');
        $date = DateTime::createFromFormat('Y m d H i s', '2009-02-15 15:16:17');
        // DB::table('users')->insert([
        //     [
        //         'id' => 20,
        //         'first_name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         'username' => $faker->userName(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'created_at' => Carbon::createFromDate('2021', '09', '01'),
        //         'updated_at' => now(),
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('12345678'), // password
        //         'remember_token' => Str::random(10),
        //         'role_id' => 2,
        //         'subscription_id' => 1
        //     ],
        //     [
        //         'id' => 2,
        //         'first_name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         'username' => $faker->userName(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('12345678'), // password
        //         'remember_token' => Str::random(10),
        //         'role_id' => 2,
        //         'subscription_id' => 2
        //     ],
        //     [
        //         'id' => 3,
        //         'first_name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         'username' => $faker->userName(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('12345678'), // password
        //         'remember_token' => Str::random(10),
        //         'role_id' => 2,
        //         'subscription_id' => 3
        //     ],
        //     [
        //         'id' => 4,
        //         'first_name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         'username' => $faker->userName(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('12345678'), // password
        //         'remember_token' => Str::random(10),
        //         'role_id' => 2,
        //         'subscription_id' => 4
        //     ],
        //     [
        //         'id' => 5,
        //         'first_name' => $faker->firstName(),
        //         'last_name' => $faker->lastName(),
        //         'username' => $faker->userName(),
        //         'email' => $faker->unique()->safeEmail(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'email_verified_at' => now(),
        //         'password' => Hash::make('12345678'), // password
        //         'remember_token' => Str::random(10),
        //         'role_id' => 2,
        //         'subscription_id' => 5
        //     ],
        // ]);


        //create 5 researchers
        User::factory()
            ->researcher()
            ->count(15)
            ->create();

        //create 5 respondents
        User::factory()
            ->respondent()
            ->count(45)
            ->create();


        //create admin
        User::create([
            'nama_lengkap' => 'Iam Admin',
            'password' => Hash::make('12345678'),
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'role_id' => 1
        ]);
    }
}

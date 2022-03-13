<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class SurveyCaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // init faker
        $faker = Faker::create('id_ID');

        //create researcher user
        DB::table('users')->insert([
            'id' => 165, //reserved id
            'nama_lengkap' => $faker->title(),
            'email' => $faker->unique()->safeEmail(),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'subscription_id' => 1
        ]);

        //create respondent user
        DB::table('users')->insert([
            'id' => 166, //reserved id
            'nama_lengkap' => $faker->title(),
            'email' => $faker->unique()->safeEmail(),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
            'role_id' => 3,
            'subscription_id' => 1
        ]);

        //create fake survey
        DB::table('surveys')->insert([
            'id' => 165, //reserved id
            'title' => $faker->words(6, true),
            'description' => $faker->text(),
            'user_id' => 165, //reserved researcher id

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        for ($i = 1; $i <= 10; $i++) {
            # code...

            // create question with options and single answer
            if ($i / 2 != 1) {
                # code...
                //create a question
                DB::table('questions')->insert([
                    'survey_id' => 165, //reserved survey id

                    'has_options' => 'yes',
                    'multi_answers' => 'no',

                    'question' => $faker->text(),

                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                // create question with no options
            } else {
                //create a question
                DB::table('questions')->insert([
                    'survey_id' => 165, //reserved survey id

                    'has_options' => 'no',
                    'multi_answers' => 'no',

                    'question' => $faker->text(),

                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            // if the questions has options
            if ($i / 2 != 1) {
                for ($j = 0; $j < 4; $j++) {
                    # code...
                    // create options for question
                    DB::table('questions_option')->insert([
                        [
                            'question_id' => $i,
                            'value' => $faker->words(3, true),

                            'created_at' => now(),
                            'updated_at' => now(),
                        ]
                    ]);
                }
            }

            // generate random int between 0 to 3
            $randAns = random_int(0, 3);

            // if the questions doesn't allow multi answers
            if ($i / 2 != 1) {
                // create random single answers
                DB::table('answers')->insert([
                    'question_id' => $i,
                    'respondent_id' => 166,
                    'answer' => Question::with('options')->find($i)->first()->options[$randAns]->value,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } else {
                // loop through available options , check all in this case
                $value = array();
                foreach (Question::with('options')->find($i)->first()->options as $option) {
                    # code...
                    // only take the value from options and assign it to array
                    $value[] = $option->value;
                }

                // create random multi answers
                $implodeAns = implode(',', $value);
                DB::table('answers')->insert([
                    'question_id' => $i,
                    'respondent_id' => 166,
                    'answer' => $implodeAns,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

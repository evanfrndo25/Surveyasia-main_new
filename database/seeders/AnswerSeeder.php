<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // create a random answers
        DB::table('answers')->insert([
            'question_id' => 165,
            'respondent_id' => 166,
            'answer' => Question::with('options')->first()->options[0]->value,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

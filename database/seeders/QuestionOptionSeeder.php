<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions_option')->insert([
            //engg ==========================================================>
            [

                'question_id' => 2,
                'value' => 'male',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'question_id' => 2,
                'value' => 'female',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'question_id' => 3,
                'value' => 'Very often',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'value' => 'Often',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'value' => 'Quite Often',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'value' => 'Not too often',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 3,
                'value' => 'Not at all',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'value' => 'Very satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'value' => 'Satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'value' => 'Quite satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'value' => 'Somewhat dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 4,
                'value' => 'Very dissatisfied ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'value' => 'Very high quality ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'value' => 'High quality ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'value' => 'Neither high nor low quality ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'value' => 'Low quality ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 8,
                'value' => 'Very low quality ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'value' => 'Extremely likely ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'value' => 'Very likely ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'value' => 'Somewhat likely ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'value' => 'Not so likely ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 10,
                'value' => 'Not at all likely ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 12,
                'value' => 'Single',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 12,
                'value' => 'Married',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'value' => 'Doctor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'value' => 'PNS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'value' => 'Housewife',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'value' => 'Student/collage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'value' => 'Employee',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 13,
                'value' => 'And others',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 14,
                'value' => '<2.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 14,
                'value' => '2.000.000 – 5.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 14,
                'value' => '5.000.000 – 10.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 14,
                'value' => '> 10.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 15,
                'value' => '500.000 – 1.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 15,
                'value' => '1.000.000 – 3.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 15,
                'value' => '>3.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 16,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 16,
                'value' => 'No (you can continue to Q.7)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 17,
                'value' => 'Near my home ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 17,
                'value' => 'Cheap price',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 17,
                'value' => 'Complete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 17,
                'value' => 'The variety choice ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 17,
                'value' => 'Comfortable place  ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 18,
                'value' => 'Brand',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 18,
                'value' => 'Requirement',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 18,
                'value' => 'Discount',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 18,
                'value' => 'Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 18,
                'value' => 'Location',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 18,
                'value' => 'Price',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 19,
                'value' => 'Good quality, expensive price ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 19,
                'value' => 'Low quality, low price ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 19,
                'value' => 'Good quality, affordable price ',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //What’s your current job?
            [
                'question_id' => 20,
                'value' => 'Doctor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 20,
                'value' => 'PNS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 20,
                'value' => 'Housewife',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 20,
                'value' => 'Student/collage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 20,
                'value' => 'Employee',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 20,
                'value' => 'Etc',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How much do you earn in one month?
            [
                'question_id' => 21,
                'value' => '<500.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 21,
                'value' => '500.000 - 1.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 21,
                'value' => '1.000.000 – 4.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 21,
                'value' => '> 4.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //When was the last time you came to my shop?
            [
                'question_id' => 22,
                'value' => '1 year ago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 22,
                'value' => '2-11 month ago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 22,
                'value' => '1 month ago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 22,
                'value' => '1 week ago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 22,
                'value' => 'Yesterday',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 22,
                'value' => 'The first time',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Do you tend to subscribe to free loyalty or discount programs?
            [
                'question_id' => 28,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 28,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Do you tend to subscribe to paid loyalty or discount programs?
            [
                'question_id' => 28,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 28,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //What is the reason you choose our product over other products?
            [
                'question_id' => 32,
                'value' => 'Good quality, affordable price',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 32,
                'value' => 'Low quality, affordable price',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 32,
                'value' => 'Good quality, expensive price',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 32,
                'value' => 'Low quality, high price',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //What is your relationship to your child?

            [
                'question_id' => 33,
                'value' => 'Mother',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Father',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Step-mother',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Step-father',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Grandmother',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Grandfather',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Aunt',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Uncle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'Guardian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 33,
                'value' => 'other',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How often do you meet in person with teacher at your child’s school?
            [
                'question_id' => 34,
                'value' => 'Weekly or more',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 34,
                'value' => 'Monthly',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 34,
                'value' => 'Every few months',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 34,
                'value' => 'Once or twice per year',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 34,
                'value' => 'Almost never',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How much effort do you put into helping your child learn to do new things to
            [
                'question_id' => 35,
                'value' => 'A tremendous amount of effort',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 35,
                'value' => 'Quite a normal of effort',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 35,
                'value' => 'Some effort',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 35,
                'value' => 'A little bit of effort',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 35,
                'value' => 'Almost no effort',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How often do you supervise your child in doing homework?
            [
                'question_id' => 36,
                'value' => 'Every time',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 36,
                'value' => 'Every 3 days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 36,
                'value' => 'Every week',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 36,
                'value' => 'Every month',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 36,
                'value' => 'Not at all',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How much time do you give your child to do homework?
            [
                'question_id' => 37,
                'value' => '4 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 37,
                'value' => '3 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 37,
                'value' => '2 hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 37,
                'value' => '30-60 minutes',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How often do you and your child talk when he or she is having a problem with?
            [
                'question_id' => 39,
                'value' => 'Almost all the time',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 39,
                'value' => 'Frequently',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 39,
                'value' => 'Sometimes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 39,
                'value' => 'Once in a while',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 39,
                'value' => 'Almost never',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Does the school have the following dedicated
            [
                'question_id' => 40,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 40,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Does the school have the following dedicated
            [
                'question_id' => 41,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 41,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Does the school have the following dedicated
            [
                'question_id' => 42,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 42,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //Does the school have the following dedicated
            [
                'question_id' => 43,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 43,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Overall, how clean are the toilet facilities in the school?
            [
                'question_id' => 44,
                'value' => 'Very clean',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 44,
                'value' => 'Clean',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 44,
                'value' => 'Quite dirty',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 44,
                'value' => 'Very dirty',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 44,
                'value' => 'Not feasible',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Is the classroom door in good condition?
            [
                'question_id' => 46,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 46,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How good is the condition of the chair and the tables in the classroom?
            [
                'question_id' => 47,
                'value' => 'Very good',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 47,
                'value' => 'Almost good',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 47,
                'value' => 'Good',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 47,
                'value' => 'Bad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 47,
                'value' => 'Quite worrying',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Has your teacher provided better learning materials?
            [
                'question_id' => 48,
                'value' => 'Very good',
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'question_id' => 48,
                'value' => 'Quite good',
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'question_id' => 48,
                'value' => 'Bad',
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'question_id' => 48,
                'value' => 'Very bad',
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'question_id' => 48,
                'value' => 'Not at all good',
                'created_at' => now(),
                'updated_at' =>  now(),
            ],

            //Has your teacher ever hurt you in the class? (hurt in this case like being hit, pinched, etc.)
            [
                'question_id' => 49,
                'value' => 'Not at all',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 49,
                'value' => 'Once times',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 49,
                'value' => 'Every time I make mistake',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Is the atmosphere in classroom are comfortable when the teacher explain learning materials?
            [
                'question_id' => 50,
                'value' => 'Very comfortable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 50,
                'value' => 'Quite comfortable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 50,
                'value' => 'Not comfortable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 50,
                'value' => 'Very not comfortable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 50,
                'value' => 'Very stressful',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How does your teacher explain the learning materials in the class? (you can choose 1 or more)
            [
                'question_id' => 51,
                'value' => 'Presentation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 51,
                'value' => 'Explain with whiteboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 51,
                'value' => 'Move forward one by one',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 51,
                'value' => 'Self-learning',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 51,
                'value' => 'Many task',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 51,
                'value' => 'Called by name',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Have you ever experienced bullying in your life?
            [
                'question_id' => 53,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 53,
                'value' => 'No (you can continue to Q.5)',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //If so, when was the last time you experienced bullying?
            [
                'question_id' => 54,
                'value' => 'One year ago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 54,
                'value' => 'One month ago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 54,
                'value' => 'One week ago',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 54,
                'value' => 'Yesterday',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //What type of bullying have you experienced? (you can choose 1 or more)
            [
                'question_id' => 55,
                'value' => 'Made fun of you',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 55,
                'value' => 'Calling your name',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 55,
                'value' => 'Spreading rumors about you',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 55,
                'value' => 'Hit you with something',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 55,
                'value' => 'Making inappropriate sexual comments',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 55,
                'value' => 'Threatening to harm',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 55,
                'value' => 'Embarrassing you in public',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How long have you been experiencing bullying?
            [
                'question_id' => 56,
                'value' => '>1 year',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 56,
                'value' => '2-11 month',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 56,
                'value' => '1 month',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 56,
                'value' => '2-3 week',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 56,
                'value' => '1 week',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Have you ever seen bullying around you?
            [
                'question_id' => 57,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 57,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //In your opinion, is bullying a natural thing or vice versa?
            [
                'question_id' => 58,
                'value' => 'Very dangerous',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 58,
                'value' => 'Natural thing, in certain traditions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 58,
                'value' => 'Very a bad action',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 60,
                'value' => 'Very happy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 60,
                'value' => 'Somewhat happy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 60,
                'value' => 'Neither happy nor unhappy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 60,
                'value' => 'Somewhat unhappy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 60,
                'value' => 'Very unhappy',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 61,
                'value' => 'Extremely well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 61,
                'value' => 'Very well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 61,
                'value' => 'Somewhat well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 61,
                'value' => 'Not so well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 61,
                'value' => 'Not at all well',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 62,
                'value' => 'Strongly disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 62,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 62,
                'value' => 'Neutral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 62,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 62,
                'value' => 'Strongly agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 63,
                'value' => 'Strongly Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 63,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 63,
                'value' => 'Neutral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 63,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 63,
                'value' => 'Strongly Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 64,
                'value' => 'Strongly Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 64,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 64,
                'value' => 'Neutral/Neither agree nor disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 64,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 64,
                'value' => 'Strongly Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 65,
                'value' => 'Extremely skilled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 65,
                'value' => 'Very skilled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 65,
                'value' => 'Somewhat skilled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 65,
                'value' => 'Not so skilled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 65,
                'value' => 'Not at all skilled',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 66,
                'value' => 'Linkedin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 66,
                'value' => 'Viadeo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 66,
                'value' => 'XING',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 67,
                'value' => 'Individual Contributor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Team Lead',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Senior Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Regional Manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Vice President',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Management / C-Level',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Partner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Volunteer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Intern',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 67,
                'value' => 'Other',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How happy or unhappy are you with your current role at your job?
            [
                'question_id' => 68,
                'value' => 'Owner/Executive/C-Level',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 68,
                'value' => 'Senior Management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 68,
                'value' => 'Middle Management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 68,
                'value' => 'Intermediate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 68,
                'value' => 'Entry Level',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //How Satisfied
            [
                'question_id' => 69,
                'value' => 'Very satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 69,
                'value' => 'Quite satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 69,
                'value' => 'Somewhat satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 69,
                'value' => 'Dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 69,
                'value' => 'Very dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How Satisfied
            [
                'question_id' => 70,
                'value' => 'Very satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 70,
                'value' => 'Quite satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 70,
                'value' => 'Somewhat satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 70,
                'value' => 'Dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 70,
                'value' => 'Very dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How Satisfied
            [
                'question_id' => 71,
                'value' => 'Very satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 71,
                'value' => 'Quite satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 71,
                'value' => 'Somewhat satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 71,
                'value' => 'Dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 71,
                'value' => 'Very dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Overall, how satisfied are you with the work of all members?
            [
                'question_id' => 74,
                'value' => 'Very satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 74,
                'value' => 'Quite satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 74,
                'value' => 'Somewhat satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 74,
                'value' => 'Dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 74,
                'value' => 'Very dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 3. How fast do you think your team will complete all of their project?
            [
                'question_id' => 75,
                'value' => 'Very fast',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 75,
                'value' => 'Quite fast',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 75,
                'value' => 'Somewhat fast',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 75,
                'value' => 'Late',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 75,
                'value' => 'Very late',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 4. How honest with each other are your team members?
            [
                'question_id' => 76,
                'value' => 'Extremely honest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 76,
                'value' => 'Quite honest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 76,
                'value' => 'Somewhat honest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 76,
                'value' => 'Not so honest',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 76,
                'value' => 'Not at all honest',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 5. How time efficient do team meetings need to be?
            [
                'question_id' => 77,
                'value' => 'Extremely efficiently',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 77,
                'value' => 'Quite efficiently',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 77,
                'value' => 'Somewhat efficiently',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 77,
                'value' => 'Not so efficiently',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 77,
                'value' => 'Not at all efficiently',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 6. What are your criteria in choosing your team? (you can choose 1 or more)
            [
                'question_id' => 78,
                'value' => 'Many members',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Good teamwork',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Friendly',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Accept criticism and suggestions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Work hard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Discipline',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Comfortable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Few members',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 78,
                'value' => 'Active giving opinion',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Do you think your team has too many or too few meetings?
            [
                'question_id' => 80,
                'value' => 'Much too many',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 80,
                'value' => 'Too many',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 80,
                'value' => 'The right number',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 80,
                'value' => 'Too few',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 80,
                'value' => 'Much too few',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 1. How productive is this employee?
            [
                'question_id' => 81,
                'value' => 'Extremely productive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 81,
                'value' => 'Very productive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 81,
                'value' => 'Somewhat productive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 81,
                'value' => 'Not so productive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 81,
                'value' => 'Not at all productive',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            // 2. Employees here are willing to take on new tasks as needed.
            [
                'question_id' => 82,
                'value' => 'Strongly Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 82,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 82,
                'value' => 'Neutral/Neither agree nor disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 82,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 82,
                'value' => 'Strongly Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 3. Employees treat each other with respect.
            [
                'question_id' => 83,
                'value' => 'Strongly Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Neutral/Neither agree nor disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Strongly Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 4. In light of current events, how do you foresee your level of engagement with
            // company’s products or services changing in the future?
            [
                'question_id' => 84,
                'value' => 'Increase',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 84,
                'value' => 'Stay the same',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 84,
                'value' => 'Decrease',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 84,
                'value' => 'Stop altogether',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 84,
                'value' => 'Unsure',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 5. How well do employees share responsibility for tasks?
            [
                'question_id' => 85,
                'value' => 'Extremely well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 85,
                'value' => 'Very well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 85,
                'value' => 'Somewhat well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 85,
                'value' => 'Not so well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 85,
                'value' => 'Not at all well',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 1. Whom would you like to evaluate?
            [
                'question_id' => 86,
                'value' => 'Supervisor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 86,
                'value' => 'Coworker',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 86,
                'value' => 'Subordinate',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. How proactive is this employee?
            [
                'question_id' => 87,
                'value' => 'Extremely proactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 87,
                'value' => 'Very proactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 87,
                'value' => 'Somewhat proactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 87,
                'value' => 'Not so proactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 87,
                'value' => 'Not at all proactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 3. How well are the skills of the company's employees being used?
            [
                'question_id' => 88,
                'value' => 'Extremely well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 88,
                'value' => 'Very well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 88,
                'value' => 'Quite well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 88,
                'value' => 'Not so well',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 88,
                'value' => 'Not at all well',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 4. My job performance is evaluated fairly.
            [
                'question_id' => 89,
                'value' => 'Strongly agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 89,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 89,
                'value' => 'Neither agree nor disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 89,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 89,
                'value' => 'Strongly disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 5. Communication between senior leaders and employees is good in my company.
            [
                'question_id' => 90,
                'value' => 'Strongly Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 90,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 90,
                'value' => 'Neutral/Neither agree nor disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 90,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 90,
                'value' => 'Strongly Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 6. What mistakes have you made while working this month
            [
                'question_id' => 91,
                'value' => 'late to the office',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 91,
                'value' => 'not attending the meeting for no reason',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 91,
                'value' => 'out of the office outside of break hours for no reason',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 91,
                'value' => 'not come to the office for no reason',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 1. Are office facilities good enough to make the employees comfortable doing their jobs?
            [
                'question_id' => 92,
                'value' => 'Very good',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 92,
                'value' => 'Almost good',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 92,
                'value' => 'Good',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 92,
                'value' => 'Bad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 92,
                'value' => 'Quite worrying',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 4. Mention the room in your office? (you can choose 1 or more)
            [
                'question_id' => 95,
                'value' => 'Canteen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Meeting room',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'CEO room',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Director room',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Staff room',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Receptionist',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Bath room',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Smoking area',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Hall room',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Parking lot',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Lift',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 95,
                'value' => 'Escalator',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //How satisfied are you with the facilities provided by your office?
            [
                'question_id' => 96,
                'value' => 'Very satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 96,
                'value' => 'Quite satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 96,
                'value' => 'Somewhat satisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 96,
                'value' => 'Dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 96,
                'value' => 'Very dissatisfied',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 1. I prefer to eat at home using rice, side dishes and Homemade vegetables instead of
            // eating at fast food places
            [
                'question_id' => 97,
                'value' => 'Strongly not agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 97,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 97,
                'value' => 'Abstain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 97,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 97,
                'value' => 'Strongly agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. Diabetes mellitus is a disease in which there is an increase in blood sugar levels
            // outside normal limits
            [
                'question_id' => 98,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 98,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 3. Family history, obesity, poor diet and lack of Physical activity is a trigger factor for
            // diabetes
            [
                'question_id' => 99,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 99,
                'value' => 'Not agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 4. Consuming soft drinks, syrups and sugary drinks does not increase blood sugar levels
            // in the body
            [
                'question_id' => 100,
                'value' => 'Agree, because consuming the above foods in excess does not cause diabetes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 100,
                'value' => 'Disagree, even though a little consumption of the above foods will have an impact on diabetes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 100,
                'value' => 'Agree, because consuming a lot will lead to diabetes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 100,
                'value' => 'Disagree, because eating the above foods has an impact on blood sugar levels in the body',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 5. In your opinion, what factors influence someone who can get diabetes?
            [
                'question_id' => 101,
                'value' => 'Unhealthy eating patterns at a young age',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 101,
                'value' => 'Irregular eating pattern',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 101,
                'value' => 'Lack of exercise',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 101,
                'value' => 'Suffering from high blood pressure',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 101,
                'value' => 'Consuming too much sugar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 101,
                'value' => 'Descendants',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 101,
                'value' => 'Have a history of heart disease',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 6. How to reduce the risk of diabetes?
            [
                'question_id' => 102,
                'value' => 'Setting the amount of food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 102,
                'value' => 'Setting the type of food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 102,
                'value' => 'Setting the meal schedule',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 102,
                'value' => 'Setting the sleep patterns',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 102,
                'value' => 'Setting the time of vacation',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 1. Coronary heart disease is a heart disease that caused by a blockage in the blood vessels in the brain.
            [
                'question_id' => 103,
                'value' => 'True',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 103,
                'value' => 'False',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 2. Fast pulse is a symptom of heart disease coroner.
            [
                'question_id' => 104,
                'value' => 'True',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 104,
                'value' => 'False',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 3. If one of my family members is short of breath I will just wait for the shortness of breath to stop maybe it won't last long.
            [
                'question_id' => 105,
                'value' => 'Strongly not agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 105,
                'value' => 'Disagree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 105,
                'value' => 'Abstain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 105,
                'value' => 'Agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 105,
                'value' => 'Strongly agree',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 4. When the left chest hurts to the neck, I will…
            [
                'question_id' => 106,
                'value' => 'Call family or friend',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 106,
                'value' => 'Calm down and it will heal by itself',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 106,
                'value' => 'Go to hospital',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 106,
                'value' => 'Cry loudly',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 5. The characteristics of heart disease are.
            [
                'question_id' => 107,
                'value' => 'Intermittent chest pain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 107,
                'value' => 'Fast pulse',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 107,
                'value' => 'Shortness of breath when used for heavy activities',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 107,
                'value' => 'Nausea and dizziness',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 1. Do you feel that hanging out with a lot of people drains your energy?
            [
                'question_id' => 108,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 108,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. Are you happy when you're alone?
            [
                'question_id' => 109,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 108,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 3. Do you like challenges with lots of risk?
            [
                'question_id' => 110,
                'value' => 'Yes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 108,
                'value' => 'No',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 4. If it’s Saturday night and rainy. What are you thinking?
            [
                'question_id' => 111,
                'value' => 'Let’s go out. Spending the night inside would be bored.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 111,
                'value' => 'Rain? Is the perfect reason to cancel all plans and drink tea at my home',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 5. If you at the coffee shop. The only available seat is in front of a stranger.
            [
                'question_id' => 112,
                'value' => 'It’s okay, they seem interesting. I will ask them what they are reading.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 112,
                'value' => 'I will just subtly leave my cup on the table and abandon it, forever.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 6. Choose some statements that you think fit your weakness?
            [
                'question_id' => 113,
                'value' => 'Show a little emotion/mimic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Avoiding attention due to embarrassment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Often experience a lack of memory',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Enjoys sharing stories without seeing the listener you are speaking with',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Don`t like crowds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Do not like things in a hurry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Have no guilt when you make a mistake',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Often feel worried, in a hurry in certain circumstances',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Always feel superior to',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 113,
                'value' => 'Have a distaste for the accomplishments of others',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 7. Choose some statements that you think fit your strengths!
            [
                'question_id' => 114,
                'value' => 'I feel more independent',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'I feel optimistic when facing a problem',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'Can accept other people`s opinions openly',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'I feel I can do many jobs at once',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'I like crowds',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'I`m not snobby',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'I don`t like rushing things',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'Easily adapt to the surrounding environment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'Full of confidence, passion and courage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'I am very enthusiastic about new things',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 114,
                'value' => 'Can lead groups of people regularly',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //What is your reason like this kind of products?
            [
                'question_id' => 116,
                'value' => 'Taste',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 116,
                'value' => 'Texture',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 116,
                'value' => 'Comfortable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 116,
                'value' => 'Product display',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 116,
                'value' => 'Brand',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 116,
                'value' => 'Ingredients',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 116,
                'value' => 'Product security',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 116,
                'value' => 'Others',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 4. What your first reaction when look at this product?
            [
                'question_id' => 118,
                'value' => 'Very positive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 118,
                'value' => 'Quite positive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 118,
                'value' => 'Neutral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 118,
                'value' => 'Quite negative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 118,
                'value' => 'Very negative',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 5. How unique this product?
            [
                'question_id' => 119,
                'value' => 'Extremely unique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 119,
                'value' => 'Very unique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 119,
                'value' => 'Quite unique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 119,
                'value' => 'Not so unique',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 119,
                'value' => 'Not at all unique',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 6. When you think about this product, do you think it is a product that is needed or not
            // needed?
            [
                'question_id' => 120,
                'value' => 'Definitely need',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 120,
                'value' => 'Maybe need',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 120,
                'value' => 'Neutral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 120,
                'value' => 'Maybe don’t need',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 120,
                'value' => 'Definitely don’t need',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 8. If the product is available, how likely you will purchase this product?
            [
                'question_id' => 122,
                'value' => 'Extremely likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 122,
                'value' => 'Very likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 122,
                'value' => 'Likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 122,
                'value' => 'Not likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 122,
                'value' => 'Not so all likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 9. How likely are you to change your existing product with this product?
            [
                'question_id' => 123,
                'value' => 'Extremely likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 123,
                'value' => 'Very likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 123,
                'value' => 'Likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 123,
                'value' => 'Not likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 123,
                'value' => 'Not so all likely',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 1. Overall, how much do you like this logo
            // 2. In your own words, what was the main message of the logo that was shown to you?
            // 3. How believable is the logo?

            // 4. How different is logo from existing logos?
            [
                'question_id' => 127,
                'value' => 'Extremely reasonable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 127,
                'value' => 'Very reasonable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 127,
                'value' => 'Somewhat reasonable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 127,
                'value' => 'Not so reasonable',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 127,
                'value' => 'Not at all reasonable',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // 5. How eye-catching is this logo?
            [
                'question_id' => 128,
                'value' => 'Extremely eye-catching',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 128,
                'value' => 'Very eye-catching',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 128,
                'value' => 'Somewhat eye-catching',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 128,
                'value' => 'Not so eye-catching',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 128,
                'value' => 'Not at all eye-catching',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 6. How attractive is this logo?
            // 7. How innovative is this logo?
            [
                'question_id' => 130,
                'value' => 'Extremely innovative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 130,
                'value' => 'Very innovative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 130,
                'value' => 'Somewhat innovative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 130,
                'value' => 'Not so innovative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 130,
                'value' => 'Not at all innovative',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 8. Thinking about the logo overall, which of the following best describes your feelings
            // about it?
            [
                'question_id' => 131,
                'value' => 'Like it very much',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 131,
                'value' => 'Like it somewhat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 131,
                'value' => 'Feel neutral about it',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 131,
                'value' => 'Dislike it somewhat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 131,
                'value' => 'Dislike it very much',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 9. How easily do you could find the logo the store?
            [
                'question_id' => 132,
                'value' => 'Extremely easily',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 132,
                'value' => 'Very easily',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 132,
                'value' => 'Somewhat easily',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 132,
                'value' => 'Not so easily',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 132,
                'value' => 'Not at all easily',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //brand awareness

            //What is the first brand that comes to your mind about the product (insert your product type, for example mineral water)?

            [
                'question_id' => 133,
                'value' => 'Brand 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 133,
                'value' => 'Brand 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 133,
                'value' => 'Brand 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 133,
                'value' => 'Brand 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 133,
                'value' => 'Brand 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 133,
                'value' => 'Brand 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 133,
                'value' => 'Others',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Among all the options provided in the previous question, what brand of products have you tried (insert your product type, for example mineral water)?

            [
                'question_id' => 134,
                'value' => 'Brand 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 134,
                'value' => 'Brand 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 134,
                'value' => 'Brand 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 134,
                'value' => 'Brand 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 134,
                'value' => 'Brand 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 134,
                'value' => 'Brand 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 134,
                'value' => 'Others',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Which aspects are your reference for choosing this product?
            [
                'question_id' => 135,
                'value' => 'Recommendation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 135,
                'value' => 'Price',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 135,
                'value' => 'Quality',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 135,
                'value' => 'Personal experience',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 135,
                'value' => 'Availability',
                'created_at' => now(),
                'updated_at' => now(),
            ],

           // How satisfied are you used this product brand?
            [
            'question_id' => 143,
            'value' => 'Extremely satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 143,
            'value' => 'Very satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 143,
            'value' => 'Quite satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 143,
            'value' => 'Not so satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 143,
            'value' => 'Not at all satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //When requested for mention product brand (input your product), (your name product brand) is the first brand that comes to my mind.
            [
            'question_id' => 144,
            'value' => 'Very agree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 144,
            'value' => 'Agree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 144,
            'value' => 'Neutral',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 144,
            'value' => 'Disagree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 144,
            'value' => 'Very disagree',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //That Product brand most familiar than other brand
            [
            'question_id' => 145,
            'value' => 'Very agree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 145,
            'value' => 'Agree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 145,
            'value' => 'Neutral',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 145,
            'value' => 'Disagree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 145,
            'value' => 'Very disagree',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How familiar are you with our brand?
             [
            'question_id' => 146,
            'value' => 'Extremely familiar',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 146,
            'value' => 'Very familiar',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 146,
            'value' => 'Somewhat familiar',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 146,
            'value' => 'Not so familiar',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 146,
            'value' => 'Not at all familiar',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //In the past 3 months, how often did you hear people talking about our brand?

            [
            'question_id' => 148,
            'value' => 'Very often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 148,
            'value' => 'Often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 148,
            'value' => 'A few times',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 148,
            'value' => 'Once',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 148,
            'value' => 'I have not heard people talking about it',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            //How has your perception of our brand changed in the past 3 months?

            [
            'question_id' => 149,
            'value' => 'Much more favorable',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 149,
            'value' => 'More favorable',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 149,
            'value' => 'Stayed the same',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 149,
            'value' => ' Less favorable',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 149,
            'value' => 'Much less favorable',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //When was the last time you used this product category?
            [
            'question_id' => 150,
            'value' => 'In the last week',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 150,
            'value' => 'In the last month',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 150,
            'value' => 'In the last 3 months',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 150,
            'value' => 'In the last 6 months',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 150,
            'value' => 'In the last 12 months',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 150,
            'value' => 'More than 12 months ago',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 150,
            'value' => 'Never',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //When did you first hear about our brand?
            [
            'question_id' => 151,
            'value' => 'In the last month',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 151,
            'value' => 'In the last 6 months',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 151,
            'value' => 'In the last 12 months',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 151,
            'value' => 'In the 3 years',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 151,
            'value' => 'More than 3 years ago',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 151,
            'value' => 'I have never heard of it',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            //advertising

            //Do you find the advertisement above to be visually appealing?

            [
            'question_id' => 152,
            'value' => 'yes',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 152,
            'value' => 'no',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How likely are you to purchase this product after seeing this advertisement?

             [
            'question_id' => 153,
            'value' => 'Extremely likely',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 153,
            'value' => 'Very Likely',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 153,
            'value' => 'Moderately likely',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 153,
            'value' => 'Slightly likely',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 153,
            'value' => 'Not at all likely',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //What words come to mind when you look at the advertisement?

            [
            'question_id' => 157,
            'value' => 'Image 1',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 157,
            'value' => 'Image 2',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 157,
            'value' => 'Image 3',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 157,
            'value' => 'Image 4',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 157,
            'value' => 'Image 5',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 157,
            'value' => 'None of the above',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            //vacation research

            //How often you go to holiday?

            [
            'question_id' => 158,
            'value' => 'Once in one month',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 158,
            'value' => 'Once in two month',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 158,
            'value' => 'Once in six month',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How much did you spend on for holiday?

            [
            'question_id' => 159,
            'value' => '1 million',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 159,
            'value' => '3 million',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 159,
            'value' => '6 million',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 159,
            'value' => '10 million',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            //What of continent do you want to visit?

            [
            'question_id' => 160,
            'value' => 'Europa',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 160,
            'value' => 'Africa',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 160,
            'value' => 'Australia',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 160,
            'value' => 'Asian',
            'created_at' => now(),
            'updated_at' => now(),
            ],

           //What kind of trips do you often do?

           [
            'question_id' => 162,
            'value' => 'All-inclusive charter (Travel that includes all facilities in one place, such as
            traveling on a cruise ship where all the facilities, for example shopping areas,
            swimming pools, and so on, are already on board)',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 162,
            'value' => 'Backpacker (Travel at a low cost and save money)',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 162,
            'value' => 'Group travel (Travel together with a group)',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 162,
            'value' => 'Self-organized trip',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //Where are the sources of information that you usually get to find vacation spots?

            [
            'question_id' => 163,
            'value' => 'Online',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 163,
            'value' => 'Offline',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //Have you ever used a travel agent to take care of your vacation?

            [
            'question_id' => 164,
            'value' => 'Yes',
            'created_at' => now(),
            'updated_at' => now(),
            ],

             [
            'question_id' => 164,
            'value' => 'No',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //In your opinion, how important is it to manage expenses when choosing a vacation spot?

            [
            'question_id' => 165,
            'value' => 'Extremely important',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 165,
            'value' => 'Very important',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 165,
            'value' => 'Quite important',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 165,
            'value' => 'Not so important',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 165,
            'value' => 'Not important at all',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //What type of lodging do you think can make you comfortable when on vacation? (choose 1 or more)

            [
            'question_id' => 166,
            'value' => 'Hotels',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 166,
            'value' => 'Apartments',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 166,
            'value' => 'Villa',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 166,
            'value' => 'Bungalow',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 166,
            'value' => 'Cottage',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 166,
            'value' => 'Guest house',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //What equipment do you want to bring?

            [
            'question_id' => 167,
            'value' => 'Camera',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 167,
            'value' => 'Handphone',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 167,
            'value' => 'Swimwear',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 167,
            'value' => 'Trendy clothes',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            [
            'question_id' => 167,
            'value' => 'Drugs',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            [
            'question_id' => 167,
            'value' => 'Enough money',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 167,
            'value' => 'Transportation',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 167,
            'value' => 'Passport',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 167,
            'value' => 'Other',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //mood survey

            //How is your mood right now?

             [
            'question_id' => 168,
            'value' => 'Extremely nice',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 168,
            'value' => 'Very nice',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 168,
            'value' => 'Nice',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 168,
            'value' => 'Not good',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 168,
            'value' => 'Very bad',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            //In each day, how often your mood changes?
            [
            'question_id' => 169,
            'value' => 'Extremely often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 169,
            'value' => 'Very often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 169,
            'value' => 'Often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 169,
            'value' => 'Not so often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 169,
            'value' => 'Not at all often',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //Are you the type of person who often uses things to vent your bad mood?
             [
            'question_id' => 170,
            'value' => 'Yes',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 170,
            'value' => 'No',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //What is the usual reason for your bad mood?
            [
            'question_id' => 171,
            'value' => 'A lot of work',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 171,
            'value' => 'Women’s problem',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 171,
            'value' => 'A lot of thing in mind',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 171,
            'value' => 'Tired',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 171,
            'value' => 'Sick',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 171,
            'value' => 'Your wish is not fulfilled',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 171,
            'value' => 'Food',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 171,
            'value' => 'Other',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //Who can usually change your mood for be better?

             [
            'question_id' => 172,
            'value' => 'Parent',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 172,
            'value' => 'Friend',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 172,
            'value' => 'Cousin',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 172,
            'value' => 'Boyfriend/girlfriend',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 172,
            'value' => 'Other',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How do you deal with a bad mood?
            [
            'question_id' => 173,
            'value' => 'Eating a lot',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 173,
            'value' => 'Go for a walk',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 173,
            'value' => 'Watching movie',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 173,
            'value' => 'Talking to parent',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 173,
            'value' => 'Playing games',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 173,
            'value' => 'Singing',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 173,
            'value' => 'Drawing',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 173,
            'value' => 'Make up',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 173,
            'value' => 'Shopping',
            'created_at' => now(),
            'updated_at' => now(),
            ],



            //What is your age right now?

            [
            'question_id' => 174,
            'value' => '<20',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 174,
            'value' => '<30',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 174,
            'value' => '<40',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 174,
            'value' => '<50',
            'created_at' => now(),
            'updated_at' => now(),
            ],


        //What is the genre movie do you want to watch?
            [
            'question_id' => 175,
            'value' => 'Action',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 175,
            'value' => 'Comedy',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 175,
            'value' => 'Thriller',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 175,
            'value' => 'Romance',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 175,
            'value' => 'Horror',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 175,
            'value' => 'Animasi',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How often you watch the movie in one day?

             [
            'question_id' => 176,
            'value' => 'Extremely often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 176,
            'value' => 'Very often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 176,
            'value' => 'Quite often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 176,
            'value' => 'Not so often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 176,
            'value' => 'Not at all often',
            'created_at' => now(),
            'updated_at' => now(),
            ],

        //Where you usually to watch the movie?

            [
            'question_id' => 177,
            'value' => 'Smartphone',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 177,
            'value' => 'TV',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 177,
            'value' => 'Laptop',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //In each day, how much time you doing to watch the movie?
            [
            'question_id' => 178,
            'value' => '0-1 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 178,
            'value' => '2-3 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 178,
            'value' => '4-5 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 178,
            'value' => '6-7 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 178,
            'value' => 'More than 7 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //What is subtitle often you used?
            [
            'question_id' => 181,
            'value' => 'Mandarin',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 181,
            'value' => 'Arabian',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 181,
            'value' => 'Dutch',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 181,
            'value' => 'Korea',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 181,
            'value' => 'Indonesian',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 181,
            'value' => 'English',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 181,
            'value' => 'Spain',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 181,
            'value' => 'Other',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //TV viewing

            //What is your gender?

             [
            'question_id' => 182,
            'value' => 'Male',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 182,
            'value' => 'Female',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //What is your age right now?

            [
            'question_id' => 183,
            'value' => '<20',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 183,
            'value' => '<30',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 183,
            'value' => '<40',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 183,
            'value' => '<50',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How often you watch TV in each day?

             [
            'question_id' => 184,
            'value' => '3 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 184,
            'value' => '4 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 184,
            'value' => '5 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 184,
            'value' => '6 hours',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //Do you watch TV by online?
            [
            'question_id' => 185,
            'value' => 'yes',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 185,
            'value' => 'No',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //Do you like series program?
            [
            'question_id' => 186,
            'value' => 'yes',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 186,
            'value' => 'No',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            //In your opinion, how development television program that aired at right now?

            [
            'question_id' => 187,
            'value' => 'Very nice',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 187,
            'value' => 'Nice',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 187,
            'value' => 'Not so nice',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 187,
            'value' => 'Very bad',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            [
            'question_id' => 187,
            'value' => 'Extremely bad',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //What types of television programs do you watch often?
             [
            'question_id' => 188,
            'value' => 'Series',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 188,
            'value' => 'Reality show',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 188,
            'value' => 'Cartoon',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 188,
            'value' => 'News',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 188,
            'value' => 'Product advertise',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 188,
            'value' => 'Education program',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 188,
            'value' => 'Other',
            'created_at' => now(),
            'updated_at' => now(),
            ],


            //social media habits

            //What type of social media do you often use?
            [
            'question_id' => 190,
            'value' => 'Instagram',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 190,
            'value' => 'Tiktok',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 190,
            'value' => 'Facebook',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 190,
            'value' => 'Whatsapp',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 190,
            'value' => 'Twitter',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 190,
            'value' => 'Snapchat',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 190,
            'value' => 'Linkedln',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 190,
            'value' => 'Others',
            'created_at' => now(),
            'updated_at' => now(),
            ],

//Among the types of social media in the previous question, in your opinion, what social media application do you often use?
            [
            'question_id' => 191,
            'value' => 'Instagram',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 191,
            'value' => 'Tiktok',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 191,
            'value' => 'Facebook',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 191,
            'value' => 'Whatsapp',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 191,
            'value' => 'Twitter',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 191,
            'value' => 'Snapchat',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 191,
            'value' => 'Linkedln',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 191,
            'value' => 'Others',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How often do you use social media?

            [
            'question_id' => 192,
            'value' => 'Very often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 192,
            'value' => 'Quite often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 192,
            'value' => 'Not often',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 192,
            'value' => 'Not at all',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //How satisfied social media for your life?

             [
            'question_id' => 194,
            'value' =>  'Extremely satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 194,
            'value' => ' Very satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 194,
            'value' => 'Quite satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 194,
            'value' => 'Not so satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 194,
            'value' => 'Not at all satisfied',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //In your opinion, what are the benefits from social media in your life?
            [
            'question_id' => 195,
            'value' => 'Selling',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 195,
            'value' => ' Shopping',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 195,
            'value' => 'Find new things',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 195,
            'value' => 'Friendship',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 195,
            'value' => 'Communication',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 195,
            'value' => 'Media showing something',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'question_id' => 195,
            'value' => 'Others',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //Can social media be a bad influence in everyday life?
            [
            'question_id' => 196,
            'value' => 'Very agree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 196,
            'value' => 'Agree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 196,
            'value' => 'Neutral',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 196,
            'value' => 'Disagree',
            'created_at' => now(),
            'updated_at' => now(),
            ],
             [
            'question_id' => 196,
            'value' => 'Very disagree',
            'created_at' => now(),
            'updated_at' => now(),
            ],

            //indo====================================================================>
            [

                'question_id' => 197 + 2,
                'value' => 'pria',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'question_id' => 197 + 2,
                'value' => 'perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'question_id' => 197 + 3,
                'value' => 'Sangat sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 3,
                'value' => 'Sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 3,
                'value' => 'Cukup Sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 3,
                'value' => 'Tidak terlalu sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 3,
                'value' => 'Tidak sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 4,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 4,
                'value' => 'Puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 4,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 4,
                'value' => 'Agak tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 4,
                'value' => 'Sangat tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 8,
                'value' => 'Kualitas sangat tinggi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 8,
                'value' => 'Kualitas tinggi ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 8,
                'value' => 'Kualitas tidak tinggi atau rendah ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 8,
                'value' => 'Kualitas rendah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 8,
                'value' => 'Kualitas sangat rendah ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 10,
                'value' => 'Sangat mungkin ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 10,
                'value' => 'Sangat mungkin ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 10,
                'value' => 'Agak mungkin ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 10,
                'value' => 'Tidak mungkin ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 10,
                'value' => 'Tidak mungkin sama sekali ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 12,
                'value' => 'Tunggal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 12,
                'value' => 'Menikah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 13,
                'value' => 'Dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 13,
                'value' => 'PNS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 13,
                'value' => 'Ibu Rumah Tangga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 13,
                'value' => 'Siswa/kolase',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 13,
                'value' => 'Karyawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 13,
                'value' => 'Dan lainnya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 14,
                'value' => '<2.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 14,
                'value' => '2.000.000 – 5.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 14,
                'value' => '5.000.000 – 10.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 14,
                'value' => '> 10.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 15,
                'value' => '500.000 – 1.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 15,
                'value' => '1.000.000 – 3.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 15,
                'value' => '>3.000.000 ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 16,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 16,
                'value' => 'Tidak (Anda dapat melanjutkan ke Q.7)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 17,
                'value' => 'Dekat rumah saya ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 17,
                'value' => 'Harga murah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 17,
                'value' => 'Selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 17,
                'value' => 'Pilihan variasi ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 17,
                'value' => 'Tempat yang nyaman ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 18,
                'value' => 'Merek',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 18,
                'value' => 'Persyaratan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 18,
                'value' => 'Diskon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 18,
                'value' => 'Produk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 18,
                'value' => 'Lokasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 18,
                'value' => 'Harga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 19,
                'value' => 'Kualitas bagus, harga mahal ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 19,
                'value' => 'Kualitas rendah, harga murah ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 19,
                'value' => 'Kualitas bagus, harga terjangkau',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // Apa pekerjaanmu saat ini?
                [
                'question_id' => 197 + 20,
                'value' => 'Dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 20,
                'value' => 'PNS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 20,
                'value' => 'Ibu Rumah Tangga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 20,
                'value' => 'Siswa/kolase',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 20,
                'value' => 'Karyawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 20,
                'value' => 'Dll',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Berapa penghasilanmu dalam satu bulan?
                [
                'question_id' => 197 + 21,
                'value' => '<500.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 21,
                'value' => '500.000 - 1.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 21,
                'value' => '1.000.000 – 4.000.000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 21,
                'value' => '> 4.000.000',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Kapan terakhir kali kamu datang ke tokoku?
                [
                'question_id' => 197 + 22,
                'value' => '1 tahun yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 22,
                'value' => '2-11 bulan lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 22,
                'value' => '1 bulan yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 22,
                'value' => '1 minggu yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 22,
                'value' => 'Kemarin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 22,
                'value' => 'Pertama kali',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah Anda cenderung berlangganan program loyalitas atau diskon gratis?
                [
                'question_id' => 197 + 28,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 28,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Apakah Anda cenderung berlangganan program loyalitas atau diskon berbayar?
                [
                'question_id' => 197 + 28,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 28,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apa alasan Anda memilih produk kami dibandingkan produk lain?
                [
                'question_id' => 197 + 32,
                'value' => 'Kualitas bagus, harga terjangkau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 32,
                'value' => 'Kualitas rendah, harga terjangkau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 32,
                'value' => 'Kualitas bagus, harga mahal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 32,
                'value' => 'Kualitas rendah, harga tinggi',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // Apa hubunganmu dengan anakmu?
                [
                'question_id' => 197 + 33,
                'value' => 'Ibu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Ayah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Ibu tiri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Ayah tiri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Nenek',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Kakek',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Bibi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Paman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'Penjaga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 33,
                'value' => 'lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa sering Anda bertemu langsung dengan guru di sekolah anak Anda?
                [
                'question_id' => 197 + 34,
                'value' => 'Mingguan atau lebih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 34,
                'value' => 'Bulanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 34,
                'value' => 'Setiap beberapa bulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 34,
                'value' => 'Sekali atau dua kali setahun',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 34,
                'value' => 'Hampir tidak pernah',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // Berapa banyak usaha yang Anda lakukan untuk membantu anak Anda belajar melakukan hal-hal baru untuk
                [
                'question_id' => 197 + 35,
                'value' => 'Usaha yang luar biasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 35,
                'value' => 'Usaha yang cukup normal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 35,
                'value' => 'Beberapa usaha',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 35,
                'value' => 'Sedikit usaha',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 35,
                'value' => 'Hampir tidak ada usaha',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa sering Anda mengawasi anak Anda dalam mengerjakan pekerjaan rumah?
                [
                'question_id' => 197 + 36,
                'value' => 'Setiap saat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 36,
                'value' => 'Setiap 3 hari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 36,
                'value' => 'Setiap minggu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 36,
                'value' => 'Setiap bulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 36,
                'value' => 'Tidak sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Berapa banyak waktu yang Anda berikan kepada anak Anda untuk mengerjakan pekerjaan rumah?
                [
                'question_id' => 197 + 37,
                'value' => '4 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 37,
                'value' => '3 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 37,
                'value' => '2 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 37,
                'value' => '30-60 menit',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa sering Anda dan anak Anda berbicara ketika dia memiliki masalah?
                [
                'question_id' => 197 + 39,
                'value' => 'Hampir sepanjang waktu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 39,
                'value' => 'Sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 39,
                'value' => 'Kadang-kadang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 39,
                'value' => 'Sekali-sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 39,
                'value' => 'Hampir tidak pernah',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah sekolah memiliki dedikasi berikut
                [
                'question_id' => 197 + 40,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 40,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                //Apakah sekolah memiliki dedikasi berikut
                [
                'question_id' => 197 + 41,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 41,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                //Apakah sekolah memiliki dedikasi berikut
                [
                'question_id' => 197 + 42,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 42,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                //Apakah sekolah memiliki dedikasi berikut
                [
                'question_id' => 197 + 43,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 43,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Secara keseluruhan, seberapa bersih fasilitas toilet di sekolah?
                [
                'question_id' => 197 + 44,
                'value' => 'Sangat bersih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 44,
                'value' => 'Bersih',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 44,
                'value' => 'Cukup kotor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 44,
                'value' => 'Sangat kotor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 44,
                'value' => 'Tidak layak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah pintu kelas dalam kondisi baik?
                [
                'question_id' => 197 + 46,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 46,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa baik kondisi kursi dan meja di dalam kelas?
                [
                'question_id' => 197 + 47,
                'value' => 'Baik sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 47,
                'value' => 'Hampir bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 47,
                'value' => 'Bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 47,
                'value' => 'Buruk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 47,
                'value' => 'Cukup mengkhawatirkan',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Apakah gurumu memberikan materi pembelajaran yang lebih baik?
                [
                'question_id' => 197 + 48,
                'value' => 'Sangat bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 48,
                'value' => 'Cukup bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 48,
                'value' => 'Buruk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 48,
                'value' => 'Sangat buruk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 48,
                'value' => 'Sama sekali tidak bagus',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah gurumu pernah menyakitimu di kelas? (sakit dalam hal ini seperti dipukul, dicubit, dll)
                [
                'question_id' => 197 + 49,
                'value' => 'Tidak sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 49,
                'value' => 'Sekali kali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 49,
                'value' => 'Setiap kali saya melakukan kesalahan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah suasana kelas nyaman saat guru menjelaskan materi pembelajaran?
                [
                'question_id' => 197 + 50,
                'value' => 'Sangat nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 50,
                'value' => 'Cukup nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 50,
                'value' => 'Tidak nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 50,
                'value' => 'Sangat tidak nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 50,
                'value' => 'Sangat menegangkan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Bagaimana gurumu menjelaskan materi pembelajaran di kelas? (Anda dapat memilih 1 atau lebih)
                [
                'question_id' => 197 + 51,
                'value' => 'Presentasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 51,
                'value' => 'Jelaskan dengan papan tulis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 51,
                'value' => 'Maju satu per satu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 51,
                'value' => 'Belajar mandiri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 51,
                'value' => 'Banyak tugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 51,
                'value' => 'Dipanggil dengan nama',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Pernahkah kamu mengalami bullying dalam hidupmu?
                [
                'question_id' => 197 + 53,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 53,
                'value' => 'Tidak (Anda dapat melanjutkan ke Q.5)',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Jika ya, kapan terakhir kali kamu mengalami bullying?
                [
                'question_id' => 197 + 54,
                'value' => 'Satu tahun yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 54,
                'value' => 'Satu bulan yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 54,
                'value' => 'Satu minggu yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 54,
                'value' => 'Kemarin',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Apa jenis intimidasi yang kamu alami? (Anda dapat memilih 1 atau lebih)
                [
                'question_id' => 197 + 55,
                'value' => 'Mengolok-olok Anda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 55,
                'value' => 'Memanggil nama Anda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 55,
                'value' => 'Menyebarkan rumor tentang Anda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 55,
                'value' => 'Pukul Anda dengan sesuatu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 55,
                'value' => 'Membuat komentar seksual yang tidak pantas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 55,
                'value' => 'Mengancam untuk menyakiti',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 55,
                'value' => 'Mempermalukan Anda di depan umum',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Sudah berapa lama kamu mengalami bullying?
                [
                'question_id' => 197 + 56,
                'value' => '>1 tahun',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 56,
                'value' => '2-11 bulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 56,
                'value' => '1 bulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 56,
                'value' => '2-3 minggu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 56,
                'value' => '1 minggu',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Pernahkah kamu melihat intimidasi di sekitarmu?
                [
                'question_id' => 197 + 57,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 57,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Menurutmu, apakah bullying itu hal yang wajar atau sebaliknya?
                [
                'question_id' => 197 + 58,
                'value' => 'Sangat berbahaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 58,
                'value' => 'Hal alami, dalam tradisi tertentu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 58,
                'value' => 'Tindakan yang sangat buruk',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
                [
                'question_id' => 197 + 60,
                'value' => 'Sangat senang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 60,
                'value' => 'Sesuatutopi bahagia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 60,
                'value' => 'Tidak bahagia atau tidak bahagia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 60,
                'value' => 'Agak tidak senang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 60,
                'value' => 'Sangat tidak senang',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
                [
                'question_id' => 197 + 61,
                'value' => 'Sangat baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 61,
                'value' => 'Sangat baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 61,
                'value' => 'Agak baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 61,
                'value' => 'Tidak terlalu baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 61,
                'value' => 'Sama sekali tidak baik',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
                [
                'question_id' => 197 + 62,
                'value' => 'Sangat tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 62,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 62,
                'value' => 'Netral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 62,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 62,
                'value' => 'Sangat setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
                [
                'question_id' => 197 + 63,
                'value' => 'Sangat Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 63,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 63,
                'value' => 'Netral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 63,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 63,
                'value' => 'Sangat Setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
                [
                'question_id' => 197 + 64,
                'value' => 'Sangat Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 64,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 64,
                'value' => 'Netral/Tidak setuju atau tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 64,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 64,
                'value' => 'Sangat Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
            [
                'question_id' => 197 + 65,
                'value' => 'Sangat terampil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 65,
                'value' => 'Sangat terampil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 65,
                'value' => 'Agak terampil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 65,
                'value' => 'Tidak begitu terampil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 65,
                'value' => 'Sama sekali tidak terampil',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
            [
                'question_id' => 197 + 66,
                'value' => 'Linkedin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 66,
                'value' => 'Viadeo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 66,
                'value' => 'XING',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
                [
                'question_id' => 197 + 67,
                'value' => 'Kontributor Perorangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Pemimpin Tim',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Manajer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Manajer Senior',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Manajer Wilayah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Wakil Presiden',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Manajemen / C-Level',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Mitra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Pemilik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Relawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Magang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 67,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Seberapa bahagia atau tidak bahagia Anda dengan peran Anda saat ini di pekerjaan Anda?
                [
                'question_id' => 197 + 68,
                'value' => 'Pemilik/Eksekutif/Tingkat-C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 68,
                'value' => 'Manajemen Senior',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 68,
                'value' => 'Manajemen Menengah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 68,
                'value' => 'Menengah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 68,
                'value' => 'Tingkat Masuk',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Betapa Puasnya
                [
                'question_id' => 197 + 69,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['question_id' => 197 + 69,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 69,
                'value' => 'Agak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 69,
                'value' => 'Tidak Puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 69,
                'value' => 'Sangat tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Betapa Puasnya
                [
                'question_id' => 197 + 70,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 70,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 70,
                'value' => 'Agak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 70,
                'value' => 'Tidak Puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 70,
                'value' => 'Sangat tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Betapa Puasnya
                [
                'question_id' => 197 + 71,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 71,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 71,
                'value' => 'Agak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 71,
                'value' => 'Tidak Puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 71,
                'value' => 'Sangat tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Secara keseluruhan, seberapa puaskah Anda dengan pekerjaan semua anggota?
                [
                'question_id' => 197 + 74,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 74,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 74,
                'value' => 'Agak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 74,
                'value' => 'Tidak Puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 74,
                'value' => 'Sangat tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 3. Menurut Anda seberapa cepat tim Anda akan menyelesaikan semua proyek mereka?
                [
                'question_id' => 197 + 75,
                'value' => 'Sangat cepat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 75,
                'value' => 'Cukup cepat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 75,
                'value' => 'Agak cepat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 75,
                'value' => 'Terlambat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 75,
                'value' => 'Sangat terlambat',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 4. Seberapa jujur ​​satu sama lain anggota tim Anda?
                [
                'question_id' => 197 + 76,
                'value' => 'Sangat jujur',
                'created_at' => now(),
                'updated_at' => now(),
                ],[
                'question_id' => 197 + 76,
                'value' => 'Cukup jujur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 76,
                'value' => 'Agak jujur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 76,
                'value' => 'Tidak terlalu jujur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 76,
                'value' => 'Sama sekali tidak jujur',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 5. Seberapa efisien waktu yang dibutuhkan rapat tim?
                [
                'question_id' => 197 + 77,
                'value' => 'Sangat efisien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 77,
                'value' => 'Cukup efisien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 77,
                'value' => 'Agak efisien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 77,
                'value' => 'Tidak begitu efisien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 77,
                'value' => 'Sama sekali tidak efisien',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 6. Apa kriteria Anda dalam memilih tim? (Anda dapat memilih 1 atau lebih)
                [
                'question_id' => 197 + 78,
                'value' => 'Banyak anggota',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Kerja sama tim yang baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Ramah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Terima kritik dan saran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Kerja keras',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Disiplin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Beberapa anggota',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 78,
                'value' => 'Aktif memberikan pendapat',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah menurut Anda tim Anda memiliki terlalu banyak atau terlalu sedikit rapat?
                [
                'question_id' => 197 + 80,
                'value' => 'Terlalu banyak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 80,
                'value' => 'Terlalu banyak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 80,
                'value' => 'Angka yang benar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 80,
                'value' => 'Terlalu sedikit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 80,
                'value' => 'Terlalu sedikit',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 1. Seberapa produktifkah karyawan ini?
                [
                'question_id' => 197 + 81,
                'value' => 'Sangat produktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 81,
                'value' => 'Sangat produktif',
                'created_at' => now(),
                'update_at' => now(),
            ],
            [
                'question_id' => 197 + 81,
                'value' => 'Agak produktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 81,
                'value' => 'Tidak begitu produktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 81,
                'value' => 'Sama sekali tidak produktif',
                'created_at' => now(),
                'updated_at' => now(),
                ],



                // 2. Karyawan di sini bersedia menerima tugas baru sesuai kebutuhan.
                [
                'question_id' => 197 + 82,
                'value' => 'Sangat Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 82,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 82,
                'value' => 'Netral/Tidak setuju atau tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 82,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 82,
                'value' => 'Sangat Setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 3. Karyawan memperlakukan satu sama lain dengan hormat.
                [
                'question_id' => 83,
                'value' => 'Sangat Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Netral/Tidak setuju atau tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 83,
                'value' => 'Sangat Setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 4. Mengingat peristiwa terkini, bagaimana Anda memperkirakan tingkat keterlibatan Anda dengan
                // produk atau layanan perusahaan berubah di masa depan?
                [
                'question_id' => 197 + 84,
                'value' => 'Meningkat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 84,
                'value' => 'Tetap sama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 84,
                'value' => 'Penurunan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 84,
                'value' => 'Berhenti sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 84,
                'value' => 'Tidak yakin',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 5. Seberapa baik karyawan berbagi tanggung jawab untuk tugas?
                [
                'question_id' => 197 + 85,
                'value' => 'Sangat baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 85,
                'value' => 'Sangat baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 85,
                'value' => 'Agak baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 85,
                'value' => 'Tidak terlalu baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 85,
                'value' => 'Sama sekali tidak baik',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 1. Siapa yang ingin Anda evaluasi?
                [
                'question_id' => 197 + 86,
                'value' => 'Pengawas',
                'created_at' => now(),
                'updated_at' => now(),],
                [
                'question_id' => 197 + 86,
                'value' => 'Rekan kerja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 86,
                'value' => 'Bawahan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 2. Seberapa proaktif karyawan ini?
                [
                'question_id' => 197 + 87,
                'value' => 'Sangat proaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 87,
                'value' => 'Sangat proaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 87,
                'value' => 'Agak proaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 87,
                'value' => 'Tidak begitu proaktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 87,
                'value' => 'Sama sekali tidak proaktif',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 3. Seberapa baik keterampilan karyawan perusahaan digunakan?
                [
                'question_id' => 197 + 88,
                'value' => 'Sangat baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 88,
                'value' => 'Sangat baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 88,
                'value' => 'Cukup baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 88,
                'value' => 'Tidak terlalu baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 88,
                'value' => 'Sama sekali tidak baik',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 4. Prestasi kerja saya dievaluasi secara adil.
                [
                'question_id' => 197 + 89,
                'value' => 'Sangat setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 89,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 89,
                'value' => 'Tidak setuju atau tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 89,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 89,
                'value' => 'Sangat tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 5. Komunikasi antara pemimpin senior dan karyawan baik di perusahaan saya.
                [
                'question_id' => 197 + 90,
                'value' => 'Sangat Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 90,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 90,
                'value' => 'Netral/Tidak setuju atau tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 90,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 90,
                'value' => 'Sangat Setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 6. Kesalahan apa yang kamu lakukan selama bekerja bulan ini
                [
                'question_id' => 197 + 91,
                'value' => 'terlambat ke kantor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 91,
                'value' => 'tidak menghadiri rapat tanpa alasan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 91,'value' => 'keluar kantor di luar jam istirahat tanpa alasan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 91,
                'value' => 'tidak datang ke kantor tanpa alasan',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 1. Apakah fasilitas kantor cukup baik untuk membuat karyawan nyaman melakukan pekerjaannya?
                [
                'question_id' => 197 + 92,
                'value' => 'Sangat bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 92,
                'value' => 'Hampir bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 92,
                'value' => 'Bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 92,
                'value' => 'Buruk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 92,
                'value' => 'Cukup mengkhawatirkan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 4. Sebutkan ruangan di kantormu? (Anda dapat memilih 1 atau lebih)
                [
                'question_id' => 197 + 95,
                'value' => 'Kantin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Ruang pertemuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'ruang CEO',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Ruang direktur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Ruang staf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Resepsionis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Kamar mandi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Area merokok',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Ruang aula',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Tempat parkir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Angkat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 95,
                'value' => 'Eskalator',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa puaskah Anda dengan fasilitas yang disediakan oleh kantor Anda?
                [
                'question_id' => 197 + 96,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 96,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 96,
                'value' => 'Agak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 96,
                'value' => 'Tidak Puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 96,
                'value' => 'Sangat tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 1. Saya lebih suka makan di rumah menggunakan nasi, lauk pauk, dan sayuran buatan sendiri daripada
                //makan di tempat fast food
                [
                'question_id' => 197 + 97,
                'value' => 'Sangat tidak setuju','created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 97,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 97,
                'value' => 'Abstain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 97,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 97,
                'value' => 'Sangat setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 2. Diabetes mellitus adalah penyakit dimana terjadi peningkatan kadar gula darah
                // di luar batas normal
                [
                'question_id' => 197 + 98,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 98,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 3. Riwayat keluarga, obesitas, pola makan yang buruk dan kurangnya aktivitas fisik merupakan faktor pemicu
                // kencing manis
                [
                'question_id' => 197 + 99,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 99,
                'value' => 'Tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 4. Mengkonsumsi minuman bersoda, sirup dan minuman manis tidak meningkatkan kadar gula darah
                // dalam tubuh
                [
                'question_id' => 197 + 100,
                'value' => 'Setuju, karena mengkonsumsi makanan di atas secara berlebihan tidak menyebabkan diabetes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 100,
                'value' => 'Tidak setuju, meskipun sedikit konsumsi makanan di atas akan berdampak pada diabetes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 100,
                'value' => 'Setuju, karena mengkonsumsi banyak akan menyebabkan diabetes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 100,
                'value' => 'Tidak setuju, karena makan makanan di atas berdampak pada kadar gula darah dalam tubuh',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 5. Menurutmu, faktor apa yang mempengaruhi seseorang bisa terkena diabetes?
                [
                'question_id' => 197 + 101,
                'value' => 'Pola makan tidak sehat di usia muda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 101,
                'value' => 'Pola makan tidak teratur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 101,
                'value' => 'Kurang berolahraga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 101,
                'value' => 'Menderita tekanan darah tinggi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 101,
                'value' => 'Mengkonsumsi terlalu banyak gula',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 101,
                'value' => 'Keturunan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 101,
                'value' => 'Memiliki riwayat penyakit jantung',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 6. Bagaimana cara mengurangi risiko diabetes?
                [
                'question_id' => 197 + 102,
                'value' => 'Mengatur jumlah makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 102,
                'value' => 'Mengatur jenis makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 102,
                'value' => 'Setelan tdia jadwal makan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 102,
                'value' => 'Mengatur pola tidur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 102,
                'value' => 'Mengatur waktu liburan',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 1. Penyakit jantung koroner adalah penyakit jantung yang disebabkan oleh penyumbatan pada pembuluh darah di otak.
                [
                'question_id' => 197 + 103,
                'value' => 'Benar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 103,
                'value' => 'Salah',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                // 2. Denyut nadi cepat adalah gejala penyakit jantung koroner.
                [
                'question_id' => 197 + 104,
                'value' => 'Benar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 104,
                'value' => 'Salah',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                // 3. Jika salah satu anggota keluarga saya sesak nafas saya tunggu saja sesak nafasnya berhenti mungkin tidak akan lama.
                [
                'question_id' => 197 + 105,
                'value' => 'Sangat tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 105,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 105,
                'value' => 'Abstain',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 105,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 105,
                'value' => 'Sangat setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                // 4. Saat dada kiri sakit sampai ke leher, aku akan…
                [
                'question_id' => 197 + 106,
                'value' => 'Telepon keluarga atau teman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 106,
                'value' => 'Tenang dan akan sembuh dengan sendirinya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 106,
                'value' => 'Pergi ke rumah sakit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 106,
                'value' => 'Menangislah dengan keras',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                // 5. Ciri-ciri penyakit jantung adalah.
                [
                'question_id' => 197 + 107,
                'value' => 'Nyeri dada intermiten',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 107,
                'value' => 'Pulsa cepat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 107,
                'value' => 'Sesak napas saat digunakan untuk aktivitas berat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 107,
                'value' => 'Mual dan pusing',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 1. Apakah menurutmu bergaul dengan banyak orang menguras energimu?
                [
                'question_id' => 197 + 108,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 108,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 2. Apakah kamu bahagia saat sendirian?
                [
                'question_id' => 197 + 109,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 108,
                'value' => 'Tidak','created_at' => now(),
                'updated_at' => now(),
                ],


                // 3. Apakah kamu menyukai tantangan dengan banyak resiko?
                [
                'question_id' => 197 + 110,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 108,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 4. Jika Sabtu malam dan hujan. Apa yang kamu pikirkan?
                [
                'question_id' => 197 + 111,
                'value' => 'Ayo keluar. Menghabiskan malam di dalam akan membosankan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 111,
                'value' => 'Hujan? Adalah alasan sempurna untuk membatalkan semua rencana dan minum teh di rumah saya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 5. Jika kamu di kedai kopi. Satu-satunya kursi yang tersedia adalah di depan orang asing.
                [
                'question_id' => 197 + 112,
                'value' => 'Tidak apa-apa, sepertinya menarik. Saya akan bertanya kepada mereka apa yang mereka baca.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 112,
                'value' => 'Saya akan meninggalkan cangkir saya secara halus di atas meja dan meninggalkannya, selamanya.',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 6. Pilih beberapa pernyataan yang menurut Anda sesuai dengan kelemahan Anda?
                [
                'question_id' => 197 + 113,
                'value' => 'Tampilkan sedikit emosi/mimik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Menghindari perhatian karena malu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Sering mengalami kekurangan memori',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Menikmati berbagi cerita tanpa melihat pendengar yang Anda ajak bicara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Tidak suka keramaian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Tidak suka sesuatu yang terburu-buru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Jangan merasa bersalah saat melakukan kesalahan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Sering merasa khawatir, terburu-buru dalam keadaan tertentu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Selalu merasa lebih unggul',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 113,
                'value' => 'Memiliki ketidaksukaan atas pencapaian orang lain',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 7. Pilih beberapa pernyataan yang menurut Anda sesuai dengan kekuatan Anda!
                [
                'question_id' => 197 + 114,
                'value' => 'Saya merasa lebih mandiri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Saya merasa optimis ketika menghadapi masalah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Dapat menerima pendapat orang lain secara terbuka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Saya merasa bisa melakukan banyak pekerjaan sekaligus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Saya suka keramaian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Saya tidak sombong',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Saya tidak suka terburu-buru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Mudah beradaptasi dengan lingkungan sekitar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Penuh keyakinan, semangat dan keberanian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Saya sangat antusias dengan hal-hal baru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 114,
                'value' => 'Dapat memimpin sekelompok orang secara teratur',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apa alasanmu menyukai produk seperti ini?
                [
                'question_id' => 197 + 116,
                'value' => 'Rasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 116,
                'value' => 'Tekstur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 116,
                'value' => 'Nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 116,
                'value' => 'Tampilan produk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 116,
                'value' => 'Merek',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 116,
                'value' => 'Bahan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 116,
                'value' => 'Keamanan produk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 116,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 4. Apa reaksi pertamamu saat melihat produk ini?
                [
                'question_id' => 197 + 118,
                'value' => 'Sangat positif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 118,
                'value' => 'Cukup positif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 118,
                'value' => 'Netral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 118,
                'value' => 'Cukup negatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 118,
                'value' => 'Sangat negatif',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 5. Seberapa unik produk ini?
                [
                'question_id' => 197 + 119,
                'value' => 'Sangat unik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 119,
                'value' => 'Sangat unik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 119,
                'value' => 'Cukup unik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 119,
                'value' => 'Tidak begitu unik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 119,
                'value' => 'Sama sekali tidak unik',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 6. Ketika Anda memikirkan produk ini, apakah Anda pikir itu produk yang dibutuhkan atau tidak?
                // diperlukan?
                [
                'question_id' => 197 + 120,
                'value' => 'Tentukansangat membutuhkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 120,
                'value' => 'Mungkin perlu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 120,
                'value' => 'Netral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 120,
                'value' => 'Mungkin tidak perlu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 120,
                'value' => 'Pasti tidak perlu',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 8. Jika produk tersedia, seberapa besar kemungkinan Anda akan membeli produk ini?
                [
                'question_id' => 197 + 122,
                'value' => 'Sangat mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 122,
                'value' => 'Sangat mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 122,
                'value' => 'Kemungkinan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 122,
                'value' => 'Tidak mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 122,
                'value' => 'Tidak semua mungkin',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 9. Seberapa besar kemungkinan Anda mengubah produk yang ada dengan produk ini?
                [
                'question_id' => 197 + 123,
                'value' => 'Sangat mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 123,
                'value' => 'Sangat mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 123,
                'value' => 'Kemungkinan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 123,
                'value' => 'Tidak mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 123,
                'value' => 'Tidak semua mungkin',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // 1. Secara keseluruhan, seberapa besar Anda menyukai logo ini?
                // 2. Dengan kata-katamu sendiri, apa pesan utama dari logo yang ditunjukkan padamu?
                // 3. Seberapa bisa dipercaya logonya?

                // 4. Apa perbedaan logo dengan logo yang sudah ada?
                [
                'question_id' => 197 + 127,
                'value' => 'Sangat wajar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 127,
                'value' => 'Sangat wajar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 127,
                'value' => 'Agak masuk akal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 127,
                'value' => 'Tidak masuk akal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 127,
                'value' => 'Sama sekali tidak masuk akal',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // 5. Seberapa menarikkah logo ini?
                [
                'question_id' => 197 + 128,
                'value' => 'Sangat menarik perhatian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 128,
                'value' => 'Sangat menarik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 128,
                'value' => 'Agak menarik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 128,
                'value' => 'Tidak begitu menarik',
                'created_at' => now(),
                'updated_at' => now(),],
                [
                'question_id' => 197 + 128,
                'value' => 'Sama sekali tidak menarik',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                // 6. Seberapa menarikkah logo ini?
                // 7. Seberapa inovatif logo ini?
                [
                'question_id' => 197 + 130,
                'value' => 'Sangat inovatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 130,
                'value' => 'Sangat inovatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 130,
                'value' => 'Agak inovatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 130,
                'value' => 'Tidak begitu inovatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 130,
                'value' => 'Sama sekali tidak inovatif',
                'created_at' => now(),
                'updated_at' => now(),
                ],
                // 8. Memikirkan logo secara keseluruhan, manakah dari yang berikut ini yang paling menggambarkan perasaan Anda
                // tentang itu?
                [
                'question_id' => 197 + 131,
                'value' => 'Sangat suka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 131,
                'value' => 'Suka agak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 131,
                'value' => 'Merasa netral tentang hal itu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 131,
                'value' => 'agak tidak suka',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 131,
                'value' => 'Sangat tidak suka',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 9. Seberapa mudah Anda menemukan logo toko?
            [
                'question_id' => 197 + 132,
                'value' => 'Sangat mudah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 132,
                'value' => 'Sangat mudah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 132,
                'value' => 'Agak mudah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 132,
                'value' => 'Tidak semudah itu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 132,
                'value' => 'Tidak mudah sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],

                //kesadaran merek

                //Merek apa yang pertama kali terlintas di benak Anda tentang produk tersebut (masukkan jenis produk Anda, misalnya air mineral)?

            [
                'question_id' => 197 + 133,
                'value' => 'Merek 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 133,
                'value' => 'Merek 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 133,
                'value' => 'Merek 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 133,
                'value' => 'Merek 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 133,
                'value' => 'Merek 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 133,
                'value' => 'Merek 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 133,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Di antara semua opsi yang disediakan pada pertanyaan sebelumnya, merek produk apa yang telah Anda coba (masukkan jenis produk Anda, misalnyaair mineral)?

                [
                'question_id' => 197 + 134,
                'value' => 'Merek 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 134,
                'value' => 'Merek 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 134,
                'value' => 'Merek 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 134,
                'value' => 'Merek 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 134,
                'value' => 'Merek 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 134,
                'value' => 'Merek 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 134,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Aspek apa yang menjadi referensi Anda untuk memilih produk ini?
                [
                'question_id' => 197 + 135,
                'value' => 'Rekomendasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 135,
                'value' => 'Harga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 135,
                'value' => 'Kualitas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 135,
                'value' => 'Pengalaman pribadi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 135,
                'value' => 'Ketersediaan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Seberapa puaskah Anda menggunakan merek produk ini?
                [
                'question_id' => 197 + 143,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 143,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 143,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 143,
                'value' => 'Tidak begitu puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 143,
                'value' => 'Sama sekali tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Ketika diminta untuk menyebutkan merek produk (masukkan produk Anda), (nama merek produk Anda) adalah merek pertama yang muncul di benak saya.
                [
                'question_id' => 197 + 144,
                'value' => 'Sangat setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 144,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 144,
                'value' => 'Netral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 144,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 144,
                'value' => 'Sangat tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Merek Produk itu paling familiar dibanding merek lain
                [
                'question_id' => 197 + 145,
                'value' => 'Sangat setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 145,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 145,
                'value' => 'Netral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 145,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),],
                [
                'question_id' => 197 + 145,
                'value' => 'Sangat tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa akrab Anda dengan merek kami?
                [
                'question_id' => 197 + 146,
                'value' => 'Sangat familiar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 146,
                'value' => 'Sangat familiar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 146,
                'value' => 'Agak familiar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 146,
                'value' => 'Tidak begitu familiar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 146,
                'value' => 'Sama sekali tidak familiar',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Dalam 3 bulan terakhir, seberapa sering Anda mendengar orang membicarakan merek kami?

                [
                'question_id' => 197 + 148,
                'value' => 'Sangat sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 148,
                'value' => 'Sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 148,
                'value' => 'Beberapa kali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 148,
                'value' => 'Sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 148,
                'value' => 'Saya belum pernah mendengar orang membicarakannya',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Bagaimana persepsi Anda tentang merek kami berubah dalam 3 bulan terakhir?

                [
                'question_id' => 197 + 149,
                'value' => 'Jauh lebih menguntungkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 149,
                'value' => 'Lebih menguntungkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 149,
                'value' => 'Tetap sama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 149,
                'value' => 'Kurang menguntungkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 149,
                'value' => 'Jauh kurang menguntungkan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Kapan terakhir kali Anda menggunakan kategori produk ini?
                [
                'question_id' => 197 + 150,
                'value' => 'Dalam seminggu terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 150,
                'value' => 'Dalam sebulan terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 150,
                'value' => 'Dalam 3 bulan terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 150,
                'value' => 'Dalam 6 bulan terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 150,
                'value' => 'Dalam 12 bulan terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 150,
                'value' => 'Lebih dari 12 bulan yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 150,
                'value' => 'Tidak pernah',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Kapan Anda pertama kali mendengar tentang merek kami?
                [
                'question_id' => 197 + 151,
                'value' => 'Dalam sebulan terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 151,
                'value' => 'Dalam 6 bulan terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 151,
                'value' => 'Dalam 12 bulan terakhir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['question_id' => 197 + 151,
                'value' => 'Dalam 3 tahun',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 151,
                'value' => 'Lebih dari 3 tahun yang lalu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 151,
                'value' => 'Saya belum pernah mendengarnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //iklan

                //Apakah menurut Anda iklan di atas menarik secara visual?

                [
                'question_id' => 197 + 152,
                'value' => 'ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 152,
                'value' => 'tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa besar kemungkinan Anda membeli produk ini setelah melihat iklan ini?

                [
                'question_id' => 197 + 153,
                'value' => 'Sangat mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 153,
                'value' => 'Sangat Mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 153,
                'value' => 'Cukup mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 153,
                'value' => 'Sedikit mungkin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 153,
                'value' => 'Sama sekali tidak mungkin',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Kata-kata apa yang terlintas di pikiranmu saat melihat iklannya?

                [
                'question_id' => 197 + 157,
                'value' => 'Gambar 1',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 157,
                'value' => 'Gambar 2',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 157,
                'value' => 'Gambar 3',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 157,
                'value' => 'Gambar 4',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 157,
                'value' => 'Gambar 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 157,
                'value' => 'Tidak satu pun di atas',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //penelitian liburan

                //Seberapa sering kamu pergi berlibur?

                [
                'question_id' => 197 + 158,
                'value' => 'Sekali dalam satu bulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 158,
                'value' => 'Sekali dalam dua bulan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 158,
                'value' => 'Sekali dalam enam bulan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Berapa banyak yang kamu habiskan untuk liburan?

                [
                'question_id' => 197 + 159,
                'value' => '1 juta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 159,
                'value' => '3 juta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 159,
                'value' => '6 juta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 159,
                'value' => '10 juta',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // Benua apa yang ingin kamu kunjungi?

                [
                'question_id' => 197 + 160,
                'value' => 'Eropa',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 160,
                'value' => 'Afrika',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 160,
                'value' => 'Australia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 160,
                'value' => 'Asia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Perjalanan seperti apa yang sering kamu lakukan?

            [
                'question_id' => 197 + 162,
                'value' => 'carter all-inclusive (Perjalanan yang mencakup semua fasilitas di satu tempat, seperti
                bepergian dengan kapal pesiar di mana semua fasilitas, misalnya area perbelanjaan,
                kolam renang, dan sebagainya, sudah ada di kapal)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 162,
                'value' => 'Backpacker (Bepergian dengan biaya rendah dan hemat)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 162,
                'value' => 'Wisata Rombongan (Bepergian bersama rombongan)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 162,
                'value' => 'Perjalanan yang diatur sendiri',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Dari mana sumber informasi yang biasa kamu dapatkan untuk mencari tempat liburan?

            [
                'question_id' => 197 + 163,
                'value' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'question_id' => 197 + 163,
                'value' => 'Offline',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Pernahkah kamu menggunakan agen perjalanan untuk mengurus liburanmu?

                [
                'question_id' => 197 + 164,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 164,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Menurutmu, seberapa pentingkah mengatur pengeluaran saat memilih tempat liburan?

                [
                'question_id' => 197 + 165,
                'value' => 'Sangat penting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 165,
                'value' => 'Sangat penting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 165,
                'value' => 'Cukup penting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 165,
                'value' => 'Tidak terlalu penting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 165,
                'value' => 'Tidak penting sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Jenis penginapan apa yang menurutmu bisa membuatmu nyaman saat berlibur? (pilih 1 atau lebih)

                [
                'question_id' => 197 + 166,
                'value' => 'Hotel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 166,
                'value' => 'Apartemen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 166,
                'value' => 'Vila',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 166,
                'value' => 'Bungalow',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 166,
                'value' => 'Pondok',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 166,
                'value' => 'Rumah tamu',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Peralatan apa yang ingin kamu bawa?

                [
                'question_id' => 197 + 167,
                'value' => 'Kamera',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 167,
                'value' => 'Handphone',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 167,
                'value' => 'Pakaian renang',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 167,
                'value' => 'Pakaian trendi',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                [
                'question_id' => 197 + 167,
                'value' => 'Obat',
                'created_at' => now(),'updated_at' => now(),
                ],


                [
                'question_id' => 197 + 167,
                'value' => 'Uang cukup',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 167,
                'value' => 'Transportasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 167,
                'value' => 'Paspor',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 167,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //survei suasana hati

                //Bagaimana suasana hatimu saat ini?

                [
                'question_id' => 197 + 168,
                'value' => 'Sangat bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 168,
                'value' => 'Sangat bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 168,
                'value' => 'Bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 168,
                'value' => 'Tidak bagus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 168,
                'value' => 'Sangat buruk',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Dalam setiap hari, seberapa sering suasana hatimu berubah?
                [
                'question_id' => 197 + 169,
                'value' => 'Sangat sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 169,
                'value' => 'Sangat sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 169,
                'value' => 'Sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 169,
                'value' => 'Tidak terlalu sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 169,
                'value' => 'Tidak sering sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah kamu tipe orang yang sering menggunakan sesuatu untuk melampiaskan bad mood?
                [
                'question_id' => 197 + 170,
                'value' => 'Ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 170,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apa alasan biasa untuk suasana hati yang buruk?
                [
                'question_id' => 197 + 171,
                'value' => 'Banyak pekerjaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 171,
                'value' => 'Masalah wanita',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 171,
                'value' => 'Banyak hal dalam pikiran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 171,
                'value' => 'Lelah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 171,
                'value' => 'Sakit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 171,
                'value' => 'Keinginan Anda tidak terpenuhi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 171,
                'value' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 171,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Siapa yang biasanya bisa mengubah moodmu menjadi lebih baik?

                [
                'question_id' => 197 + 172,
                'value' => 'Induk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 172,
                'value' => 'Teman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 172,
                'value' => 'Sepupu',
                'created_at' => now(),'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 172,
                'value' => 'Pacar/pacar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 172,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Bagaimana caramu menghadapi bad mood?
                [
                'question_id' => 197 + 173,
                'value' => 'Makan yang banyak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Jalan-jalan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Menonton film',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Berbicara dengan orang tua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Bermain game',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Nyanyian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Menggambar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Riasan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 173,
                'value' => 'Belanja',
                'created_at' => now(),
                'updated_at' => now(),
                ],



                //Berapa umurmu sekarang?

                [
                'question_id' => 197 + 174,
                'value' => '<20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 174,
                'value' => '<30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 174,
                'value' => '<40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 174,
                'value' => '<50',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                // Apa genre film yang ingin kamu tonton?
                [
                'question_id' => 197 + 175,
                'value' => 'Tindakan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 175,
                'value' => 'Komedi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 175,
                'value' => 'Thriller',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 175,
                'value' => 'Romantis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 175,
                'value' => 'Horor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 175,
                'value' => 'Animasi',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa sering kamu menonton film dalam satu hari?

                [
                'question_id' => 197 + 176,
                'value' => 'Sangat sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 176,
                'value' => 'Sangat sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 176,
                'value' => 'Cukup sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 176,
                'value' => 'Tidak terlalu sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 176,
                'value' => 'Tidak sering sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Di mana biasanya kamu menonton film?

                [
                'question_id' => 197 + 177,
                'value' => 'Ponsel Cerdas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 177,
                'value' => 'TV',
                'dibuat di' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 177,
                'value' => 'Laptop',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Dalam setiap hari, berapa banyak waktu yang kamu habiskan untuk menonton film?
                [
                'question_id' => 197 + 178,
                'value' => '0-1 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 178,
                'value' => '2-3 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 178,
                'value' => '4-5 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 178,
                'value' => '6-7 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 178,
                'value' => 'Lebih dari 7 jam',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Subtitle apa yang sering kamu gunakan?
                [
                'question_id' => 197 + 181,
                'value' => 'Mandarin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 181,
                'value' => 'Arab',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 181,
                'value' => 'Belanda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 181,
                'value' => 'Korea',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 181,
                'value' => 'Bahasa Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 181,
                'value' => 'Bahasa Inggris',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 181,
                'value' => 'Spanyol',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 181,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //menonton TV

                //Apa jenis kelamin Anda?

                [
                'question_id' => 197 + 182,
                'value' => 'Pria',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 182,
                'value' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Berapa umurmu sekarang?

                [
                'question_id' => 197 + 183,
                'value' => '<20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 183,
                'value' => '<30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 183,
                'value' => '<40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 183,
                'value' => '<50',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa sering kamu menonton TV setiap hari?

                [
                'quest_id' => 184,
                'value' => '3 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quest_id' => 184,
                'value' => '4 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quest_id' => 184,
                'value' => '5 jam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'quest_id' => 184,
                'value' => '6 jam',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah Anda menonton TV secara online?
                [
                'question_id' => 197 + 185,
                'value' => 'ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 185,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Apakah Anda menyukai program serial?
                [
                'question_id' => 197 + 186,
                'value' => 'ya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 186,
                'value' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //Menurutmu, bagaimana perkembangan program televisi yang tayang saat ini?

                [
                'question_id' => 197 + 187,
                'value' => 'Sangat bagus',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 187,
                'value' => 'Bagus',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 187,
                'value' => 'Tidak terlalu bagus',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 187,
                'value' => 'Sangat buruk',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                [
                'question_id' => 197 + 187,
                'value' => 'Sangat buruk',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                // Jenis acara televisi apa yang sering kamu tonton?
                [
                'question_id' => 197 + 188,
                'value' => 'Seri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 188,
                'value' => 'Acara realitas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 188,
                'value' => 'Kartun',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 188,
                'value' => 'Berita',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 188,
                'value' => 'Iklan produk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 188,
                'value' => 'Program pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 188,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],


                //kebiasaan media sosial

                //Jenis media sosial apa yang sering kamu gunakan?
                [
                'question_id' => 197 + 190,
                'value' => 'Instagram',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 190,
                'value' => 'Tiktok',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 190,
                'value' => 'Facebook',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 190,
                'value' => 'Whatsapp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 190,
                'value' => 'Twitter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 190,
                'value' => 'Snapchat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 190,
                'value' => 'Linkedln',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 190,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Di antara jenis media sosial pada pertanyaan sebelumnya, menurut Anda, aplikasi media sosial apa yang sering Anda gunakan?
                [
                'question_id' => 197 + 191,
                'value' => 'Instagram',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 191,
                'value' => 'Tiktok',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 191,
                'value' => 'Facebook',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 191,
                'value' => 'Whatsapp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 191,
                'value' => 'Twitter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 191,
                'value' => 'Snapchat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ['question_id' => 197 + 191,
                'value' => 'Linkedln',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 191,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
                ],

                //Seberapa sering kamu menggunakan media sosial?

                [
                'question_id' => 197 + 192,
                'value' => 'Sangat sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 192,
                'value' => 'Cukup sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 192,
                'value' => 'Tidak sering',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 192,
                'value' => 'Tidak sama sekali',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Seberapa puaskah media sosial untuk hidupmu?

            [
                'question_id' => 197 + 194,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 194,
                'value' => 'Sangat puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 194,
                'value' => 'Cukup puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 194,
                'value' => 'Tidak begitu puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 194,
                'value' => 'Sama sekali tidak puas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Menurutmu, apa manfaat media sosial dalam hidupmu?
            [
                'question_id' => 197 + 195,
                'value' => 'Jual',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 195,
                'value' => 'Belanja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 195,
                'value' => 'Temukan hal baru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 195,
                'value' => 'Persahabatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 195,
                'value' => 'Komunikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 195,
                'value' => 'Media menampilkan sesuatu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 195,
                'value' => 'Lainnya',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Bisakah media sosial menjadi pengaruh buruk dalam kehidupan sehari-hari?
            [
                'question_id' => 197 + 196,
                'value' => 'Sangat setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 196,
                'value' => 'Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 196,
                'value' => 'Netral',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 196,
                'value' => 'Tidak Setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question_id' => 197 + 196,
                'value' => 'Sangat tidak setuju',
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}

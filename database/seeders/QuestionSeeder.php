<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use Database\Factories\QuestionFactory;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // new seed question method using factory
        $factory = new QuestionFactory();


        /* available components */

                /* ENGLISH VERSION */
        // textBox with complete validation
        $factory
            ->textBox(
                'What\'s your age?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id
                1 // question bank id      
            )->create();

            $factory
            ->textBox(
                'What do you really like about our product or service?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                1 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Why did you choose our product or service over than competitor\'s product?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                1 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Why did you choose our product or service over than competitor\'s product?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                4 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Why you like this product or service?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                1 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                ' Why did you choose our product or service over than competitor\'s product?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                1 // question bank id, should null if from survey
            )->create();

              $factory
            ->textBox(
                ' How can we improve our product or service?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                1 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                ' How can we improve our product or service?
                ', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                1 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What is the last product you bought in my shop?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                3 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What product do you want to buy now in my shop?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                3 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Is there anything that you think would improve our customer support?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id
                4 // question bank id      
            )->create();

            $factory
            ->textBox(
                'Roughly how many trash are provided by the school?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                6 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Are you looking for protection or report bullying you experienced or refer it to the authorities? And how do they react to your problem?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                8 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Do you have an opinion to improve your office facilities?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                13 // question bank id, should null if from survey
            )->create();

            
            $factory
            ->textBox(
                'Where the favorite place you go to holiday?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                13 // question bank id, should null if from survey
            )->create();


            $factory
            ->textBox(
                'When you talk about what brands come to your mind?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                19 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What kind of products do you like from all the products that have been marketed by this store?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                17 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What kind of products do you dislike from all the products that have been marketed by this store?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                17 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What kind of company do you think offers service associated with this advertisement?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                20 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What do you like most about the advertisement?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                20 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What words come to mind when you look at the advertisement?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                20 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'In your own words, what was the main message of the logo that was shown to you?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                18 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Overall the movie was you watch, which your favorite movie?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                23 // question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'What is your reason for answering the question about the influence of social media 
                before?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank
                25 // question bank id, should null if from survey
            )->create();

             //multioptions
        $factory
        ->multiOptions(
            'Wha\'s your reason for choosing a place to shop? (you can choose 1 or more)', // main question
            // options
            [
                'Near my home',
                'Cheap price',
                'Complete',
                'Service',
                'The variety choice',
                'Comfortable place',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            2 // question bank id, should null if from survey
        )->create();

        $factory
        ->multiOptions(
            'What are your main factors for deciding to shop? (you can choose 1 or more)', // main question
            // options
            [
                'Brand',
                'Requiremen',
                'Discount',
                'Product',
                'Location',
                'Price',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            1 // question bank id, should null if from survey
        )->create();
        $factory
        ->multiOptions(
            'What type of bullying have you experienced? (you can choose 1 or more)
            ', // main question
            // options
            [
                'Made fun of you',
                'Calling your name',
                'Spreading rumors about you',
                'Hit you with something',
                'Making inappropriate sexual comments',
                'Threatening to harm',
                'Embarrassing you in public',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            8 // question bank id, should null if from survey
        )->create();
        $factory
        ->multiOptions(
            'How does your teacher explain the learning materials in the class? (you can choose 1 
            or more)', // main question
            // options
            [
                'Presentation',
                'Explain with whiteboard',
                'Move forward one by one',
                'Self-learning',
                'Many task',
                'Called by name',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            7 // question bank id, should null if from survey
        )->create();
        $factory
        ->multiOptions(
            'What are your criteria in choosing your team? (you can choose 1 or more)', // main question
            // options
            [
                'Many members',
                'Good teamwork',
                'Friendly',
                'Accept criticism and suggestions',
                'Work hard',
                'Discipline',
                'Comfortable',
                'Few members',
                'Active giving opinion',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            10 // question bank id, should null if from survey
        )->create();
        $factory
        ->multiOptions(
            'Mention the room in your office? (you can choose 1 or more)', // main question
            // options
            [
                'Canteen',
                'Meeting room',
                'CEO room',
                'Director room',
                'Staff room',
                'Receptionist',
                'Bath room',
                'Smoking area',
                'Hall room',
                'Parking lot',
                'Lift',
                'Escalator',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            13 // question bank id, should null if from survey
        )->create();
        $factory
        ->multiOptions(
            'What mistakes have you made while working this month', // main question
            // options
            [
                'late to the office',
                'not attending the meeting for no reason',
                'out of the office outside of break hours for no reason',
                'not come to the office for no reason',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            12 // question bank id, should null if from survey
        )->create();
        $factory
        ->multiOptions(
            'How to reduce the risk of diabetes?', // main question
            // options
            [
                ' Setting the amount of food',
                'Setting the type of food', 
                'Setting the meal schedule',
                'Setting the sleep patterns',
                'Setting the time of vacation',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            14 // question bank id, should null if from survey
        )->create();
        
        $factory
        ->multiOptions(
            'The characteristics of heart disease are.', // main question
            // options
            [
                'Intermittent chest pain',
                'Fast pulse',
                'Shortness of breath when used for heavy activities',
                'Nausea and dizziness',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            15 // question bank id, should null if from survey
        )->create();
        
        $factory
        ->multiOptions(
            'Choose some statements that you think fit your weakness?', // main question
            // options
            [
                'Show a little emotion/mimic',
                'Avoiding attention due to embarrassment',
                'Often experience a lack of memory',
                'Enjoys sharing stories without seeing the listener you are speaking with',
                'Don\'t like crowds',
                'Do not like things in a hurry',
                'Have no guilt when you make a mistake',
                'Often feel worried, in a hurry in certain circumstances',
                'Always feel superior to',
                'Have a distaste for the accomplishments of others',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            16 // question bank id, should null if from survey
        )->create();
        
        $factory
        ->multiOptions(
            'Choose some statements that you think fit your strengths!
            ', // main question
            // options
            [
                'I feel more independent',
                'I feel optimistic when facing a problem',
                'Can accept other people\'s opinions openly',
                'I feel I can do many jobs at once',
                'I like crowds',
                'I\'m not snobby',
                'I don\'t like rushing things',
                'Easily adapt to the surrounding environment',
                'Full of confidence, passion and courage',
                'I am very enthusiastic about new things',
                'Can lead groups of people regularly',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            16 // question bank id, should null if from survey
        )->create();
        
        $factory
        ->multiOptions(
            'Among all the options provided in the previous question, what brand of products have 
            you tried?', // main question
            // options
            [
                'Brand 1',
                'Brand 2',
                'Brand 3',
                'Brand 4',
                'Brand 5',
                'Brand 6',
                'Other',
          ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            19 // question bank id, should null if from survey
        )->create();
        
        $factory
        ->multiOptions(
            'What is your reason like this kind of products?', // main question
            // options
            [
                'Taste',
                'Texture',
                'Comfortable',
                'Product display',
                'Brand',
                'Ingredients',
                'Product security',
                'Others',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            17 // question bank id, should null if from survey
        )->create();
        
        $factory
        ->multiOptions(
            'What type of lodging do you think can make you comfortable when on vacation? 
            (choose 1 or more) ', // main question
            // options
            [
                'Hotels',
                'Apartments',
                'Villa',
                'Bungalow',
                'Cottage',
                'Guest house',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            21 // question bank id, should null if from survey
        )->create();
       
        $factory
        ->multiOptions(
            'What equipment do you want to bring?', // main question
            // options
            [
                'Camera',
                'Handphone',
                'Swimwear',
                'Trendy clothes',
                'Drugs',
                'Enough money',
                'Transportation',
                'Passport',
                'Other',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            21 // question bank id, should null if from survey
        )->create();

        $factory
        ->multiOptions(
            'What types of television programs do you watch often?', // main question
            // options
            [
                'Series',
                'Reality show',
                'Cartoon',
                'News',
                'Product advertise',
                'Education program',
                'Other',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            24 // question bank id, should null if from survey
        )->create();

        $factory
        ->multiOptions(
            'What is the usual reason for your bad mood?', // main question
            // options
            [
                'A lot of work',
                'Women\'s problem',
                'A lot of thing in mind',
                'Tired',
                'Sick',
                'Your wish is not fulfilled',
                'Food',
                'Other',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            22 // question bank id, should null if from survey
        )->create();

        $factory
        ->multiOptions(
            'Who can usually change your mood for be better?', // main question
            // options
            [
                'Parent',
                'Friend',
                'Cousin',
                'Boyfriend/girlfriend',
                'Other',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            22 // question bank id, should null if from survey
        )->create();
        $factory
        ->multiOptions(
            'How do you deal with a bad mood?', // main question
            // options
            [
                'Eating a lot',
                'Go for a walk',
                'Watching movie',
                'Talking to parent',
                'Playing games',
                'Singing',
                'Drawing',
                'Make up',
                'Shopping',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            22 // question bank id, should null if from survey
        )->create();

        $factory
        ->multiOptions(
            'What type of social media do you often use?', // main question
            // options
            [
                'Instagram',
                'Tiktok',
                'Facebook',
                'Whatsapp',
                'Twitter',
                'Snapchat',
                'Linkedln',
                'Others',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            25 // question bank id, should null if from survey
        )->create();

        $factory
        ->multiOptions(
            'In your opinion, what are the benefits from social media in your life?', // main question
            // options
            [
                'Selling',
                'Shopping',
                'Find new things',
                'Friendship',
                'Communication',
                'Media showing something',
                'Others',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id , should null if from question bank
            25 // question bank id, should null if from survey
        )->create();


        // multipleChoice
        $factory
        ->multipleChoice(
            'What\'s your gender?', // main question
            // options
            [
                'Female',
                'Male',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            1 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How often do you use the product you bought?', // main question
            // options
            [
                'Very often',
                'Often',
                'Quite Often', 
                'Not too often',
                'Not at all',
                
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            1 // question bank id
        )->create();

            $factory
        ->multipleChoice(
            'How satisfied are you with our product or service?', // main question
            // options
            [
                'Very satisfied',
                'Satisfied',
                'Quite satisfied',
                'Somewhat dissatisfied',
                'Very dissatisfied',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            1 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How would you rate the quality of our product or service?', // main question
            // options
            [
                'Very high quality',
                'High quality',
                'Neither high nor low quality',
                'Low quality',
                'Very low quality',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            1 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How likely are you to purchase any of our product or service again?', // main question
            // options
            [
                'Extremely likely',
                'Very likely',
                'Somewhat likely',
                'Not so likely',
                'Not at all likely',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            1 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What\'s your relationship status now?', // main question
            // options
            [
                'Single',
                'Married',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            2 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How much do you earn in one month?', // main question
            // options
            [
                '<2.000.000',
                '2.000.000 - 5.000.000',
                '5.000.000 - 10.000.000',
                '> 10.000.000',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            2 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How much do you spend on shopping every month?', // main question
            // options
            [
                '500.000 - 1.000.000',
                '1.000.000 - 3.000.000',
                '>3.000.000',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            2 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Are you an active person who doing shopping every month?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            2 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What a bid criteria do you want?', // main question
            // options
            [
                'Good quality, expensive price',
                'Low quality, low price',
                'Good quality, affordable price',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            2 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How much do you earn in one month?', // main question
            // options
            [
                '<500.000',
                '500.000 - 1.000.000',
                '1.000.000 - 4.000.000',
                '> 4.000.000',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            2 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'When was the last time you came to my shop?', // main question
            // options
            [
                '1 year ago',
                '2-11 month ago',
                '1 month ago',
                '1 week ago',
                'Yesterday',
                'The first time',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            3 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Do you tend to subscribe to free loyalty or discount programs?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            4 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Do you tend to subscribe to paid loyalty or discount programs?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            4 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What is the reason you choose our product over other products?', // main question
            // options
            [
                'Good quality, affordable price',
                'Low quality, affordable price',
                'Good quality, expensive price',
                'Low quality, high price',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            4 // question bank id
        )->create();

 // implement on question bank example
        // EDUCATION RESEARCH
        // original
        /* [
                'id' => 33,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => 'What is your relationship to your child?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ], */

        // transformed
        $factory->multipleChoice(
            'What is your relationship to your child ?',
            [
                'Mother',
                'Father',
                'Step-Mother',
                'Step-Father',
                'Grandfather',
                'GrandMother',
                'Aunt',
                'Uncle',
                'Guardian',
                'Other'
            ], // question option from QuestionOptionSeeder
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'Please select your answer'
                ]
            ],
            null,
            5
        )->create();

        // original
        /* [
            'id' => 34,
            // 'survey' => 1,
            'question_bank_id' => 5,
            'question' => 'How often do you meet in person with teacher at your child’s school?',
            'type' => 'radio',
            'question_type' => 'multipleChoice',
            'created_at' => now(),
            'updated_at' => now(),
        ], */

        // transformed
        $factory->multipleChoice(
            "How often do you meet in person with teacher at your child's school ?",
            [
                'Weekly or more',
                'Monthly',
                'Every few months',
                'Once or twice per year',
                'Almost never',
            ], // question option from QuestionOptionSeeder
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'Please select your answer'
                ]
            ],
            null, // survey_id
            5 // question_bank_id
        )->create();

        // original
        /* [
            'id' => 35,
            // 'survey' => 1,
            'question_bank_id' => 5,
            'question' => 'How much effort do you put into helping your child learn to do new things to?',
            'type' => 'radio',
            'question_type' => 'multipleChoice',
            'created_at' => now(),
            'updated_at' => now(),
        ] */

        // transformed
        $factory->multipleChoice(
            "How much effort do you put into helping your child learn to do new things to ?",
            [
                'A tremendous amount of effort',
                'Quite a normal of effort',
                'Some effort',
                'A little bit of effort',
                'Almost no effort',
            ], // question option from QuestionOptionSeeder
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'Please select your answer'
                ]
            ],
            null, // survey_id
            5 // question_bank_id
        )->create();

        $factory
        ->multipleChoice(
            'How often do you supervise your child in doing homework?', // main question
            // options
            [
                'Every time',
                'Every 3 days',
                'Every week',
                'Every month',
                'Not at all',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            5 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How much time do you give your child to do homework?', // main question
            // options
            [
                '4 hours',
                '3 hours',
                '2 hours',
                '30-60 minutes',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            5 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How often do you and your child talk when he or she is having a problem with others?', // main question
            // options
            [
                ' Almost all the time',
                'Frequently',
                'Sometimes',
                'Once in a while',
                'Almost never',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            5 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Does the school have the following dedicated Library / Secure book storage room?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            6 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Does the school have the following dedicated Sports / other equipment storage?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            6 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Does the school have the following dedicated Staff room?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            6 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Does the school have the following dedicated Head teacher\'s office?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            6 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Overall, how clean are the toilet facilities in the school?', // main question
            // options
            [
                'Very clean',
                'Clean',
                'Quite dirty',
                'Very dirty',
                'Not feasible',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            6 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Is the classroom door in good condition?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            6 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How good is the condition of the chair and the tables in the classroom?', // main question
            // options
            [
                'Very good',
                'Almost good',
                'Good',
                'Bad',
                'Quite worrying',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            6 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Have you ever experienced bullying in your life?', // main question
            // options
            [
                'Yes',
                'No (you can continue to Q.5)',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            8 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'If so, when was the last time you experienced bullying?', // main question
            // options
            [
                'One year ago',
                'One month ago',
                'One week ago',
                'Yesterday',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            8 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How long have you been experiencing bullying?', // main question
            // options
            [
                '>1 year',
                '2-11 month',
                '1 month',
                '2-3 week',
                '1 week',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            8 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Have you ever seen bullying around you?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            8 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'In your opinion, is bullying a natural thing or vice versa?', // main question
            // options
            [
                'Very dangerous',
                'Natural thing, in certain traditions',
                'Very a bad action',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            8 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Has your teacher provided better learning materials?', // main question
            // options
            [
                'Very good',
                'Quite good',
                'Bad',
                'Very bad',
                'Not at all good',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            7 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'Has your teacher ever hurt you in the class? (hurt in this case like being hit, pinched, 
            etc.)', // main question
            // options
            [
                'Not at all',
                'Once times',
                'Every time I make mistake',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            7 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Is the atmosphere in classroom are comfortable when the teacher explain learning materials?', // main question
            // options
            [
                'Very comfortable',
                'Quite comfortable',
                'Not comfortable',
                'Very not comfortable',
                'Very stressful',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            7 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Overall, how satisfied are you with the work of all members?', // main question
            // options
            [
                'Very satisfied',
                'Quite satisfied',
                'Somewhat satisfied',
                'Dissatisfied',
                'Very dissatisfied',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            10 // question bank id
        )->create();
         
        $factory
        ->multipleChoice(
            'How fast do you think your team will complete all of their project?', // main question
            // options
            [
                'Very fast',
                'Quite fast',
                'Somewhat fast',
                'Late',
                'Very late',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            10 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'How honest with each other are your team members?', // main question
            // options
            [
                'Extremely honest',
                'Quite honest',
                'Somewhat honest',
                'Not so honest',
                'Not at all honest',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            10 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'How time efficient do team meetings need to be?', // main question
            // options
            [
                'Extremely efficiently',
                'Quite efficiently',
                'Somewhat efficiently',
                'Not so efficiently',
                'Not at all efficiently',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            10 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Do you think your team has too many or too few meetings?', // main question
            // options
            [
                'Much too many',
                'Too many',
                'The right number',
                'Too few',
                'Much too few',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            10 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'Are office facilities good enough to make the employees comfortablle doing their jobs?', // main question
            // options
            [
                'Very good',
                'Almost good',
                'Good',
                'Bad',
                'Quite worrying',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            13 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'How satisfied are you with the facilities provided by your office?', // main question
            // options
            [
                'Very satisfied',
                'Quite satisfied',
                'Somewhat satisfied',
                'Dissatisfied',
                'Very dissatisfied',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            13 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How happy or unhappy are you with your current role at your job?', // main question
            // options
            [
                'Very happy',
                'Somewhat happy',
                'Neither happy nor unhappy',
                'Somewhat unhappy',
                'Very unhappy',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'How well do your job responsibilities match your strengths?', // main question
            // options
            [
                'Extremely well',
                'Very well',
                'Somewhat well',
                'Not so well',
                'Not at all well',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'My job performance is evaluated fairly.', // main question
            // options
            [
                'Strongly disagree',
                'Disagree',
                'Neutral',
                'Agree',
                'Strongly agree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'I am satisfied with my overall job security.', // main question
            // options
            [
                'Strongly disagree',
                'Disagree',
                'Neutral',
                'Agree',
                'Strongly agree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'When at work, I am completely focused on my job duties.', // main question
            // options
            [
                'Strongly disagree',
                'Disagree',
                'Neutral/Neither agree nor disagree',
                'Agree',
                'Strongly agree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'How skilled at their jobs are the members of (your team)?', // main question
            // options
            [
                'Extremely skilled',
                'Very skilled',
                'Somewhat skilled',
                'Not so skilled',
                'Not at all skilled',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'From which of the following professional networking websites does your company 
            typically find its most qualified job candidates?', // main question
            // options
            [
                'Linkedin',
                'Viadeo',
                'XING',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'What is your job role?', // main question
            // options
            [
                'Individual Contributor',
                'Team Lead',
                'Manager',
                'Senior Manager',
                'Regional Manager',
                'Vice President',
                'Management / C-Level',
                'Partner',
                'Owner',
                'Volunteer',
                'Intern',
                'Other',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'Which of the following best describes your current job level?', // main question
            // options
            [
                'Owner/Executive/C-Level',
                'Senior Management',
                'Middle Management',
                'Intermediate',
                'Entry Level',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How satisfied are you salary/bonus/incentive with what you have achieved right now?', // main question
            // options
            [
                'Very satisfied',
                'Quite satisfied',
                'Somewhat satisfied',
                'Dissatisfied',
                'Very dissatisfied',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            9 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'How productive is this employee?', // main question
            // options
            [
                'Extremely productive',
                'Very productive',
                'Somewhat productive',
                'Not so productive',
                'Not at all productive',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            11 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'Employees here are willing to take on new tasks as needed.
            ', // main question
            // options
            [
                'Strongly disagree',
                'Disagree',
                'Neutral/Neither agree nor disagree',
                'Agree',
                'Strongly agree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            11 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Employees treat each other with respect.', // main question
            // options
            [
                'Strongly disagree',
                'Disagree',
                'Neutral/Neither agree nor disagree',
                'Agree',
                'Strongly agree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            11 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'In light of current events, how do you foresee your level of engagement with 
            company\'s products or services changing in the future?', // main question
            // options
            [
                'Increase',
                'Stay the same',
                'Decrease',
                'Stop altogether',
                'Unsure',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            11 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'How well do employees share responsibility for tasks?', // main question
            // options
            [
                'Extremely well',
                'Very well',
                'Somewhat well',
                'Not so well',
                'Not at all well',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            11 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Whom would you like to evaluate?', // main question
            // options
            [
                'Supervisor',
                'Coworker',
                'Subordinate',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            12 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'How proactive is this employee?', // main question
            // options
            [
                'Extremely proactive',
                'Very proactive',
                'Somewhat proactive',
                'Not so proactive',
                'Not at all proactive',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            12 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'How well are the skills of the company\'s employees being used?', // main question
            // options
            [
                'Extremely well',
                'Very well',
                'Somewhat well',
                'Not so well',
                'Not at all well',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            12 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            ' My job performance is evaluated fairly.', // main question
            // options
            [
                'Strongly agree',
                'Agree',
                'Neither agree nor disagree',
                'Disagree',
                'Strongly disagree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            12 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'Communication between senior leaders and employees is good in my company.', // main question
            // options
            [
                'Strongly agree',
                'Agree',
                'Neither agree nor disagree',
                'Disagree',
                'Strongly disagree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            12 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'I prefer to eat at home using rice, side dishes and Homemade vegetables instead of 
            eating at fast food places', // main question
            // options
            [
                'Strongly not agree',
                'Disagree',
                'Abstain',
                'Agree',
                'Strongly agree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            14 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Diabetes mellitus is a disease in which there is an increase in blood sugar levels 
            outside normal limits', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            14 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'Family history, obesity, poor diet and lack of Physical activity is a trigger factor for 
            diabetes', // main question
            // options
            [
                'Agree',
                'Disagree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            14 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'Consuming soft drinks, syrups and sugary drinks does not increase blood sugar levels 
            in the body', // main question
            // options
            [
                'Agree, because consuming the above foods in excess does not cause diabetes',
                'Disagree, even though a little consumption of the above foods will have an 
                impact on diabetes',
                'Agree, because consuming a lot will lead to diabetes',
                'Disagree, because eating the above foods has an impact on blood sugar levels 
                in the body',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            14 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'In your opinion, what factors influence someone who can get diabetes?', // main question
            // options
            [
                'Unhealthy eating patterns at a young age',
                'Irregular eating pattern',
                'Lack of exercise',
                'Suffering from high blood pressure',
                'Consuming too much sugar',
                'Descendants',
                'Have a history of heart disease',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            14 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'Coronary heart disease is a heart disease that caused by a blockage in the blood 
            vessels in the brain.', // main question
            // options
            [
                'True',
                'False',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            15 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'Fast pulse is a symptom of heart disease coroner.', // main question
            // options
            [
                'True',
                'False',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            15 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'If one of my family members is short of breath I will just wait for the shortness of 
            breath to stop maybe it won\'t last long.', // main question
            // options
            [
                'Strongly not agree',
                'Disagree',
                'Abstain',
                'Agree',
                'Strongly agree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            15 // question bank id
        )->create();

        

        $factory
        ->multipleChoice(
            'When the left chest hurts to the neck, I will…', // main question
            // options
            [
                'Call family or friend',
                'Calm down and it will heal by itself',
                'Go to hospital',
                'Cry loudly',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            15 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Do you feel that hanging out with a lot of people drains your energy?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            16 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            ' Are you happy when you\'re alone?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            16 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Do you like challenges with lots of risk?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            16 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'If it\'s Saturday night and rainy. What are you thinking?', // main question
            // options
            [
                'Let\'s go out. Spending the night inside would be bored.',
                'Rain? Is the perfect reason to cancel all plans and drink tea at my home',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            16 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'If you at the coffee shop. The only available seat is in front of a stranger.', // main question
            // options
            [
                'It\'s okay, they seem interesting. I will ask them what they are reading.',
                'I will just subtly leave my cup on the table and abandon it, forever.',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            16 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'What is the first brand that comes to your mind about the product (insert your product 
            type, for example mineral water)?', // main question
            // options
            [
                'Brand 1',
                'Brand 2',
                'Brand 3',
                'Brand 4',
                'Brand 5',
                'Brand 6',
                'Other',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Which aspects are your reference for choosing this product?', // main question
            // options
            [
                'Recommendation',
                'Price',
                'Quality',
                'Personal experience',
                'Availability',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How satisfied are you used this product brand?
            ', // main question
            // options
            [
                'Extremely satisfied',
                'Very satisfied',
                'Quite satisfied',
                'Not so satisfied',
                'Not at all satisfied',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'When requested for mention product brand (input your product), (your name product 
            brand) is the first brand that comes to my mind.
            ', // main question
            // options
            [
                'Very agree',
                'Agree',
                'Neutral',
                'Disagree',
                'Very disagree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'That Product brand most familiar than other brand.', // main question
            // options
            [
                'Very agree',
                'Agree',
                'Neutral',
                'Disagree',
                'Very disagree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How familiar are you with our brand?
            ', // main question
            // options
            [
                'Extremely familiar',
                'Very familiar',
                'Somewhat familiar',
                'Not so familiar',
                'Not at all familiar',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'In the past 3 months, how often did you hear people talking about our brand?', // main question
            // options
            [
                'Very often',
                'Often',
                'A few times',
                'Once',
                'I have not heard people talking about it',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How has your perception of our brand changed in the past 3 months?', // main question
            // options
            [
                'Much more favorable',
                'More favorable',
                'Stayed the same',
                'Less favorable',
                'Much less favorable',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'When was the last time you used this product category?', // main question
            // options
            [
                'In the last week',
                'In the last month',
                'In the last 3 months',
                'In the last 6 months',
                'In the last 12 months',
                'More than 12 months ago',
                'Never',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'When did you first hear about our brand?', // main question
            // options
            [
                ' In the last month',
                'In the last 6 months',
                'In the last 12 months',
                'In the 3 years',
                'More than 3 years ago',
                'I have never heard of it',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            19 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What your first reaction when look at this product?', // main question
            // options
            [
                'Very positive',
                'Quite positive',
                'Neutral',
                'Quite negative',
                'Very negative',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            17 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How unique this product?', // main question
            // options
            [
                'Extremely unique',
                'Very unique',
                'Quite unique',
                'Not so unique',
                'Not at all unique',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            17 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'When you think about this product, do you think it is a product that is needed or not 
            needed?', // main question
            // options
            [
                'Definitely need',
                'Maybe need',
                'Neutral',
                'Maybe don\'t need',
                'Definitely don\'t need',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            17 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'If the product is available, how likely you will purchase this product?', // main question
            // options
            [
                'Extremely likely',
                'Very likely',
                'Likely',
                'Not likely',
                'Not so all likely',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            17 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How likely are you to change your existing product with this product?', // main question
            // options
            [
                'Extremely likely',
                'Very likely',
                'Likely',
                'Not likely',
                'Not so all likely',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            17 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Do you find the advertisement above to be visually appealing?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            20 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'How likely are you to purchase this product after seeing this advertisement?', // main question
            // options
            [
                'Extremely likely',
                'Very likely',
                'Likely',
                'Not likely',
                'Not so all likely',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            20 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'Which advertising do you like the best?
            ', // main question
            // options
            [
                'Image 1',
                'Image 2',
                'Image 3',
                'Image 4',
                'Image 5',
                'None of the above',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            20 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How different is logo from existing logos?', // main question
            // options
            [
                'Extremely reasonable',
                'Very reasonable',
                'Somewhat reasonable',
                'Not so reasonable',
                'Not at all reasonable',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            18 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How eye-catching is this logo?', // main question
            // options
            [
                'Extremely eye-catching',
                'Very eye-catching',
                'Somewhat eye-catching',
                'Not so eye-catching',
                'Not at all eye-catching',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            18 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'How innovative is this logo?', // main question
            // options
            [
                'Extremely innovative',
                'Very innovative',
                'Somewhat innovative',
                'Not so innovative',
                'Not at all innovative',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            18 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Thinking about the logo overall, which of the following best describes your feelings 
            about it?', // main question
            // options
            [
                'Like it very much',
                'Like it somewhat',
                'Feel neutral about it',
                'Dislike it somewhat',
                'Dislike it very much',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            18 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How easily do you could find the logo the store?', // main question
            // options
            [
                'Extremely easily',
                'Very easily',
                'Somewhat easily',
                'Not so easily',
                'Not at all easily',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            18 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How often you go to holiday?', // main question
            // options
            [
                'Once in one month',
                'Once in two month',
                'Once in six month',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            21 // question bank id
        )->create();    
        
        $factory
        ->multipleChoice(
            'How much did you spend on for holiday?', // main question
            // options
            [
                '1 million',
                '3 million',
                '6 million',
                '10 million',

            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            21 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What of continent do you want to visit?', // main question
            // options
            [
                'Europa',
                'Africa',
                'Australia',
                'Asian',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            21 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What kind of trips do you often do?', // main question
            // options
            [
                'All-inclusive charter (Travel that includes all facilities in one place, such as 
                traveling on a cruise ship where all the facilities, for example shopping areas, 
                swimming pools, and so on, are already on board)',
                'Backpacker (Travel at a low cost and save money)',
                'Group travel (Travel together with a group)',
                'Self-organized trip',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            21 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Where are the sources of information that you usually get to find vacation spots?
            ', // main question
            // options
            [
                'Online',
                'Offline',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            21 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Have you ever used a travel agent to take care of your vacation?
            ', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            21 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'In your opinion, how important is it to manage expenses when choosing a vacation 
            spot?', // main question
            // options
            [
                'Extremely important',
                'Very important',
                'Quite important',
                'Not so important',
                'Not important at all',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            21 // question bank id
        )->create();
   
        $factory
        ->multipleChoice(
            'What is your age right now?', // main question
            // options
            [
                '<20',
                '<30',
                '<40',
                '<50',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            23 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What is your age right now?', // main question
            // options
            [
                '<20',
                '<30',
                '<40',
                '<50',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            24 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What is the genre movie do you want to watch?', // main question
            // options
            [
                'Action',
                'Comedy',
                'Thriller',
                'Romance',
                'Horror',
                'Animasi',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            23 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How often you watch the movie in one day?', // main question
            // options
            [
                'Extremely often',
                'Very often',
                'Quite often',
                'Not so often',
                'Not at all often',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            23 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Where you usually to watch the movie?', // main question
            // options
            [
                'Smartphone',
                'TV',
                'Laptop',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            23 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'In each day, how much time you doing to watch the movie?', // main question
            // options
            [
                '0-1 hours',
                '2-3 hours',
                '4-5 hours',
                '6-7 hours',
                'More than 7 hours',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            23 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'What is subtitle often you used?', // main question
            // options
            [
                ' Mandarin',
                'Arabian',
                'Dutch',
                'Korea',
                'Indonesian',
                'English',
                'Spain',
                'Other',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            23 // question bank id
        )->create();

        
        
        $factory
        ->multipleChoice(
            'What is your gender?', // main question
            // options
            [
                'Male',
                'Female',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            24 // question bank id
        )->create();

        
        $factory
        ->multipleChoice(
            'Do you watch TV by online?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            24 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Do you like series program?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            24 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'In your opinion, how development television program that aired at right now?', // main question
            // options
            [
                'Very nice',
                'Nice',
                'Not so nice',
                'Very bad',
                'Extremely bad',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            24 // question bank id
        )->create();
    
        $factory
        ->multipleChoice(
            'How is your mood right now?', // main question
            // options
            [
                'Extremely nice',
                'Very nice',
                'Nice',
                'Not good',
                'Very bad',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            22 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'In each day, how often your mood changes?', // main question
            // options
            [
                'Extremely often',
                'Very often',
                'Often',
                'Not so often',
                'Not at all often',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            22 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Are you the type of person who often uses things to vent your bad mood?', // main question
            // options
            [
                'Yes',
                'No',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            22 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'Among the types of social media in the previous question, in your opinion, what 
            social media application do you often use?', // main question
            // options
            [
                'Instagram',
                'Tiktok',
                'Facebook',
                'Whatsapp',
                'Twitter',
                'Snapchat',
                'Linkedln',
                'Others',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            25 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'How often do you use social media?', // main question
            // options
            [
                'Very often',
                'Very often',
                'Quite often',
                'Not often',
                'Not at all',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            25 // question bank id
        )->create();


        $factory
        ->multipleChoice(
            'How satisfied social media for your life?', // main question
            // options
            [
                'Extremely satisfied',
                'Very satisfied',
                'Quite satisfied',
                'Not so satisfied',
                'Not at all satisfied',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            25 // question bank id
        )->create();

        $factory
        ->multipleChoice(
            'Can social media be a bad influence in everyday life?', // main question
            // options
            [
                'Very agree',
                'Agree',
                'Neutral',
                'Disagree',
                'Very disagree',
            ],
            // validations
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'you must answer this question'
                ],
            ],
            null, // survey id
            25 // question bank id
        )->create();
        
        // dropdown
        $factory
            ->dropDown(
                'What\'s your current job?', // main question
                // options
                [
                    'doctor',
                    'PNS',
                    'housewife',
                    'student/college student',
                    'employee',
                    'etc',

                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, // survey id , should null if from question bank
                2 // question bank id, should null if from survey
            )->create();

            $factory
            ->dropDown(
                'What\'s your current job?', // main question
                // options
                [
                    'doctor',
                    'PNS',
                    'housewife',
                    'student/college student',
                    'employee',
                    'etc',

                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, // survey id , should null if from question bank
                3 // question bank id, should null if from survey
            )->create();

        // scale
        $factory
            ->scale(
                'How much do you rate my product that you have used and purchased?', // main question
                1, // minimum scale
                5, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                3   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'How likely is it that you would recommend our product or service to a friend, family, 
                colleague?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                1   // question bank id, should null if from survey
            )->create();
            $factory
            ->scale(
                'How likely is it that you would recommend our product or service to a friend, family, 
                colleague?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                4   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'How likely is it that you would recommend our product or service to a friend, family, 
                colleague?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                19   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'How interested are you in other products than our products?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                4   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'Are you satisfied with your child\'s progress that has been achieved so far?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                5   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'In term of assessment, are your teacher better at doing this?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                7   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'Are all members of your team doing the job according to their positions and duties?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                10   // question bank id, should null if from survey
            )->create();

            
            $factory
            ->scale(
                ' Do you like all the members in this team?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                10   // question bank id, should null if from survey
            )->create();

            
            $factory
            ->scale(
                ' Whether security used by your office is safe enough?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                13   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                ' How satisfied are you with your current development in this office?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                9   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'Please rank in order of your importance when looking at the brand of the product!', // main question
                1, // minimum scale
                5, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                19   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'How you evaluate about this price of product was sell?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                17   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'Overall, how much do you like this logo', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                18   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'How believable is the logo?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                18   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'How attractive is this logo', // main question
                1, // minimum scale
                5, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                18   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'In each day, how likely you watching the movie?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                23  // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'How your feeling when you were watched the television program?', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                24   // question bank id, should null if from survey
            )->create();

            $factory
            ->scale(
                'Can social media help you in doing social activities? ', // main question
                0, // minimum scale
                10, // maximum scale
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null,// survey id , should null if from question bank
                25   // question bank id, should null if from survey
            )->create();

        // fileUpload
        $factory
            ->fileUpload(
                'Example fileUpload question', // main question
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 500,
                        'message' => 'nah, the file is too big, should be 500 Kb or lower'
                    ],
                ],
                1, // survey id , should null if from question bank
                null, // question bank id, should null if from survey
            )->create();
/*=================================================================================*/

            /*INDONESIA VERSION*/

            $factory
            ->textBox(
                'Berapa umur anda?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                26, //question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Apa yang anda sangat sukai dari produk atau pelayanan kami?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                26, //question bank id, should null if from survey
            )->create();
           

            $factory
            ->textBox(
                'Mengapa anda menyukai produk atau pelayanan tersebut?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                26, //question bank id, should null if from survey
            )->create();
            

            $factory
            ->textBox(
                'Bagaimana kami dapat melakukan peningkatan untuk produk atau pelayanan kami?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                26, //question bank id, should null if from survey
            )->create();
            
            $factory
            ->textBox(
                'Produk apa yang terakhir kali anda beli di toko kami?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                28, //question bank id, should null if from survey
            )->create();
            
            
            $factory
            ->textBox(
                'Produk apa yang ingin anda beli sekarang di toko kami?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                28 //question bank id, should null if from survey
            )->create();
            
            $factory
            ->textBox(
                'Apakah ada hal yang menurut anda dapat meningkatkan dukungan pelayanan kami?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                29 //question bank id, should null if from survey
            )->create();
            
            $factory
            ->textBox(
                'Mengapa anda memilih produk atau pelayanan kami dibandingkan dengan beberapa kompetitor produk lain?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                29 //question bank id, should null if from survey
            )->create();
            
            $factory
            ->textBox(
                'Kemungkinan ada berapa banyak tempat sampah yang disediakan oleh sekolah?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                31 //question bank id, should null if from survey
            )->create();
            
            $factory
            ->textBox(
                'Apakah anda pernah mencari perlindungan atau melaporkan penindasan yang anda alami ke pihak yang berwajib? Dan bagaimana reaksi mereka terhadap masalah anda?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                33 //question bank id, should null if from survey
            )->create();


            $factory
            ->textBox(
                'Apa anda mempunyai pendapat untuk meningkatkan fasilitas kantor anda?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                38 //question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Jenis produk seperti apa yang anda sukai dari semua produk yang telah dipasarkan oleh toko ini?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                42 //question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Jenis produk seperti apa yang anda tidak sukai dari semua produk yang telah dipasarkan oleh toko ini?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                42 //question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Menurut Anda, perusahaan seperti apa yang menawarkan layanan terkait dengan iklan ini?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                45 //question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Apa yang anda lebih sukai tentang iklan tersebut?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                45 //question bank id, should null if from survey
            )->create();


            $factory
            ->textBox(
                'Apa kata yang ada di pikiran anda ketika anda lihat pada iklan tersebut?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                45 //question bank id, should null if from survey
            )->create();


            $factory
            ->textBox(
                'Dengan kata-kata Anda sendiri, apa pesan utama dari logo yang ditunjukkan kepada Anda?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                43 //question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Dimana tempat favorit anda pergi liburan?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                46 //question bank id, should null if from survey
            )->create();

            $factory
            ->textBox(
                'Diantara semua film yang pernah anda lihat, manakah yang menjadi favorit anda?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                48 //question bank id, should null if from survey
            )->create();


            $factory
            ->textBox(
                'Apa alasan anda menjawab pertanyaan mengenai pengaruh sosial media sebelumnya?', // main question
                'text', // input type
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                    [
                        'rule' => 'minLength',
                        'value' => 3,
                        'message' => 'it\'s too short, need 3 btw'
                    ],
                    [
                        'rule' => 'maxLength',
                        'value' => 10,
                        'message' => 'oops that\'s too long, no more than 10'
                    ],
                ],
                null, // survey id , should null if from question bank 
                50 //question bank id, should null if from survey
            )->create();


        // multipleChoice

        $factory->multipleChoice(
            'Apa jenis kelamin anda?',
            [
                'Perempuan',
                'Laki-laki',
            ], // question option from QuestionOptionSeeder
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'Please select your answer'
                ]
            ],
            null,
            26
        )->create();


        $factory->multipleChoice(
            'Seberapa sering anda menggunakan produk yang dibeli?',     
            [
                'Sangat sering',
                'Sering',
                'Cukup sering',
                'Tidak terlalu sering',
                'Tidak sama sekali',
            ], // question option from QuestionOptionSeeder
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'Please select your answer'
                ]
            ],
            null,
            26
        )->create();

        $factory->multipleChoice(
            'Seberapa puas anda dengan produk atau pelayanan kami?', 
            [
                'Sangat puas',
                'Puas',
                'Cukup puas',
                'Sesekali tidak puas',
                'Sangat tidak puas',
            ], // question option from QuestionOptionSeeder
            [
                [
                    'rule' => 'required',
                    'value' => true,
                    'message' => 'Please select your answer'
                ]
            ],
            null,
            26
        )->create();


        $factory
            ->multipleChoice(
                'Bagaimana anda menilai kualitas dari produk atau pelayanan kami?', // main question . 
                // options
                [
                    'Sangat berkualitas tinggi',
                    'Berkualitas tinggi',
                    'Dapat berkualitas tinggi maupun rendah',
                    'Berkualitas rendah',
                    'Sangat berkualitas rendah',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, // survey id , should null if from question bank
                26  // question bank id, should null if from survey
                
            )->create();

            $factory->multipleChoice(
                'Seberapa besar kemungkinan anda untuk membeli produk atau pelayanan kami lainnya?', 
                [
                    'Sangat besar kemungkinan',
                    'Sangat mungkin',
                    'Sedikit mungkin',
                    'Tidak mungkin',
                    'Tidak sama sekali mungkin',
                ], // question option from QuestionOptionSeeder
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'Please select your answer'
                    ]
                ],
                null,
                26
            )->create();

            $factory->multipleChoice(
                'Berapa banyak pemasukan anda dalam satu bulan?', 
                [
                    '<2.000.000',
                    '2.000.000 - 5.000.000',
                    '5.000.000 - 10.000.000',
                    '> 10.000.000',
                ], // question option from QuestionOptionSeeder
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'Please select your answer'
                    ]
                ],
                null,
                27
            )->create();
    
            $factory
                ->multipleChoice(
                    'Berapa banyak yang anda keluarkan untuk belanja setiap bulan?', // main question
                    // options
                    [ 
                        '500.000 - 1.000.000',
                        '1.000.000 - 3.000.000',
                        '>3.000.000',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    27 // question bank id, should null if from survey
                )->create(); 

                $factory
                ->multipleChoice(
                    ' Apakah kamu termasuk aktif dalam melakukan belanja setiap bulan?', // main question
                    // options
                    [ 
                        'Yes',
                        'No',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    27 // question bank id, should null if from survey
                  
                )->create();

                $factory
                ->multipleChoice(
                    'Apa kriteria penawaran yang anda inginkan?', // main question
                    // options
                    [ 
                        'Kualitas baik, harga mahal',
                        'Kualitas rendah, harga rendah',
                        'Kualitas baik, harga terjangkau',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    27 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Berapa banyak pendapatan anda dalam satu bulan?', // main question
                    // options
                    [ 
                        '<500.000',
                        '500.000 - 1.000.000',
                        '1.000.000 - 4.000.000',
                        '> 4.000.000',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    28 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Kapan terakhir kali kamu datang untuk berbelanja?', // main question
                    // options
                    [ 
                        'Satu tahun lalu',
                        '2-11 bulan lalu',
                        '1 bulan lalu',
                        '1 minggu lalu',
                        'Kemarin',
                        'Pertama kali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    28 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apakah anda cenderung untuk berlangganan program gratis atau program diskon?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    29 // question bank id, should null if from survey
                )->create();

              
                $factory
                ->multipleChoice(
                    'Apakah anda cenderung untuk berlangganan program berbayar atau program diskon?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    29, // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    ' Apa alasan anda memilih produk kami daripada produk yang lain?', // main question
                    // options
                    [ 
                        'Kualitas baik, harga terjangkau',
                        'Kualitas rendah, harga terjangkau',
                        'Kualitas baik, harga mahal',
                        'Kualitas rendah, harga mahal',
                        'Kemarin',
                        'Pertama kali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    29 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apa status hubungan anda dengan anak anda?', // main question
                    // options
                    [ 
                        'Ibu',
                        'Bapak',
                        'Ibu tiri',
                        'Bapak tiri',
                        'Nenek',
                        'Kakek',
                        'Tante',
                        'Paman',
                        'Wali',
                        'Lainnya',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    27 // question bank id, should null if from survey
                )->create();
                
                $factory
                ->multipleChoice(
                    'Seberapa sering anda bertemu langsung dengan guru di sekolah anak anda?', // main question
                    // options
                    [ 
                        'Satu minggu sekali atau lebih',
                        'Satu bulan sekali',
                        'Setiap beberapa bulan',
                        'Satu atau dua kali per tahun',
                        'Hampir tidak pernah',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    30 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa sering anda mengawasi anak anda dalam mengerjakan tugas rumah?', // main question
                    // options
                    [ 
                        'Setiap waktu',
                        'Setiap 3 hari',
                        'Setiap minggu',
                        'Setiap bulan',
                        'Tidak sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    30 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa sering anda dan anak anda berbicara ketika mereka mempunyai masalah dengan yang lain?', // main question
                    // options
                    [ 
                        ' Hampir setiap saat',
                        'Sering',
                        'Kadang-kadang',
                        'Sekali-kali',
                        'Hampir tidak pernah',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                     30 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa banyak upaya yang anda lakukan untuk membantu anak anda mempelajari sesuatu yang baru untuk meningkatkan kemampuan diri sendiri?', // main question
                    // options
                    [ 
                        'Usaha yang luar biasa',
                        'Cukup usaha yang normal',
                        'Beberapa usaha',
                        'Sedikit usaha',
                        'Hampir tidak berusaha',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                     30, // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Berapa banyak waktu yang anda berikan untuk anak anda mengerjakan tugas rumah?', // main question
                    // options
                    [ 
                        '4 jam',
                        '3 jam',
                        '2 jam',
                        '30-60 menit',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    30 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Secara keseluruhan, seberapa bersih fasilitas toilet di sekolah?', // main question
                    // options
                    [ 
                        'Sangat bersih',
                        'Bersih',
                        'Cukup kotor',
                        'Sangat kotor',
                        'Tidak layak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    31 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah ruang kelas dalam keadaan baik?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    31 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa baik kondisi pada meja dan kursi di ruang kelas?', // main question
                    // options
                    [ 
                        'Sangat bagus',
                        'Hampir bagus',
                        'Bagus',
                        'Jelek',
                        'Sangat mengkhawatirkan',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    31 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah anda pernah mengalami penindasan di hidup anda?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    33, // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Jika iya, kapan terakhir kali anda mengalami penindasan?', // main question
                    // options
                    [ 
                        'Satu tahun lalu',
                        'Satu bulan lalu',
                        'Satu minggu lalu',
                        'Kemarin',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    33, // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Berapa lama anda mengalami peristiwa penindasan?', // main question
                    // options
                    [ 
                        '>1 tahun',
                        '2-11 bulan',
                        '1 bulan lalu',
                        '1 minggu',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    33 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah anda pernah melihat penindasan di sekitar anda?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    33 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Menurut anda, apakah penindasan adalah sesuatu yang wajar atau sebaliknya?', // main question
                    // options 
                      [ 
                        'Sesuatu yang wajar, pada tradisi tertentu',
                        'Sangat tindakan yang tidak baik',
                        'Sangat berbahaya',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    33, // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah guru anda memberikan materi pembelajaran yang lebih baik?', // main question
                    // options
                    [ 
                        'Sangat baik',
                        'Cukup baik',
                        'Buruk',
                        'Sangat buruk',
                        'Tidak baik sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    32, // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah guru anda pernah menyakiti anda di kelas? (menyakiti dalam kasus ini
                    seperti memukul, mencubit, dan lain-lain)', // main question
                    // options
                    [ 
                        'Tidak sama sekali',
                        'Pernah sekali',
                        'Setiap saat saya membuat kesalahan',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    32 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah suasana di dalam ruang kelas nyaman ketika guru sedang menjelaskan
                    materi pembelajaran?', // main question
                    // options
                    [ 
                        'Sangat nyaman',
                        'Cukup nyaman',
                        'Tidak nyaman',
                        'Sangat tidak nyaman',
                        'Sangat tertekan',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    32 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Secara keseluruhan, seberapa puas anda dengan kerja dari semua anggota?', // main question
                    // options
                    [ 
                        'Sangat puas',
                        'Cukup puas',
                        'Sedikit puas',
                        'Tidak puas',
                        'Sangat tidak puas',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    35 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Menurut anda seberapa cepat tim anda akan menyelesaikan semua project mereka?', // main question
                    // options
                    [ 
                        'Sangat cepat',
                        'Cukup cepat',
                        'Sedikit cepat',
                        'Lambat',
                        'Sangat lambat',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    35 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa jujur satu sama lain anggota tim anda? ', // main question
                    // options
                    [ 
                        'Sangat jujur',
                        'Cukup jujur',
                        'Sedikit jujur',
                        'Tidak begitu jujur',
                        'Sangat tidak jujur',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    35 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa efisien waktu yang dibutuhkan untuk rapat tim?', // main question
                    // options
                    [ 
                        'Sangat efisien',
                        'Cukup efisien',
                        'Sedikit efisien',
                        'Tidak begitu efisien',
                        'Tidak sama sekali efisien',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    35, // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Menurut anda apakah tim anda terlalu banyak rapat atau terlalu sedikit rapat?', // main question
                    // options
                    [ 
                        'Sangat terlalu banyak',
                        'Terlalu banyak',
                        'Cukup pas',
                        'Terlalu sedikit',
                        'Sangat terlalu sedikit',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    35 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apakah fasilitas kantor sudah cukup baik untuk membuat karyawan nyaman
                    dalam melakukan pekerjaan mereka?
                    o Sangat baik
                    o Hampir baik
                    o Baik
                    o Buruk
                    o Sangat mengkhawatirkan', // main question
                    // options
                    [ 
                        'Satu tahun lalu',
                        '2-11 bulan lalu',
                        '1 bulan lalu',
                        '1 minggu lalu',
                        'Kemarin',
                        'Pertama kali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    35 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa puas anda dengan fasilitas yang disediakan oleh kantor anda?', // main question
                    // options
                    [ 
                        'Sangat puas',
                        'Cukup puas',
                        'Sedikit puas',
                        'Tidak puas',
                        'Sangat tidak puas',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    38, // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa senang atau tidak senang anda dengan posisi sekarang di pekerjaan anda?', // main question
                    // options
                    [ 
                        'Sangat senang',
                        'Sedikit senang',
                        'Kadang senang atau tidak senang',
                        'Sedikit tidak senang',
                        'Sangat tidak senang',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Manakah dari berikut ini yang paling menggambarkan tingkat pekerjaan anda sekarang? ', // main question
                    // options
                    [ 
                        'Pemilik/Eksekutif/C-Level',
                        'Manajemen senior',
                        'Manajemen menengah',
                        'Tingkat menengah',
                        'Tingkat pemula',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();
              
                $factory
                ->multipleChoice(
                    'Seberapa baik tanggung jawab pekerjaan anda sesuai dengan kemampuan anda?', // main question
                    // options
                    [ 
                        'Sangat baik sekali',
                        'Sangat baik',
                        'Sedikit baik',
                        'Tidak begitu baik',
                        'Sama sekali tidak baik',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Kinerja pekerjaan saya dievaluasi secara adil', // main question
                    // options
                    [ 
                        'Sangat tidak setuju',
                        'Tidak setuju',
                        'Netral',
                        'Setuju',
                        'Sangat setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Saya puas dengan keamanan kerja saya secara keseluruhan', // main question
                    // options
                    [ 
                        'Sangat tidak setuju',
                        'Tidak setuju',
                        'Netral',
                        'Setuju',
                        'Sangat setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Saat bekerja, saya fokus menyelesaikan pada tugas pekerjaan saya', // main question
                    // options
                    [ 
                        'Sangat tidak setuju',
                        'Tidak setuju',
                        'Netral',
                        'Setuju',
                        'Sangat setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa terampil anggota tim anda dalam mengerjakan pekerjaan mereka?', // main question
                    // options
                    [ 
                        'Sangat terampil sekali',
                        'Sangat terampil',
                        'Sedikit terampil',
                        'Tidak begitu terampil',
                        'Tidak sama sekali terampil',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apa posisi pekerjaan anda?', // main question
                    // options
                    [ 
                        'Kontributor Individu',
                        'Ketua Tim',
                        'Manajer',
                        'Manajer Senior',
                        'Manajer Wilayah',
                        'Wakil Presiden',
                        'Manajemen / C-Level',
                        'Mitra',
                        'Pemilik',
                        'Relawan',
                        'Magang',
                        'Lainnya',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Manakah dari situs web jaringan profesional berikut, yang perusahaan Anda biasanya menemukan kandidat pekerjaannya paling memenuhi syarat?', // main question
                    // options
                    [ 
                        'Linkedln',
                        'Viadeo',
                        'XING',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa puas anda dengan yang telah dicapai saat ini?', // main question
                    // options
                    [ 
                        'Sangat puas',
                        'Cukup puas',
                        'Sedikit puas',
                        'Tidak puas',
                        'Sangat tidak puas',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    34 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa baik karyawan berbagi tanggung jawab untuk tugas?', // main question
                    // options
                    [ 
                        'Sangat baik sekali',
                        'Sangat baik',
                        'Sedikit baik',
                        'Tidak begitu baik',
                        'Tidak sama sekali baik',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    36 // question bank id, should null if from survey
                )->create();



                $factory
                ->multipleChoice(
                    'Seberapa produktif karyawan ini?', // main question
                    // options
                    [ 
                        'Sangat produktif sekali',
                        'Sangat produktif',
                        'Sedikit produktif',
                        'Tidak begitu produktif',
                        '',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    36 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Karyawan di sini bersedia menerima tugas baru sesuai kebutuhan?', // main question
                    // options
                    [ 
                        'Sangat tidak setuju',
                        'Tidak setuju',
                        'Netral',
                        'Setuju',
                        'Sangat setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    36 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Karyawan memperlakukan satu sama lain dengan hormat?', // main question
                    // options
                    [ 
                        'Sangat tidak setuju',
                        'Tidak setuju',
                        'Netral',
                        'Setuju',
                        'Sangat setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    36 // question bank id, should null if from survey
                )->create();



                $factory
                ->multipleChoice(
                    'Pada peristiwa saat ini, bagaimana anda memperkirakan tingkat keterlibatan anda dengan produk atau layanan pada perusahaan yang berubah di masa depan?', // main question
                    // options
                    [ 
                        'Meningkatkan',
                        'Tetap sama',
                        'Penurunan',
                        'Berhenti bersama',
                        'Tidak yakin',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    36 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa baik karyawan berbagi tanggung jawab untuk tugas?', // main question
                    // options
                    [ 
                        'Sangat baik sekali',
                        'Sangat baik',
                        'Sedikit baik',
                        'Tidak begitu baik',
                        'Tidak sama sekali baik',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    36 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Siapa yang ingin Anda evaluasi?', // main question
                    // options
                    [ 
                        'Supervisor',
                        'Rekan kerja',
                        'Bawahan',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    37 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Bagaimana keaktifan karyawan disini?', // main question
                    // options
                    [ 
                        'Sangat aktif sekali',
                        'Sangat aktif',
                        'Kadang aktif',
                        'Tidak begitu aktif',
                        'Tidak aktif sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    37 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa baik keterampilan dari karyawan perusahaan digunakan?', // main question
                    // options
                    [ 
                        'Sangat baik sekali',
                        'Sangat baik',
                        'Cukup baik',
                        'Tidak begitu baik',
                        'Tidak baik sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    37 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Kinerja pekerjaan saya dievaluasi secara adil? ', // main question
                    // options
                    [ 
                        'Sangat setuju sekali',
                        'Sangat setuju',
                        'Kadang setuju',
                        'Tidak begitu setuju',
                        'Tidak setuju sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    37 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Komunikasi antara pemimpin senior dan karyawan bagus dalam perusahan saya?', // main question
                    // options
                    [ 
                        'Sangat setuju sekali',
                        'Sangat setuju',
                        'Kadang setuju',
                        'Tidak begitu setuju',
                        'Tidak setuju sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    37 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Saya lebih suka makan di rumah menggunakan nasi, lauk pauk dan sayuran buatan sendiri daripada makan di tempat fast food?', // main question
                    // options
                    [ 
                        'Sangat tidak setuju',
                        'Tidak setuju',
                        'Abstain',
                        'Setuju',
                        'Sangat setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    39 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Diabetes mellitus adalah penyakit dimana terjadi peningkatan kadar gula darah di luar batas normal?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    39 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Riwayat keluarga, obesitas, pola makan yang buruk dan kurangnya aktivitas fisik merupakan faktor pemicu diabetes?', // main question
                    // options
                    [ 
                        'Setuju',
                        'Tidak setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    39 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Mengkonsumsi minuman bersoda, sirup dan minuman manis tidak meningkatkan kadar gula darah dalam tubuh', // main question
                    // options
                    [ 
                        'Setuju, karena mengkonsumsi makanan di atas secara berlebihan tidak menyebabkan diabetes',
                        'Tidak setuju, meskipun sedikit konsumsi makanan di atas akan berdampak pada diabetes',
                        'Setuju, karena banyak mengkonsumsi akan menyebabkan diabetes',
                        'Tidak setuju, karena makan makanan di atas berdampak pada kadar gula darah dalam tubuh',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    39, // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Menurut anda, faktor apa saja yang mempengaruhi seseorang bisa terkena diabetes?', // main question
                    // options
                    [ 
                        'Pola makan yang tidak sehat di usia muda',
                        'Pola makan tidak teratur',
                        'Kurang olahraga',
                        'Menderita tekanan darah tinggi',
                        'Terlalu banyak mengkonsumsi Gula',
                        'Keturunan',
                        'Mempunyai riwayat penyakit jantung',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    39 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Penyakit jantung koroner adalah penyakit jantung yang disebabkan oleh penyumbatan pada pembuluh darah di otak?', // main question
                    // options
                    [ 
                        'Benar',
                        'Salah',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    40 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Denyut nadi cepat adalah gejala koroner penyakit jantung?', // main question
                    // options
                    [ 
                        'Benar',
                        'Salah',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    40 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Jika salah satu anggota keluarga saya sesak nafas, saya tunggu saja sesak nafas berhenti mungkin tidak berlangsung lama?', // main question
                    // options
                    [ 
                        'Sangat tidak setuju',
                        'Tidak setuju',
                        'Abstain',
                        'Setuju',
                        'Sangat setuju',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    40 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Saat dada kiri sakit sampai ke leher, saya akan…?', // main question
                    // options
                    [ 
                        'Hubungi keluarga atau teman',
                        'Tenang dan itu akan sembuh dengan sendirinya',
                        'Pergi ke rumah sakit',
                        'Menangis dengan keras',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    40 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apakah anda merasa berkumpul dengan banyak orang menguras energi?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    41 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apakah anda senang menyendiri?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    41 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah anda menyukai suatu tantangan dengan banyak resiko?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    41 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Jika ini malam minggu dan hujan. Apa yang anda pikirkan?', // main question
                    // options
                    [
                        'Pergi keluar. Menghabiskan malam hari di dalam dapat menjadi sebuah kebosanan',
                        'Hujan? Adalah alasan terbaik untuk membatalkan semua rencana dan minum teh di rumah',
    
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    41 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Jika anda berada di tempat kopi. Hanya tersedia tempat duduk di depan orang
                    asing', // main question
                    // options
                    [  
                    'Tidak apa-apa, mereka terlihat menarik. Saya akan bertanya kepada mereka apa yang mereka baca',
                    'Saya akan dengan halus meninggalkan cangkir saya di atas meja dan meninggalkannya, selamanya',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    41 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Berapa Umur anda saat ini?', // main question
                    // options
                    [ 
                        '<20',
                        '<30',
                        '<40',
                        '<50',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    48 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Genre film apa yang ingin anda tonton? ', // main question
                    // options
                    [ 
                        'Laga',
                        'Komedi',
                        'Pembunuhan',
                        'Romantis',
                        'Seram',
                        'Animasi',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    48 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Dimana anda biasa menonton film?', // main question
                    // options
                    [ 
                        'Smartphone',
                        'TV',
                        'Laptop',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    48 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Dalam sehari, berapa banyak waktu yang anda lakukan untuk menonton film?', // main question
                    // options
                    [ 
                        '0-1 jam',
                        '2-3 jam',
                        '4-5 jam',
                        '6-7 jam',
                        'Lebih dari 7 jam',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    48 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa sering anda menonton film dalam sehari?', // main question
                    // options
                    [ 
                        'Sangat sering sekali',
                        'Sangat sering',
                        'Cukup sering',
                        'Tidak begitu sering',
                        'Tidak sering sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    48 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Diantara jenis social media pada pertanyaan sebelumnya, menurut anda Aplikasi Social media apa yang sering anda gunakan?', // main question
                    // options
                    [ 
                        'Instagram',
                        'Tiktok',
                        'Facebook',
                        'Whatsapp',
                        'Twitter',
                        'Snapchat',
                        'Linkedln',
                        'Lainnya',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    50 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah sosial media dapat menjadi pengaruh yang buruk dalam kehidupan sehari-hari?', // main question
                    // options
                    [ 
                        'Sangat setuju',
                        'Setuju',
                        'Ragu-ragu',
                        'Tidak setuju',
                        'Tidak setuju sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    50 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa penting sosial media bagi kehidupan anda?', // main question
                    // options
                    [ 
                        'Sangat penting sekali',
                        'Sangat penting',
                        'Cukup penting',
                        'Tidak penting',
                        'Tidak penting sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    50 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa sering anda menggunakan social media tersebut', // main question
                    // options
                    [ 
                        'Sangat sering sekali',
                        'Sangat sering',
                        'Cukup sering',
                        'Tidak sering',
                        'Tidak sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    50 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Merek apa yang pertama kali muncul dalam pikiran anda tentang produk', // main question
                    // options
                    [ 
                        'Merek 1',
                        'Merek 2',
                        'Merek 3',
                        'Merek 4',
                        'Merek 5',
                        'Merek 6',
                        'Lainnya',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa sering anda menggunakan merek produk tersebut?', // main question
                    // options
                    [ 
                        'Sangat sering sekali',
                        'Sangat sering',
                        'Cukup sering',
                        'Tidak sering',
                        'Tidak sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apabila diminta untuk menyebutkan merek produk , adalah merek pertama kali yang muncul dalam benak saya?', // main question
                    // options
                    [ 
                        'Sangat setuju',
                        'Setuju',
                        'Ragu-ragu',
                        'Tidak setuju',
                        'Tidak setuju sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Kapan pertama kali anda mendengar tentang produk kami?', // main question
                    // options
                    [ 
                        'Bulan ini',
                        '6 bulan terakhir',
                        '12 bulan terakhir',
                        '3 tahun terakhir',
                        'Saya tidak pernah mendengarnya',

                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Merek produk tersebut lebih familiar dari merek lainnya'
                    , // main question
                    // options
                    [ 
                        'Sangat setuju',
                        'Setuju',
                        'Ragu-ragu',
                        'Tidak setuju',
                        'Tidak setuju sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Pada 3 bulan terakhir, seberapa sering anda mendengar orang berbicara tentang merek kami?', // main question
                    // options
                    [ 
                        'Sangat sering',
                        'sering',
                        'Beberapa kali',
                        'Sekali',
                        'Saya tidak pernah mendengar orang berbicara tentang produk ini',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Bagaimana tanggapan anda tentang perubahan merek kami dalam 3 bulan lalu?', // main question
                    // options
                    [ 
                        'Jauh lebih menguntungkan',
                        'Lebih menguntungkan',
                        'Kurang menguntungkan',
                        'Tidak begitu baik',
                        'Tidak menguntungkan',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Kapan terakhir kali anda menggunakan produk kategori ini?', // main question
                    // options
                    [ 
                        'Minggu ini',
                        'Bulan ini',
                        '3 bulan terakhir',
                        '6 bulan terakhir',
                        '12 bulan terakhir',
                        'Lebih dari 12 bulan lalu',
                        'Tidak pernah',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa kenal anda dengan merek kami?', // main question
                    // options
                    [ 
                        'Sangat kenal sekali',
                        'Sangat kenal',
                        'Sedikit kenal',
                        'Tidak begitu kenal',
                        'Tidak sama sekali kenal',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    44 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Bagaimana suasana hati anda saat ini?', // main question
                    // options
                    [ 
                        'Sangat baik sekali',
                        'Sangat baik',
                        'baik',
                        'Tidak begitu baik',
                        'Sama sekali tidak baik',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    47 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Dalam sehari, seberapa sering suasana hati anda berubah?', // main question
                    // options
                    [ 
                        'Sangat sering sekali',
                        'Sangat sering',
                        'sering',
                        'Tidak begitu sering',
                        'Tidak sering sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    47 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apakah anda tipe orang yang sering menggunakan sesuatu untuk melampiaskan suasana hati anda yang buruk? ', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    47 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah jenis kelamin anda?', // main question
                    // options
                    [ 
                        'Laki-laki',
                        'Perempuan',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    49, // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Berapa Umur anda saat ini?', // main question
                    // options
                    [ 
                        '<20',
                        '<30',
                        '<40',
                        '<50',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    49 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa sering anda menonton TV sehari?', // main question
                    // options
                    [ 
                        '3 jam',
                        '4 jam',
                        '5 jam',
                        '6 jam',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    49 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah anda menonton TV secara online?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    49 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Menurut anda, bagaimana perkembangan acara televisi yang ditayangkan pada zaman sekarang?', // main question
                    // options
                    [ 
                        
                        'Sangat baik',
                        'baik',
                        'Tidak begitu baik',
                        'Buruk sekali',
                        'Sangat Buruk sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    49, // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Apakah anda lebih suka TV Series per episode?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    49 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apa reaksi pertama kali anda saat melihat produk ini?', // main question
                    // options
                    [ 
                        'Sangat positif',
                        'Cukup positif',
                        'Cukup negatif',
                        'Sangat negatif',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    42 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Seberapa mungkin anda akan mengganti produk yang anda miliki dengan produk ini?', // main question
                    // options
                    [ 
                        'Sangat mungkin sekali',
                        'Sangat mungkin',
                        'Mungkin',
                        'Tidak mungkin',
                        'Sangat tidak mungkin sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    42 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Jika produk ini tersedia lagi, seberapa mungkin anda akan membeli produk
                    tersebut?', // main question
                    // options
                    [ 
                        'Sangat mungkin sekali',
                        'Sangat mungkin',
                        'Mungkin',
                        'Tidak mungkin',
                        'Sangat tidak mungkin sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    42 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Ketika anda berfikir tentang produk ini, apakah menurut anda ini sebagai produk yang dibutuhkan atau tidak dibutuhkan?', // main question
                    // options
                    [ 
                        'Tentu saja dibutuhkan',
                        'Mungkin dibutuhkan',
                        'Netral',
                        'Mungkin tidak dibutuhkan',
                        'Tentu saja tidak dibutuhkan',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    42 // question bank id, should null if from survey
                )->create();
                $factory
                ->multipleChoice(
                    'Seberapa unik produk ini?', // main question
                    // options
                    [ 
                        'Sangat unik sekali',
                        'Sangat unik',
                        'Cukup unik',
                        'Tidak begitu unik',
                        'Tidak unik sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    42, // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah menurut anda iklan diatas menarik secara visual?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    45 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa mungkin anda membeli produk ini setelah melihat iklan ini?', // main question
                    // options
                    [ 
                    'Sangat mungkin sekali',
                    'Sangat mungkin',
                    'Mungkin',
                    'Tidak mungkin',
                    'Sangat tidak mungkin sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    45 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa perbedaan logo ini dengan logo terdahulu?', // main question
                    // options
                    [ 
                        'Sangat wajar sekali',
                        'Sangat wajar',
                        'Sedikit wajar',
                        'Tidak begitu wajar',
                        'Tidak wajar sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    45 // question bank id, should null if from survey
                )->create();
              
                $factory
                ->multipleChoice(
                    'Seberapa menarik perhatian logo ini?', // main question
                    // options
                    [ 
                        'Sangat menarik perhatian sekali',
                        'Sangat menarik perhatian',
                        'Sedikit menarik perhatian',
                        'Tidak begitu menarik perhatian',
                        'Tidak menarik perhatian sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    45 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa mudah anda menemukan logo tersebut di toko?', // main question
                    // options
                    [ 
                        'Sangat mudah sekali',
                        'Sangat mudah',
                        'Sedikit mudah',
                        'Tidak begitu mudah',
                        'Tidak mudah sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    45 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa inovatif logo ini?', // main question
                    // options
                    [ 
                        'Sangat inovatif sekali',
                        'Sangat inovatif',
                        'Sedikit inovatif',
                        'Tidak begitu inovatif',
                        'Tidak inovatif sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    45 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Secara keseluruhan tentang logo tersebut, manakah dibawah ini yang paling terbaik dalam mendeskripsikan perasaan anda?', // main question
                    // options
                    [ 
                        'Sangat suka sekali',
                        'Terkadang suka',
                        'Merasa netral tentang itu',
                        'Terkadang tidak suka',
                        'Tidak suka sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    45 // question bank id, should null if from survey
                )->create();

                $factory
                ->multipleChoice(
                    'Menurut anda, seberapa penting mengatur pengeluaran ketika memilih tempat
                    liburan?', // main question
                    // options
                    [ 
                        'Sangat penting sekali',
                        'Sangat penting',
                        'Cukup penting',
                        'Tidak begitu penting',
                        'Tidak penting sama sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    46 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Seberapa sering anda pergi liburan?', // main question
                    // options
                    [ 
                        'Sebulan sekali',
                        'Dua bulan sekali',
                        'Enam bulan sekali',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    46 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Jenis perjalanan seperti apa yang sering anda lakukan?', // main question
                    // options
                    [ 
                        'All-inclusive charter (Perjalanan yang mencakup semua fasilitas dalam
                        satu tempat, seperti bepergian dengan kapal pesiar yang semua
                        fasilitasnya, contohnya tempat perbelanjaan, kolam renang, dan
                        sebagainya, sudah terdapat pada kapal)',
                        'Backpacker (Perjalanan dengan biaya murah dan hemat)',
                        'Group travel (Perjalanan bersama dengan sebuah grup)',
                        'Self-organized trip (Perjalanan yang diatur sendiri)',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    46 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Apakah anda pernah menggunakan agent travel dalam mengurus liburan anda?', // main question
                    // options
                    [ 
                        'Ya',
                        'Tidak',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    46 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Dimana sumber informasi yang biasanya anda dapatkan untuk mencari tempat liburan?', // main question
                    // options
                    [ 
                        'Online',
                        'Offline',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    46 // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Berapa biaya yang anda habiskan untuk liburan?', // main question
                    // options
                    [ 
                        '1 juta',
                        '3 juta',
                        '6 juta',
                        '10 juta',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    46, // question bank id, should null if from survey
                )->create();


                $factory
                ->multipleChoice(
                    'Benua apa yang anda ingin datangkan?', // main question
                    // options
                    [ 
                        'Eropa',
                        'Afrika',
                        'Australia',
                        'Asia',
                    ],
                    // validations
                    [
                        [
                            'rule' => 'required',
                            'value' => true,
                            'message' => 'you must answer this question'
                        ],
                    ],
                    null, //  survey id , should null if from question bank
                    46 // question bank id, should null if from survey
                )->create();


        // multiOptions
        $factory
            ->multiOptions( 
   'Apa alasan anda dalam memilih tempat berbelanja? (pilih 1 atau lebih)', // main question
                // options
                [
                    'Dekat rumah saya',
                    'Harga murah',
                    'Lengkap',
                    'Pelayanan',
                    'Banyak pilihan',
                    'Tempat yang nyaman',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                47 //question bank id, should null if from survey
            )->create();


            $factory
            ->multiOptions(
                'Apa faktor utama anda menentukan untuk belanja? (pilih 1 atau lebih)', // main question
                // options
                [
                    'Merk',
                    'Kebutuhan',
                    'Diskon',
                    'Produk',
                    'Harga',
                    'Lokasi',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                27 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Apa jenis penindasan yang anda alami? (dapat memilih 1 atau lebih)', // main question
                // options
                [
                    'Mengolok-olok anda',
                    'Memanggil nama anda',
                    'Menyebarkan desas-desus tentang anda',
                    'Memukul anda dengan sesuatu',
                    'Membuat komentar seksual yang tidak pantas',
                    'Mengancam untuk menyakiti',
                    'Mempermalukan anda di publik',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                33 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Bagaimana guru anda melakukan penjelasan materi pembelajaran di kelas? (dapat
                menjawab 1 atau lebih)', // main question
                // options
                [
                    'Presentasi',
                    'Menjelaskan dengan papan tulis',
                    'Maju ke depan satu per satu',
                    'Belajar sendiri',
                    'Banyak tugas',
                    'Memanggil dengan nama',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                32 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Seperti apa kriteria anda dalam memilih tim anda? (dapat memilih 1 atau lebih)', // main question
                // options
                [
                    'Banyak anggota',
                    'Kerjasama yang baik',
                    'Ramah',
                    'Menerima kritik dan saran',
                    'Kerja keras',
                    'Disiplin',
                    'Nyaman',
                    'Sedikit anggota',
                    'Aktif memberikan pendapat',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                35 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Sebutkan fasilitas yang ada di dalam kantor!', // main question
                // options
                [
                    'Kantin',
                    'Ruangan rapat',
                    'Ruangan CEO',
                    'Ruangan direktur',
                    'Ruangan staff',
                    'Resepsionis',
                    'Kamar mandi',
                    'Tempat merokok',
                    'Aula',
                    'Tempat parkir',
                    'Lift',
                    'Tangga berjalan',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                38 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Apa kesalahan yang anda buat saat bekerja pada bulan ini?', // main question
                // options
                [
                    'Terlambat ke kantor',
                    'Tidak menghadiri rapat tanpa alasan',
                    'Pergi keluar kantor di luar jam istirahat tanpa alasan',
                    'Tidak datang ke kantor tanpa alasan',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                37 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Bagaimana cara mengurangi risiko diabetes?', // main question
                // options
                [
                    'Mengatur jumlah makanan',
                    'Mengatur jenis makanan',
                    'Mengatur jadwal makan',
                    'Mengatur pola tidur',
                    ' Mengatur waktu liburan',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                39 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Ciri-ciri dari penyakit jantung adalah', // main question
                // options
                [
                    'Nyeri dada intermittent',
                    'Denyut nadi cepat',
                    'Sesak napas saat digunakan untuk aktivitas berat',
                    'Mual dan pusing',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                40 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Pilihlah beberapa pernyataan yang menurut anda sesuai dengan kelemahan anda!', // main question
                // options
                [
                    'Memperlihatkan sedikit emosi/mimik',
                    'Menghindari perhatian akibat rasa malu',
                    'Sering mengalami kurangnya daya ingatan',
                    'Senang berbagi cerita tanpa melihat pendengar yang menjadi lawan
                    pembicara anda',
                    'Tidak suka keramaian',
                    'Tidak suka hal yang terburu-buru',
                    'Tidak mempunyai rasa bersalah saat melakukan kesalahan',
                    'Sering merasa khawatir, terburu-buru dalam keadaan tertentu',
                    'Selalu merasa lebih tinggi derajatnya dibandingkan',
                    'Mempunyai perasaan tidak suka terhadap pencapaian orang lain',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                41 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                ' Pilihlah beberapa pernyataan yang menurut anda sesuai dengan kelebihan anda!', // main question
                // options
                [
                    'Saya merasa lebih mandiri',
                    'Saya merasa optimis ketika menghadapi suatu masalah',
                    'Dapat menerima pendapat orang lain secara terbuka',
                    'Saya merasa Bisa melakukan banyak pekerjaan sekaligus',
                    'Saya suka dengan keramaian',
                    'Saya tidak gila hormat',
                    'Saya tidak suka dengan hal yang terburu-buru',
                    'Mudah menyesuaikan diri dengan lingkungan sekitar',
                    'Penuh keyakinan, semangat, dan keberanian',
                    'Saya sangat antusias terhadap hal-hal yang baru',
                    'Dapat memimpin kelompok orang dengan teratur',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                41 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Diantara semua pilihan yang sudah di sediakan pada pertanyaan sebelumnya
                merek produk apa yang pernah anda coba?', // main question
                // options
                [
                    'Merek 1',
                    'Merek 2',
                    'Merek 3',
                    'Merek 4',
                    'Merek 5',
                    'Merek 6',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                44 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Aspek mana saja yang menjadi acuan anda memilih produk tersebut?', // main question
                // options
                [
                    'Rekomendasi',
                    'Harga',
                    'Kualitas',
                    'Pengalaman pribadi',
                    'Ketersediaan',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                44 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Apa alasan yang membuat anda menyukai jenis produk tersebut?', // main question
                // options
                [
                    'Rasa',
                    'Tekstur',
                    'Kenyamanan',
                    'Tampilan produk',
                    'Merek',
                    'Komposisi',
                    'Keamanan produk',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                42 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Perlengkapan apa saja yang ingin anda bawa?', // main question
                // options
                [
                    'Kamera',
                    'Handphone',
                    'Pakaian renang',
                    'Baju trendy',
                    'Obat-obatan',
                    'Uang yang cukup',
                    'Transportasi',
                    'Paspor',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                46 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Jenis penginapan seperti apa yang menurut anda dapat membuat nyaman ketika
                liburan? (pilih 1 atau lebih)', // main question
                // options
                [
                    'Hotel',
                    'Apartment',
                    'Villa',
                    'Bungalow',
                    'Cottage',
                    'Guest house',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                46 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Bagaimana cara anda mengatasi suasana hati yang buruk?', // main question
                // options
                [
                    'Makan yang banyak',
                    'Jalan-jalan',
                    'Menonton film',
                    'Berbicara ke orang tua',
                    'Main game',
                    'Menyanyi',
                    'Menggambar',
                    'Merias wajah',
                    'Berbelanja',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                47 //question bank id, should null if from survey
            )->create();


            $factory
            ->multiOptions(
                'Siapa yang biasanya dapat merubah suasana hati anda menjadi lebih baik? (pilih 1
                atau lebih)', // main question
                // options
                [
                    'Orang tua',
                    'Teman',
                    'Saudara',
                    'Kekasih',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                47 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Apa hal yang biasanya menjadi alasan suasana hati anda menjadi buruk? (pilih 1
                atau lebih)', // main question
                // options
                [
                    'Banyak pekerjaan',
                    'Masalah khusus wanita',
                    'Banyak pikiran',
                    'Lelah',
                    'Sakit',
                    'Tidak di penuhi kemauan anda',
                    'Makanan',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                47 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Kebiasaan Sosial media
                Tujuan: untuk melihat bagaimana kebiasaan seseorang menggunakan sosial media
                1. Jenis sosial media seperti apa yang sering anda gunakan?', // main question
                // options
                [
                    'Instagram',
                    'Tiktok',
                    'Facebook',
                    'Whatsapp',
                    'Twitter',
                    'Snapchat',
                    'Linkedln',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                50 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Menurut anda, apa saja manfaat dari sosial media dalam kehidupan sehari-hari?
                (pilih 1 atau lebih)', // main question
                // options
                [
                    'Berjualan',
                    'Berbelanja',
                    'Menemukan hal baru',
                    'Menjalin pertemanan',
                    'Komunikasi',
                    'Media memamerkan sesuatu',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                50 //question bank id, should null if from survey
            )->create();

            $factory
            ->multiOptions(
                'Jenis acara televisi seperti apa yang anda sering tonton?', // main question
                // options
                [
                    'Sinetron',
                    'Acara reality show',
                    'Kartun',
                    'Berita',
                    'Iklan produk',
                    'Acara edukasi',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, //survey id , should null if from question bank
                49 //question bank id, should null if from survey
            )->create();

           

        // dropdown
        $factory
            ->dropDown(
                'Apa pekerjaan anda sekarang?', // main question
                // options
                [
                    'Dokter',
                    'PNS',
                    'Ibu Rumah Tangga',
                    'Mahasiswa/pelajar',
                    'PNS',
                    'Karyawan',
                    'Lainnya',
                ],
                // validations
                [
                    [
                        'rule' => 'required',
                        'value' => true,
                        'message' => 'you must answer this question'
                    ],
                ],
                null, // survey id , should null if from question bank
                27, //question bank id, should null if from survey               
            )->create();

/*=================================================================================*/

        /* DB::table('questions')->insert([
            //engg====================================================>
            [
                'id' => 1,
                'question_bank_id' => 1,
                'question' => 'What’s your age?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'What’s your gender?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'How often do you use the product you bought?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'How satisfied are you with our product or service?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'What do you really like about our product or service?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'Why you like this product or service? ',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'How likely is it that you would recommend our product or service to a friend, family, 
                colleague?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'How would you rate the quality of our product or service?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'Why did you choose our product or service over than competitor’s product?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => ' How likely are you to purchase any of our product or service again?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                // 'survey' => 1,
                'question_bank_id' => 1,
                'question' => 'How can we improve our product or service?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Customer behavior 
            
            [
                'id' => 12,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'What’s your relationship status now?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'What’s your current job?',
                'type' => 'select',
                'question_type' => 'dropdown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'How much do you earn in one month?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'How much do you spend on shopping every month? ',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'Are you an active person who doing shopping every month ',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'What’s your reason for choosing a place to shop? (you can choose 1 or more) ',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'What are your main factors for deciding to shop? (you can choose 1 or more) ',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                // 'survey' => 1,
                'question_bank_id' => 2,
                'question' => 'What a bid criteria do you want? ',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Typical Customer
            [
                'id' => 20,
                // 'survey' => 1,
                'question_bank_id' => 3,
                'question' => 'What’s your current job?',
                'type' => 'select',
                'question_type' => 'dropdown',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 21,
                // 'survey' => 1,
                'question_bank_id' => 3,
                'question' => 'How much do you earn in one month?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 22,
                // 'survey' => 1,
                'question_bank_id' => 3,
                'question' => 'When was the last time you came to my shop?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 23,
                // 'survey' => 1,
                'question_bank_id' => 3,
                'question' => 'What is the last product you bought in my shop?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 24,
                // 'survey' => 1,
                'question_bank_id' => 3,
                'question' => 'What product do you want to buy now in my shop?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 25,
                // 'survey' => 1,
                'question_bank_id' => 3,
                'question' => 'How much do you rate my product that you have used and purchased?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Customer loyalty
            
            [
                'id' => 26,
                // 'survey' => 1,
                'question_bank_id' => 4,
                'question' => 'How interested are you in other products than our products?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 27,
                // 'survey' => 1,
                'question_bank_id' => 4,
                'question' => 'Is there anything that you think would improve our customer support?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 28,
                // 'survey' => 1,
                'question_bank_id' => 4,
                'question' => 'Do you tend to subscribe to free loyalty or discount programs?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 29,
                // 'survey' => 1,
                'question_bank_id' => 4,
                'question' => 'Do you tend to subscribe to paid loyalty or discount programs?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 30,
                // 'survey' => 1,
                'question_bank_id' => 4,
                'question' => 'Why did you choose our product or service over than competitor’s product?',
                'type' => 'text',   
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 31,
                // 'survey' => 1,
                'question_bank_id' => 4,
                'question' => 'How likely is it that you would recommend our product or service to a friend, family, colleague?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 32,
                // 'survey' => 1,
                'question_bank_id' => 4,
                'question' => 'What is the reason you choose our product over other products?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        //EDUCATION RESEARCH
            //-->Parent Satisfaction
            [
                'id' => 33,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => 'What is your relationship to your child?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 34,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => 'How often do you meet in person with teacher at your child’s school?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 35,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => 'How much effort do you put into helping your child learn to do new things to?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 36,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => 'How often do you supervise your child in doing homework?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 37,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => 'How much time do you give your child to do homework?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 38,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => "Are you satisfied with your child's progress that has been achieved so far?",
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 39,
                // 'survey' => 1,
                'question_bank_id' => 5,
                'question' => 'How often do you and your child talk when he or she is having a problem with?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //-->School facility
            [
                'id' => 40,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'Does the school have the following dedicated Library / Secure book storage room',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 41,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'Does the school have the following dedicated Sports / other equipment storage',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 42,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'Does the school have the following dedicated Staff room',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 43,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'Does the school have the following dedicated Head teacher’s office',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 44,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'Overall, how clean are the toilet facilities in the school?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 45,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'Roughly how many trash are provided by the school?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 46,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'Is the classroom door in good condition?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 47,
                // 'survey' => 1,
                'question_bank_id' => 6,
                'question' => 'How good is the condition of the chair and the tables in the classroom?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Teacher Evaluation
            [
                'id' => 48,
                // 'survey' => 1,
                'question_bank_id' => 7,
                'question' => 'Has your teacher provided better learning materials?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 49,
                // 'survey' => 1,
                'question_bank_id' => 7,
                'question' => 'Has your teacher ever hurt you in the class? (hurt in this case like being hit, pinched, etc.)',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 50,
                // 'survey' => 1,
                'question_bank_id' => 7,
                'question' => 'Is the atmosphere in classroom are comfortable when the teacher explain learning materials?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 51,
                // 'survey' => 1,
                'question_bank_id' => 7,
                'question' => 'How does your teacher explain the learning materials in the class? (you can choose 1
                or more)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 52,
                // 'survey' => 1,
                'question_bank_id' => 7,
                'question' => 'In term of assessment, are your teacher better at doing this?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Bullying Survey
            [
                'id' => 53,
                // 'survey' => 1,
                'question_bank_id' => 8,
                'question' => 'Have you ever experienced bullying in your life?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 54,
                // 'survey' => 1,
                'question_bank_id' => 8,
                'question' => 'If so, when was the last time you experienced bullying?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 55,
                // 'survey' => 1,
                'question_bank_id' => 8,
                'question' => 'What type of bullying have you experienced? (you can choose 1 or more)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 56,
                // 'survey' => 1,
                'question_bank_id' => 8,
                'question' => 'How long have you been experiencing bullying?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 57,
                // 'survey' => 1,
                'question_bank_id' => 8,
                'question' => 'Have you ever seen bullying around you?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 58,
                // 'survey' => 1,
                'question_bank_id' => 8,
                'question' => 'In your opinion, is bullying a natural thing or vice versa?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 59,
                // 'survey' => 1,
                'question_bank_id' => 8,
                'question' => 'Are you looking for protection or report bullying you experienced or refer it to the
                authorities? And how do they react to your problem?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        //Employee Satisfaction
            //-->Job satisfaction
            [
                'id' => 60,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'How happy or unhappy are you with your current role at your job?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 61,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'How well do your job responsibilities match your strengths?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 62,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'My job performance is evaluated fairly.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 63,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'I am satisfied with my overall job security.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 64,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'When at work, I am completely focused on my job duties.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 65,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'How skilled at their jobs are the members of (your team)?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 66,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'From which of the following professional networking websites does your company typically find its most qualified job candidates?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 67,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'What is your job role?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 68,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'Which of the following best describes your current job level?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 69,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'How satisfied are you salary with what you have achieved',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 70,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'How satisfied are you bonus with what you have achieved',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 71,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'How satisfied are you  incentive with what you have achieved',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 72,
                // 'survey' => 1,
                'question_bank_id' => 9,
                'question' => 'How satisfied are you with your current development in this office? Very dissatisfied Extremely satisfied',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //-->Team Performance
            [
                'id' => 73,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'Are all members of your team doing the job according to their positions and duties?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 74,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'Overall, how satisfied are you with the work of all members?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 75,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'How fast do you think your team will complete all of their project?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 76,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'How honest with each other are your team members?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 77,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'How time efficient do team meetings need to be?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 78,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'What are your criteria in choosing your team? (you can choose 1 or more)',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 79,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'Do you like all the members in this team?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 80,
                // 'survey' => 1,
                'question_bank_id' => 10,
                'question' => 'Do you think your team has too many or too few meetings?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            //-->Employee engagement
            [
                'id' => 81,
                // 'survey' => 1,
                'question_bank_id' => 11,
                'question' => 'How productive is this employee?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 82,
                // 'survey' => 1,
                'question_bank_id' => 11,
                'question' => 'Employees here are willing to take on new tasks as needed.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 83,
                // 'survey' => 1,
                'question_bank_id' => 11,
                'question' => 'Employees treat each other with respect.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 84,
                // 'survey' => 1,
                'question_bank_id' => 11,
                'question' => 'In light of current events, how do you foresee your level of engagement with company’s products or services changing in the future?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 85,
                // 'survey' => 1,
                'question_bank_id' => 11,
                'question' => 'How well do employees share responsibility for tasks?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Employee evaluation
            [
                'id' => 86,
                // 'survey' => 1,
                'question_bank_id' => 12,
                'question' => 'Whom would you like to evaluate?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 87,
                // 'survey' => 1,
                'question_bank_id' => 12,
                'question' => 'How proactive is this employee?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 88,
                // 'survey' => 1,
                'question_bank_id' => 12,
                'question' => 'How well are the skills of the company`s employees being used?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 89,
                // 'survey' => 1,
                'question_bank_id' => 12,
                'question' => 'My job performance is evaluated fairly.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 90,
                // 'survey' => 1,
                'question_bank_id' => 12,
                'question' => 'Communication between senior leaders and employees is good in my company.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 91,
                // 'survey' => 1,
                'question_bank_id' => 12,
                'question' => 'What mistakes have you made while working this month',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Office Facility
            [
                'id' => 92,
                // 'survey' => 1,
                'question_bank_id' => 13,
                'question' => 'Are office facilities good enough to make the employees comfortable doing their jobs?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 93,
                // 'survey' => 1,
                'question_bank_id' => 13,
                'question' => 'Do you have an opinion to improve your office facilities?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 94,
                // 'survey' => 1,
                'question_bank_id' => 13,
                'question' => 'Whether security used by your office is safe enough?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 95,
                // 'survey' => 1,
                'question_bank_id' => 13,
                'question' => 'Mention the room in your office? (you can choose 1 or more)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 96,
                // 'survey' => 1,
                'question_bank_id' => 13,
                'question' => 'How satisfied are you with the facilities provided by your office?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Healthy Research
            //-->Diabetes test
            [
                'id' => 97,
                // 'survey' => 1,
                'question_bank_id' => 14,
                'question' => 'I prefer to eat at home using rice, side dishes and Homemade vegetables instead of eating at fast food places',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 98,
                // 'survey' => 1,
                'question_bank_id' => 14,
                'question' => 'Diabetes mellitus is a disease in which there is an increase in blood sugar levels outside normal limits',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 99,
                // 'survey' => 1,
                'question_bank_id' => 14,
                'question' => 'Family history, obesity, poor diet and lack of Physical activity is a trigger factor for diabetes',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 100,
                // 'survey' => 1,
                'question_bank_id' => 14,
                'question' => 'Consuming soft drinks, syrups and sugary drinks does not increase blood sugar levels in the body',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 101,
                // 'survey' => 1,
                'question_bank_id' => 14,
                'question' => 'In your opinion, what factors influence someone who can get diabetes?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 102,
                // 'survey' => 1,
                'question_bank_id' => 14,
                'question' => 'How to reduce the risk of diabetes?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Heart disease
            [
                'id' => 103,
                // 'survey' => 1,
                'question_bank_id' => 15,
                'question' => 'Coronary heart disease is a heart disease that caused by a blockage in the blood vessels in the brain.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 104,
                // 'survey' => 1,
                'question_bank_id' => 15,
                'question' => 'Fast pulse is a symptom of heart disease coroner.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 105,
                // 'survey' => 1,
                'question_bank_id' => 15,
                'question' => 'If one of my family members is short of breath I will just wait for the shortness of breath to stop maybe it won`t last long.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 106,
                // 'survey' => 1,
                'question_bank_id' => 15,
                'question' => 'When the left chest hurts to the neck, I will…',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 107,
                // 'survey' => 1,
                'question_bank_id' => 15,
                'question' => 'The characteristics of heart disease are.',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Personality test
            [
                'id' => 108,
                // 'survey' => 1,
                'question_bank_id' => 16,
                'question' => 'Do you feel that hanging out with a lot of people drains your energy?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 109,
                // 'survey' => 1,
                'question_bank_id' => 16,
                'question' => 'Are you happy when you`re alone?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 110,
                // 'survey' => 1,
                'question_bank_id' => 16,
                'question' => 'Do you like challenges with lots of risk?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 111,
                // 'survey' => 1,
                'question_bank_id' => 16,
                'question' => 'If it’s Saturday night and rainy. What are you thinking?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 112,
                // 'survey' => 1,
                'question_bank_id' => 16,
                'question' => 'If you at the coffee shop. The only available seat is in front of a stranger.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 113,
                // 'survey' => 1,
                'question_bank_id' => 16,
                'question' => 'Choose some statements that you think fit your weakness?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 114,
                // 'survey' => 1,
                'question_bank_id' => 16,
                'question' => 'Choose some statements that you think fit your strengths!',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],





            //Product Research
            //-->Product testing
            [
                'id' => 115,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'What kind of products do you like from all the products that have been marketed by this store?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 116,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'What is your reason like this kind of products?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 117,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'What kind of products do you dislike from all the products that have been marketed by this store?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 118,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'What your first reaction when look at this product?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 119,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'How unique this product?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 120,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'When you think about this product, do you think it is a product that is needed or not needed?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 121,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'How you evaluate about this price of product was sell? Very inexpensive Very expensive',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 122,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'If the product is available, how likely you will purchase this product?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 123,
                // 'survey' => 1,
                'question_bank_id' => 17,
                'question' => 'How likely are you to change your existing product with this product?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Logo testing
            [
                'id' => 124,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'Overall, how much do you like this logo',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 125,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'In your own words, what was the main message of the logo that was shown to you?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 126,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'How believable is the logo?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 127,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'How different is logo from existing logos?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 128,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'How eye-catching is this logo?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 129,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'How attractive is this logo?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 130,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'How innovative is this logo?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 131,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'Thinking about the logo overall, which of the following best describes your feelings about it?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 132,
                // 'survey' => 1,
                'question_bank_id' => 18,
                'question' => 'How easily do you could find the logo the store?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // -->Brand Awareness
            [
                'id' => 133,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'What is the first brand that comes to your mind about the product (insert your product
                type, for example mineral water)?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 134,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'Among all the options provided in the previous question, what brand of products have
                you tried (insert your product type, for example mineral water)?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 135,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'Which aspects are your reference for choosing this product?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 136,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'When you talk about what brands come to your mind?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 137,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => ' Please rank in order of your importance when looking at the brand of the product!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 138,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => ' Please rank in order of your importance when looking at the Convenience of the product!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 139,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => ' Please rank in order of your importance when looking at the Discount of the product!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 140,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => ' Please rank in order of your importance when looking at the Price of the product!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 141,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => ' Please rank in order of your importance when looking at the Recommendation of the product!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 142,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => ' Please rank in order of your importance when looking at the Recommendation of the product!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 143,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'How satisfied are you used this product brand?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 144,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'When requested for mention product brand (input your product), (your name product
                brand) is the first brand that comes to my mind.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 145,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'That Product brand most familiar than other brand',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 146,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'How familiar are you with our brand?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 147,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => ' How likely is it that you would recommend our product or service to a friend, family, colleague?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 148,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'In the past 3 months, how often did you hear people talking about our brand?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 149,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'How has your perception of our brand changed in the past 3 months?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
            [
                'id' => 150,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'When was the last time you used this product category?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 151,
                // 'survey' => 1,
                'question_bank_id' => 19,
                'question' => 'When did you first hear about our brand?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            


            //advertising

            [
                'id' => 152,
                // 'survey' => 1,
                'question_bank_id' => 20,
                'question' => 'Do you find the advertisement above to be visually appealing?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 153,
                // 'survey' => 1,
                'question_bank_id' => 20,
                'question' => 'How likely are you to purchase this product after seeing this advertisement?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 154,
                // 'survey' => 1,
                'question_bank_id' => 20,
                'question' => 'What kind of company do you think offers service associated with this
                advertisement?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'id' => 155,
                // 'survey' => 1,
                'question_bank_id' => 20,
                'question' => 'What do you like most about the advertisement?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 156,
                // 'survey' => 1,
                'question_bank_id' => 20,
                'question' => 'What words come to mind when you look at the advertisement?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 157,
                // 'survey' => 1,
                'question_bank_id' => 20,
                'question' => 'What words come to mind when you look at the advertisement?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //vacation research

            [
                'id' => 158,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'How often you go to holiday?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 159,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'How much did you spend on for holiday?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 160,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'What of continent do you want to visit?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 161,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'Where the favorite place you go to holiday?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 162,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'What kind of trips do you often do?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 163,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'Where are the sources of information that you usually get to find vacation spots?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 164,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'Have you ever used a travel agent to take care of your vacation?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 165,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'In your opinion, how important is it to manage expenses when choosing a vacation spot?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 166,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'What type of lodging do you think can make you comfortable when on vacation? (choose 1 or more)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 167,
                // 'survey' => 1,
                'question_bank_id' => 21,
                'question' => 'What equipment do you want to bring?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Mood Survey
            [
                'id' => 168,
                // 'survey' => 1,
                'question_bank_id' => 22,
                'question' => 'How is your mood right now?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 169,
                // 'survey' => 1,
                'question_bank_id' => 22,
                'question' => 'In each day, how often your mood changes?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 170,
                // 'survey' => 1,
                'question_bank_id' => 22,
                'question' => 'Are you the type of person who often uses things to vent your bad mood?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 171,
                // 'survey' => 1,
                'question_bank_id' => 22,
                'question' => 'What is the usual reason for your bad mood?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 172,
                // 'survey' => 1,
                'question_bank_id' => 22,
                'question' => 'Who can usually change your mood for be better?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 173,
                // 'survey' => 1,
                'question_bank_id' => 22,
                'question' => 'How do you deal with a bad mood?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //movie viewing

            [
                'id' => 174,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'What is your age right now?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 175,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'What is the genre movie do you want to watch?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
            [
                'id' => 176,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'How often you watch the movie in one day?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 177,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'Where you usually to watch the movie?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 178,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'In each day, how much time you doing to watch the movie?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 179,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'Overall the movie was you watch, which your favorite movie?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'id' => 180,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'In each day, how likely you watching the movie?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 181,
                // 'survey' => 1,
                'question_bank_id' => 23,
                'question' => 'What is subtitle often you used?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //TV viewing

            [
                'id' => 182,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'What is your gender?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
            [
                'id' => 183,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'What is your age right now?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
            [
                'id' => 184,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'How often you watch TV in each day?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

             
            [
                'id' => 185,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'Do you watch TV by online?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 186,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'Do you like series program?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            

            [
                'id' => 187,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'In your opinion, how development television program that aired at right now?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 188,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'What types of television programs do you watch often?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 189,
                // 'survey' => 1,
                'question_bank_id' => 24,
                'question' => 'How your feeling when you were watched the television program?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Social media habits
            [
                'id' => 190,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => 'What type of social media do you often use?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 191,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => 'Among the types of social media in the previous question, in your opinion, what
                social media application do you often use?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 192,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => 'How often do you use social media?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 193,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => 'Can social media help you in doing social activities?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'id' => 194,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => ' How satisfied social media for your life?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 195,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => 'In your opinion, what are the benefits from social media in your life?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 196,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => 'Can social media be a bad influence in everyday life?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197,
                // 'survey' => 1,
                'question_bank_id' => 25,
                'question' => 'What is your reason for answering the question about the influence of social media
                before?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //indo================================================ =====>
            [
                'id' => 197 + 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Berapa umur anda?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 2,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Apa jenis kelamin anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 3,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Seberapa sering anda menggunakan produk yang dibeli?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 4,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Seberapa puaskah anda dengan produk atau layanan kami?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 5,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Apa yang benar-benar anda sukai dari produk atau layanan kami?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 6,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Mengapa anda menyukai produk atau layanan ini? ',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 7,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Seberapa besar kemungkinan anda akan merekomendasikan produk atau layanan kami kepada teman, keluarga,
                kolega?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 8,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Bagaimana anda menilai kualitas produk atau layanan kami?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 9,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Mengapa anda memilih produk atau layanan kami daripada produk pesaing?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 10,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => ' Seberapa besar kemungkinan anda untuk membeli produk atau layanan kami lagi?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 11,
                // 'survei' => 1,
                'question_bank_id' => 25 + 1,
                'question' => 'Bagaimana kami dapat meningkatkan produk atau layanan kami?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //perilaku pelanggan
            
            [
                'id' => 197 + 12,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Apa status hubungan anda sekarang?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 13,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Apa pekerjaan anda saat ini?',
                'type' => 'pilih',
                'question_type' => 'turun ke bawah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 14,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Berapa penghasilan anda dalam satu bulan?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 15,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Berapa pengeluaran anda untuk berbelanja setiap bulan? ',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 16,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Apakah anda orang yang aktif berbelanja setiap bulan ',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 17,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Apa alasan anda memilih tempat berbelanja? (anda dapat memilih 1 atau lebih)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 18,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Apa faktor utama anda dalam memutuskan untuk berbelanja? (anda dapat memilih 1 atau lebih)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 19,
                // 'survei' => 1,
                'question_bank_id' => 25 + 2,
                'question' => 'Apa kriteria tawaran yang anda inginkan? ',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Pelanggan Biasa
            [
                'id' => 197 + 20,
                // 'survei' => 1,
                'question_bank_id' => 25 + 3,
                'question' => 'Apa pekerjaan anda saat ini?',
                'type' => 'pilih',
                'question_type' => 'turun ke bawah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 21,
                // 'survei' => 1,
                'question_bank_id' => 25 + 3,
                'question' => 'Berapa penghasilan anda dalam satu bulan?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 22,
                // 'survei' => 1,
                'question_bank_id' => 25 + 3,
                'question' => 'Kapan terakhir kali anda datang ke toko kami?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 23,
                // 'survei' => 1,
                'question_bank_id' => 25 + 3,
                'question' => 'Apa produk terakhir yang anda beli di toko kami?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 24,
                // 'survei' => 1,
                'question_bank_id' => 25 + 3,
                'question' => 'Produk apa yang ingin anda beli sekarang di toko kami?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 25,
                // 'survei' => 1,
                'question_bank_id' => 25 + 3,
                'question' => 'Berapa penilaian anda terhadap produk kami yang telah anda gunakan dan beli?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //Kesetiaan pelanggan
            
            [
                'id' => 197 + 26,
                // 'survei' => 1,
                'question_bank_id' => 25 + 4,
                'question' => 'Seberapa tertarik anda dengan produk selain produk kami?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 27,// 'survei' => 1,
                'question_bank_id' => 25 + 4,
                'question' => 'Apakah ada sesuatu yang menurut anda akan meningkatkan dukungan pelanggan kami?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 28,
                // 'survei' => 1,
                'question_bank_id' => 25 + 4,
                'question' => 'Apakah anda cenderung berlangganan program loyalitas atau diskon gratis?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 29,
                // 'survei' => 1,
                'question_bank_id' => 25 + 4,
                'question' => 'Apakah anda cenderung berlangganan program loyalitas atau diskon berbayar?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 30,
                // 'survei' => 1,
                'question_bank_id' => 25 + 4,
                'question' => 'Mengapa anda memilih produk atau layanan kami daripada produk pesaing?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 31,
                // 'survei' => 1,
                'question_bank_id' => 25 + 4,
                'question' => 'Seberapa besar kemungkinan anda akan merekomendasikan produk atau layanan kami kepada teman, keluarga, kolega?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 32,
                // 'survei' => 1,
                'question_bank_id' => 25 + 4,
                'question' => 'Apa alasan anda memilih produk kami dibanding produk lain?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        // PENELITIAN PENDIDIKAN
            //-->Kepuasan Orang Tua
            [
                'id' => 197 + 33,
                // 'survei' => 1,
                'question_bank_id' => 25 + 5,
                'question' => 'Apa hubungan anda dengan anak anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 34,
                // 'survei' => 1,
                'question_bank_id' => 25 + 5,
                'question' => 'Seberapa sering anda bertemu langsung dengan guru di sekolah anak anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 35,
                // 'survei' => 1,
                'question_bank_id' => 25 + 5,
                'question' => 'Seberapa besar usaha yang anda lakukan untuk membantu anak anda belajar melakukan hal-hal baru?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 36,
                // 'survei' => 1,
                'question_bank_id' => 25 + 5,
                'question' => 'Seberapa sering anda mengawasi anak anda dalam mengerjakan PR?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 37,
                // 'survei' => 1,
                'question_bank_id' => 25 + 5,
                'question' => 'Berapa banyak waktu yang anda berikan kepada anak anda untuk mengerjakan pekerjaan rumah?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 38,
                // 'survei' => 1,
                'question_bank_id' => 25 + 5,
                'question' => "Apakah anda puas dengan perkembangan anak anda yang telah dicapai selama ini?",
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 39,
                // 'survei' => 1,
                'question_bank_id' => 25 + 5,
                'question' => 'Seberapa sering anda dan anak anda berbicara saat dia mengalami masalah?','type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //-->Fasilitas sekolah
            [
                'id' => 197 + 40,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Apakah sekolah memiliki Perpustakaan / ruang penyimpanan buku khusus berikut',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 41,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Apakah sekolah memiliki tempat penyimpanan khusus Olahraga/peralatan lainnya',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 42,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Apakah sekolah memiliki ruang Staf khusus berikut',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 43,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Apakah sekolah memiliki kantor kepala sekolah khusus sebagai berikut',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 44,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Secara keseluruhan, seberapa bersih fasilitas toilet di sekolah?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 45,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Kira-kira berapa banyak sampah yang disediakan oleh sekolah?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 46,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Apakah pintu kelas dalam kondisi baik?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 47,
                // 'survei' => 1,
                'question_bank_id' => 25 + 6,
                'question' => 'Bagaimana kondisi kursi dan meja di dalam kelas?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Evaluasi Guru
            [
                'id' => 197 + 48,
                // 'survei' => 1,
                'question_bank_id' => 25 + 7,
                'question' => 'Apakah gurumu memberikan materi pembelajaran yang lebih baik?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 49,
                // 'survei' => 1,
                'question_bank_id' => 25 + 7,
                'question' => 'Apakah gurumu pernah menyakitimu di kelas? (sakit dalam hal ini seperti dipukul, dicubit, dll.)',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 50,
                // 'survei' => 1,
                'question_bank_id' => 25 + 7,
                'question' => 'Apakah suasana kelas nyaman saat guru menjelaskan materi pembelajaran?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 51,
                // 'survei' => 1,
                'question_bank_id' => 25 + 7,
                'question' => 'Bagaimana gurumu menjelaskan materi pembelajaran di kelas? (anda dapat memilih 1
                atau lebih)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 52,
                // 'survei' => 1,
                'question_bank_id' => 25 + 7,
                'question' => 'Dalam hal penilaian, apakah gurumu lebih baik dalam mengerjakannya?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Survei Penindasan
            [
                'id' => 197 + 53,
                // 'survei' => 1,
                'question_bank_id' => 25 + 8,
                'question' => 'Apakah anda pernah mengalami bullying dalam hidup anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 54,
                // 'survei' => 1,
                'question_bank_id' => 25 + 8,
                'question' => 'Jika ya, kapan terakhir kali anda mengalami bullying?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 55,
                // 'survei' => 1,
                'question_bank_id' => 25 + 8,
                'question' => 'Apa jenis bullying yang anda alami? (anda dapat memilih 1 atau lebih)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 56,
                // 'survei' => 1,
                'question_bank_id' => 25 + 8,
                'question' => 'Sudah berapa lama anda mengalami bullying?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 57,
                // 'survei' => 1,
                'question_bank_id' => 25 + 8,
                'question' => 'Pernahkah anda melihat bullying di sekitar anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 58,
                // 'survei' => 1,
                'question_bank_id' => 25 + 8,
                'question' => 'Menurut kamu, bullying itu wajar atau sebaliknya?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 59,
                // 'survei' => 1,
                'question_bank_id' => 25 + 8,
                'question' => 'Apakah anda mencari perlindungan atau melaporkan intimidasi yang anda alami atau merujuknya ke
                pihak berwajib? Dan bagaimana mereka bereaksi terhadap masalah anda?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        //Kepuasan karyawan
            //-->Kepuasan kerja
            [
                'id' => 197 + 60,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Seberapa senang atau tidak senang anda dengan peran anda saat ini di pekerjaan anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 61,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Seberapa baik tanggung jawab pekerjaan anda sesuai dengan kemampuan anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 62,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Kinerja pekerjaan saya dievaluasi secara adil.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 63,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Saya puas dengan keamanan kerja saya secara keseluruhan.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 64,
                // 'survei' => 1,
                'question_bank_id'=> 9 + 25 ,
                'question' => 'Saat bekerja, saya benar-benar fokus pada tugas pekerjaan saya.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 65,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Seberapa ahli dalam pekerjaan mereka para anggota (tim anda)?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 66,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Dari situs web jaringan profesional berikut mana perusahaan anda biasanya menemukan kandidat pekerjaan yang paling memenuhi syarat?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 67,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Apa peran pekerjaan anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 68,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Manakah dari berikut ini yang paling menggambarkan tingkat pekerjaan anda saat ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 69,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Seberapa puaskah gaji anda dengan apa yang telah anda capai',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 70,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Seberapa puaskah anda bonus dengan apa yang telah anda capai',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 71,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Seberapa puaskah anda dengan apa yang telah anda capai',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 72,
                // 'survei' => 1,
                'question_bank_id' => 25 + 9,
                'question' => 'Seberapa puaskah anda dengan perkembangan anda saat ini di kantor ini? Sangat tidak puas Sangat puas',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //-->Kinerja Tim
            [
                'id' => 197 + 73,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Apakah semua anggota tim anda melakukan pekerjaan sesuai dengan posisi dan tugasnya?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 74,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Secara keseluruhan, seberapa puaskah anda dengan pekerjaan semua anggota?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 75,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Menurut anda seberapa cepat tim anda akan menyelesaikan semua proyek mereka?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 76,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Seberapa jujur ​​satu sama lain anggota tim anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice','created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 77,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Seberapa efisien waktu yang dibutuhkan untuk rapat tim?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 78,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Apa kriteria anda dalam memilih tim? (anda dapat memilih 1 atau lebih)',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        //batas aman wwkwkkw

        
            [
                'id' => 197 + 79,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Apakah anda menyukai semua anggota tim ini?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 80,
                // 'survei' => 1,
                'question_bank_id' => 25 + 10,
                'question' => 'Apakah menurut anda tim anda memiliki terlalu banyak atau terlalu sedikit rapat?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            //-->Keterlibatan karyawan
            [
                'id' => 197 + 81,
                // 'survei' => 1,
                'question_bank_id' => 25 + 11,
                'question' => 'Seberapa produktif karyawan ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 82,
                // 'survei' => 1,
                'question_bank_id' => 25 + 11,
                'question' => 'Karyawan di sini bersedia menerima tugas baru sesuai kebutuhan.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 83,
                // 'survei' => 1,
                'question_bank_id' => 25 + 11,
                'question' => 'Karyawan memperlakukan satu sama lain dengan hormat.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 84,
                // 'survei' => 1,
                'question_bank_id' => 25 + 11,
                'question' => 'Mengingat peristiwa terkini, bagaimana anda memperkirakan tingkat keterlibatan anda dengan produk atau layanan perusahaan berubah di masa depan?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 85,
                // 'survei' => 1,
                'question_bank_id' => 25 + 11,
                'question' => 'Seberapa baik karyawan berbagi tanggung jawab untuk tugas?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Evaluasi karyawan
            [
                'id' => 197 + 86,
                // 'survei' => 1,
                'question_bank_id' => 25 + 12,
                'question' => 'Siapa yang ingin anda evaluasi?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 87,
                // 'survei' => 1,
                'question_bank_id' => 25 + 12,
                'question' => 'Seberapa proaktif karyawan ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 88,
                // 'survei' => 1,
                'question_bank_id' => 25 + 12,
                'question' => 'Seberapa baik keterampilan karyawan perusahaan digunakan?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 89,
                // 'survei' => 1,
                'question_bank_id' => 25 + 12,
                'question' => 'Kinerja pekerjaan saya dievaluasi secara adil.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 90,
                // 'survei' => 1,
                'question_bank_id' => 25 + 12,
                'question' => 'Komunikasi antara pemimpin senior dan karyawan baik di perusahaan saya.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 91,
                // 'survei' => 1,
                'question_bank_id' => 25 + 12,
                'question' => 'Apa kesalahan yang anda buat saat bekerja pada bulan ini?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Fasilitas Kantor
            [
                'id' => 197 + 92,
                // 'survei' => 1,
                'question_bank_id' => 25 + 13,
                'question' => 'Apakah fasilitas kantor cukup baik untuk membuat karyawan nyaman melakukan pekerjaannya?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 93,
                // 'survei' => 1,
                'question_bank_id' => 25 + 13,
                'question' => 'Apakah anda punya pendapat untuk meningkatkan fasilitas kantor anda?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 94,
                // 'survei' => 1,
                'question_bank_id' => 25 + 13,
                'question' => 'Apakah keamanan yang digunakan oleh kantor anda cukup aman?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 95,
                // 'survei' => 1,
                'question_bank_id' => 25 + 13,
                'question' => 'Sebutkan ruangan di kantor anda? (anda dapat memilih 1 atau lebih)',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 96,
                // 'survei' => 1,
                'question_bank_id' => 25 + 13,
                'question' => 'Seberapa puaskah anda dengan fasilitas yang disediakan oleh kantor anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            //Penelitian Sehat
            //-->Tes diabetes
            [
                'id' => 197 + 97,
                // 'survei' => 1,
                'question_bank_id' => 25 + 14,
                'question' => 'Saya lebih suka makan di rumah menggunakan nasi, lauk pauk, dan sayuran buatan sendiri daripada makan di tempat fast food',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 98,
                // 'survei' => 1,
                'question_bank_id' => 25 + 14,
                'question' => 'Diabetes mellitus adalah penyakit dimana terjadi peningkatan kadar gula darah di luar batas normal',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 99,
                // 'survei' => 1,
                'question_bank_id' => 25 + 14,
                'question' => 'Riwayat keluarga, obesitas, pola makan yang buruk dan kurangnya aktivitas fisik merupakan faktor pemicu diabetes',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 100,
                // 'survei' => 1,
                'question_bank_id' => 25 + 14,
                'question' => 'Mengkonsumsi minuman bersoda, sirup dan minuman manis tidak meningkatkan kadar gula darah dalam tubuh',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 101,
                // 'survei' => 1,
                'question_bank_id' => 25 + 14,
                'question' => 'Menurut anda, faktor apa saja yang mempengaruhi seseorang bisa terkena ddiabetes?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 102,
                // 'survei' => 1,
                'question_bank_id' => 25 + 14,
                'question' => 'Bagaimana cara mengurangi risiko diabetes?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Penyakit jantung
            [
                'id' => 197 + 103,
                // 'survei' => 1,
                'question_bank_id' => 25 + 15,
                'question' => 'Penyakit jantung koroner adalah penyakit jantung yang disebabkan oleh tersumbatnya pembuluh darah di otak.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 104,
                // 'survei' => 1,
                'question_bank_id' => 25 + 15,
                'question' => 'Denyut cepat adalah gejala penyakit jantung koroner.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 105,
                // 'survei' => 1,
                'question_bank_id' => 25 + 15,
                'question' => 'Jika salah satu anggota keluarga saya sesak napas, saya tunggu saja sesak napasnya berhenti mungkin tidak akan berlangsung lama.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 106,
                // 'survei' => 1,
                'question_bank_id' => 25 + 15,
                'question' => 'Kalau dada sebelah kiri sakit sampai ke leher, saya akan…',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 107,
                // 'survei' => 1,
                'question_bank_id' => 25 + 15,
                'question' => 'Ciri-ciri penyakit jantung adalah.',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Tes kepribadian
            [
                'id' => 197 + 108,
                // 'survei' => 1,
                'question_bank_id' => 25 + 16,
                'question' => 'Apakah anda merasa bergaul dengan banyak orang menguras energi anda?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 109,
                // 'survei' => 1,
                'question_bank_id' => 25 + 16,
                'question' => 'Apakah kamu bahagia saat sendirian?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 110,
                // 'survei' => 1,
                'question_bank_id' => 25 + 16,
                'question' => 'Apakah anda menyukai tantangan dengan banyak risiko?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 111,
                // 'survei' => 1,
                'question_bank_id' => 25 + 16,
                'question' => 'Jika Sabtu malam dan hujan. Apa yang kamu pikirkan?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 112,
                // 'survei' => 1,
                'question_bank_id' => 25 + 16,
                'question' => 'Jika anda di kedai kopi. Satu-satunya kursi yang tersedia adalah di depan orang asing.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 113,
                // 'survei' => 1,
                'question_bank_id' => 25 + 16,
                'question' => 'Pilih beberapa pernyataan yang menurut anda sesuai dengan kelemahan anda?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'id' => 197 + 114,
                // 'survei' => 1,
                'question_bank_id' => 25 + 16,
                'question' => 'Pilihlah beberapa pernyataan yang menurut anda sesuai dengan kekuatan anda!',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],





            //Penelitian Produk
            //-->Pengujian produk
            [
                'id' => 197 + 115,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Produk seperti apa yang anda sukai dari semua produk yang telah dipasarkan oleh toko ini?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 116,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Apa alasan anda menyukai produk seperti ini?',
                'type' => 'checkbox',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 117,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Produk apa yang tidak anda sukai dari semua produk yang telah dipasarkan oleh toko ini?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 118,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Apa reaksi pertama anda saat melihat produk ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 119,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Seberapa unik produk ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 120,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'typea anda memikirkan produk ini, apakah menurut anda produk ini dibutuhkan atau tidak?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 121,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Bagaimana penilaian anda tentang harga produk yang dijual ini? Sangat murah Sangat mahal',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 122,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Jika produk tersedia, seberapa besar kemungkinan anda akan membeli produk ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 123,
                // 'survei' => 1,
                'question_bank_id' => 25 + 17,
                'question' => 'Seberapa besar kemungkinan anda mengubah produk yang ada dengan produk ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //-->Pengujian logo
            [
                'id' => 197 + 124,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Secara keseluruhan, seberapa besar anda menyukai logo ini',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 125,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Dengan kata-kata anda sendiri, apa pesan utama dari logo yang ditunjukkan kepada anda?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 126,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,'question' => 'Seberapa dipercaya logonya?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 127,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Apa perbedaan logo dengan logo yang sudah ada?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 128,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Seberapa menarikkah logo ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 129,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Seberapa menarik logo ini?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 130,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Seberapa inovatif logo ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 131,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Berpikir tentang logo secara keseluruhan, manakah dari berikut ini yang paling menggambarkan perasaan anda tentang logo tersebut?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 132,
                // 'survei' => 1,
                'question_bank_id' => 25 + 18,
                'question' => 'Seberapa mudah anda bisa menemukan logo toko?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // -->Kesadaran Merek
            [
                'id' => 197 + 133,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Merek apa yang pertama kali muncul di benak anda tentang produk tersebut (masukkan jenis produk jenis, misalnya air mineral)?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 134,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Di antara semua opsi yang disediakan di pertanyaan sebelumnya, merek produk apa yang dimiliki anda mencoba (masukkan jenis produk anda, misalnya air mineral)?',
                'type' => 'radio',
                'question_type' => 'multiOptions',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 135,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Aspek apa yang menjadi acuan anda dalam memilih produk ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 197 + 136,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'type anda berbicara tentang merek apa yang muncul di benak anda?',
                'type' => 'text',
                'question_type' => 'textBox',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 137,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => ' Silakan urutkan berdasarkan kepentingan anda saat melihat merek produk!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 138,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => ' Silakan urutkan berdasarkan kepentingan anda saat melihat Kenyamanan produk!',
                'type' => 'radio',
                'question_type' =>'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 139,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => ' Silakan urutkan berdasarkan kepentingan anda saat melihat Diskon produk!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 140,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => ' Silakan urutkan berdasarkan kepentingan anda saat melihat Harga produk!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 141,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => ' Silakan urutkan berdasarkan kepentingan anda saat melihat Rekomendasi produk!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 142,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => ' Silakan urutkan berdasarkan kepentingan anda saat melihat Rekomendasi produk!',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 143,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Seberapa puaskah anda menggunakan merek produk ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 144,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Bila diminta menyebutkan merek produk (masukkan produk anda), (nama produk andamerek) adalah merek pertama yang muncul di benak saya.',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 145,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Merek Produk itu paling familiar dibanding merek lain',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 146,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Seberapa akrab anda dengan merek kami?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 147,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => ' Seberapa besar kemungkinan anda akan merekomendasikan produk atau layanan kami kepada teman, keluarga, kolega?',
                'type' => 'radio',
                'question_type' => 'rating',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 148,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Dalam 3 bulan terakhir, seberapa sering anda mendengar orang membicarakan merek kami?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 149,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Bagaimana persepsi anda tentang merek kami berubah dalam 3 bulan terakhir?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 150,
                // 'survei' => 1,
                'question_bank_id' => 25 + 19,
                'question' => 'Kapan terakhir kali anda menggunakan kategori produk ini?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 197 + 151,
                // 'survei' => 1,
                'question_bank_id' => 19,
                'question' => 'Kapan anda pertama kali mendengar tentang merek kami?',
                'type' => 'radio',
                'question_type' => 'multipleChoice',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                //iklan
    
                [
                    'id' => 197 + 152,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 20,
                    'question' => 'Apakah menurut anda iklan di atas menarik secara visual?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 153,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 20,
                    'question' => 'Seberapa besar kemungkinan anda membeli produk ini setelah melihat iklan ini?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 154,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 20,
                    'question' => 'Menurut anda, perusahaan seperti apa yang menawarkan layanan terkait dengan ini
                    iklan?',
                    'type' => 'text',
                    'question_type' => 'textBox',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
                [
                    'id' => 197 + 155,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 20,
                    'question' => 'Apa yang paling anda sukai dari iklan tersebut?',
                    'type' => 'text',
                    'question_type' => 'textBox',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 197 + 156,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 20,
                    'question' => 'Kata-kata apa yang muncul di benak anda saat melihat iklan tersebut?',
                    'type' => 'text',
                    'question_type' => 'textBox',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 197 + 157,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 20,
                    'question' => 'Kata-kata apa yang muncul di benak anda saat melihat iklan tersebut?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                //penelitian liburan
    
                [
                    'id' => 197 + 158,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Seberapa sering kamu pergi liburan?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 159,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Berapa banyak yang anda habiskan untuk liburan?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 160,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Apa benua yang ingin anda kunjungi?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 161,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Tempat liburan favoritmu kemana?',
                    'type' => 'text',
                    'question_type' => 'textBox',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 162,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Perjalanan seperti apa yang sering kamu lakukan?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 163,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Dari mana sumber informasi yang biasa anda dapatkan untuk mencari tempat liburan?',
                    'type' => 'radio',
                    'tipe pertanyaan'=> 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 164,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Apakah anda pernah menggunakan agen perjalanan untuk mengurus liburan anda?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 165,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Menurut anda, seberapa pentingkah mengatur pengeluaran saat memilih tempat liburan?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 166,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Tipe penginapan seperti apa yang menurut anda bisa membuat anda nyaman saat berlibur? (pilih 1 atau lebih)',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 167,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 21,
                    'question' => 'Peralatan apa yang ingin kamu bawa?',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
    
                //survei suasana hati
                [
                    'id' => 197 + 168,
                    // 'survei' => 1,
                    'question_bank_id' => 22 + 25,
                    'question' => 'Bagaimana suasana hati anda saat ini?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 169,
                    // 'survei' => 1,
                    'question_bank_id' => 22 + 25,
                    'question' => 'Dalam setiap hari, seberapa sering mood anda berubah?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 170,
                    // 'survei' => 1,
                    'question_bank_id' => 22 + 25,
                    'question' => 'Apakah kamu tipe orang yang sering menggunakan barang untuk melampiaskan bad mood?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 171,
                    // 'survei' => 1,
                    'question_bank_id' => 22 + 25,
                    'question' => 'Apa penyebab mood mu yang biasanya buruk?',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 172,
                    // 'survei' => 1,
                    'question_bank_id' => 22 + 25,
                    'question' => 'Siapa yang biasanya bisa mengubah mood kamu menjadi lebih baik?',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 173,
                    // 'survei' => 1,
                    'question_bank_id' => 22 + 25,
                    'question' => 'Bagaimana cara mengatasi bad mood?',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                //menonton film
    
                [
                    'id' => 197 + 174,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Berapa usia anda sekarang?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 175,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Apa genre film yang ingin kamu tonton?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                
                [
                    'id' => 197 + 176,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Seberapa sering kamu menonton filmbersaing dalam satu hari?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 177,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Di mana anda biasanya menonton film?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 178,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Dalam setiap hari, berapa lama waktu yang anda habiskan untuk menonton film?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 179,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Secara keseluruhan film yang anda tonton, mana film favorit anda?',
                    'type' => 'text',
                    'question_type' => 'textBox',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                 [
                    'id' => 197 + 180,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Dalam setiap hari, seberapa besar kemungkinan anda menonton film?',
                    'type' => 'radio',
                    'question_type' => 'rating',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 181,
                    // 'survei' => 1,
                    'question_bank_id' => 23 + 25,
                    'question' => 'Subtitle apa yang sering kamu gunakan?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                //menonton TV
    
                [
                    'id' => 197 + 182,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Apa jenis kelamin anda?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                
                [
                    'id' => 197 + 183,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Berapa usia anda sekarang?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                
                [
                    'id' => 197 + 184,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Seberapa sering anda menonton TV setiap hari?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                 
                [
                    'id' => 197 + 185,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Apakah anda menonton TV secara online?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 197 + 186,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Apakah anda menyukai program serial?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
    
                [
                    'id' => 197 + 187,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Menurut anda, bagaimana perkembangan program televisi yang tayang saat ini?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 188,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Jenis acara televisi apa yang sering anda tonton?',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 189,
                    // 'survei' => 1,
                    'question_bank_id' => 24 + 25,
                    'question' => 'Bagaimana perasaan anda saat menonton acara televisi tersebut?','type' => 'radio',
                    'question_type' => 'rating',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
    
                //Kebiasaan media sosial
                [
                    'id' => 197 + 190,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Jenis media sosial apa yang sering anda gunakan?',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 191,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Di antara jenis media sosial pada pertanyaan sebelumnya, menurut anda, apa
                    aplikasi media sosial yang sering kamu gunakan?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
    
                [
                    'id' => 197 + 192,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Seberapa sering anda menggunakan media sosial?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 197 + 193,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Apakah media sosial dapat membantu anda dalam melakukan aktivitas sosial?',
                    'type' => 'radio',
                    'question_type' => 'rating',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
                [
                    'id' => 197 + 194,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Seberapa puas media sosial untuk hidupmu?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 197 + 195,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Menurut anda, apa manfaat media sosial dalam hidup anda?',
                    'type' => 'checkbox',
                    'question_type' => 'multiOptions',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 197 + 196,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Apakah media sosial bisa menjadi pengaruh buruk dalam kehidupan sehari-hari?',
                    'type' => 'radio',
                    'question_type' => 'multipleChoice',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'id' => 197 + 197,
                    // 'survei' => 1,
                    'question_bank_id' => 25 + 25,
                    'question' => 'Apa alasan anda menjawab pertanyaan tentang pengaruh media sosial
                    sebelum?',
                    'type' => 'text',
                    'question_type' => 'textBox',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
        ]); */
    }
}

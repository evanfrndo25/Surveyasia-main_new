<?php

namespace App\Action;

use App\Http\Requests\CreateSurveyQuestionRequest;
use App\Models\Question;
use App\Models\QuestionsOption;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CreateSurveyQuestionAction
{
    public function execute(CreateSurveyQuestionRequest $request)
    {
        # code...
        $questions = $request->questions;
        $type = $request->question_type;
        if ($request->has('options')) {
            # code...
            $options = $request->options;
        }

        // dd($request);

        foreach ($questions as $key => $value) {
            # code...
            $question = [
                'survey_id' => $request->survey_id,
                'question' => $value
            ];

            $questionOptions = null;

            if ($type[$key] == QuestionsOption::TYPE_TEXTFIELD) {
                # code...
                $question['question_type'] = 'Textbox';
                $question['has_options'] = 'no';
                $question['multi_answers'] = 'no';

                $createQuestion = Question::create($question);
            } elseif ($type[$key] == QuestionsOption::TYPE_CHECKBOX) {
                $question['question_type'] = 'Checkbox';
                $question['has_options'] = 'yes';
                $question['multi_answers'] = 'yes';

                $createQuestion = Question::create($question);

                foreach ($options as $skey => $svalue) {
                    # code...
                    if ($key == $skey && $svalue != null) {
                        # code...
                        for ($i = 0; $i < count($svalue); $i++) {
                            # code...
                            $questionOptions = [
                                'question_id' => $createQuestion->id,
                                'value' => $svalue[$i]
                            ];


                            QuestionsOption::create($questionOptions);
                        }
                    }
                }
            } elseif ($type[$key] == QuestionsOption::TYPE_RADIO) {
                $question['question_type'] = 'Multiple Choice';
                $question['has_options'] = 'yes';
                $question['multi_answers'] = 'no';

                $createQuestion = Question::create($question);

                foreach ($options as $skey => $svalue) {
                    # code...
                    if ($key == $skey) {
                        # code...
                        for ($i = 0; $i < count($svalue); $i++) {
                            # code...
                            $questionOptions = [
                                'question_id' => $createQuestion->id,
                                'value' => $svalue[$i]
                            ];


                            QuestionsOption::create($questionOptions);
                        }
                    }
                }
            } elseif ($type[$key] == QuestionsOption::TYPE_DROPDOWN) {
                $question['question_type'] = 'Dropdown';
                $question['has_options'] = 'yes';
                $question['multi_answers'] = 'no';

                $createQuestion = Question::create($question);

                foreach ($options as $skey => $svalue) {
                    # code...
                    if ($key == $skey) {
                        # code...
                        for ($i = 0; $i < count($svalue); $i++) {
                            # code...
                            $questionOptions = [
                                'question_id' => $createQuestion->id,
                                'value' => $svalue[$i]
                            ];
                            QuestionsOption::create($questionOptions);
                        }
                    }
                }
            } else {
                return back()->with('error', 'Question Type not specified');
            }
        }

        return redirect('/')->with('survey.create.success', 'Survey created successfully');
    }

    public function alternate(CreateSurveyQuestionRequest $request)
    {
        # code...
        // dd($request);
        // if (!$request->validated()) {
        //     return back();
        // }

        $questionsJson = $request->questions;
        $surveyId = $request->survey_id;
        // $questions = array();
        
        if( !$questionsJson || !$surveyId) {
            throw new Exception(
                'Terdapat kesalahan pada pertanyaan Anda, silahkan cek kembali'
            );
        }

        // check if there is any deleted question
        if ($request->has('deleted')) {
            $deleted = json_decode($request->deleted);

            // deleted question
            foreach ($deleted->components as $deletedQuestion) {
                # code...
                $trash = Question::find($deletedQuestion);
                if ($trash != null) {
                    $trash->delete();
                }
            }

            // deleted media
            foreach ($deleted->media as $deletedMedia) {
                # code...
                // make sure if the user is match and correct
                $match = Str::contains($deletedMedia, Str::kebab($request->user()->nama_lengkap));
                $storagePath = strlen(config('app.url') . '/storage/');
                if ($match) {
                    // delete file if exists
                    Storage::disk('public')->delete(substr($deletedMedia, $storagePath));
                }
            }

            // deleted options
            /* foreach ($deleted->options as $deletedOption) {
                # code...
                $trash = QuestionsOption::find($deletedOption);
                if ($trash != null) {
                    $trash->delete();
                }
            } */
        }

        foreach ($questionsJson as $item) {
            # code...
            // decode data from JSON to accessible object
            $questionObj = json_decode($item);
            // array_push($questions, $questionObj);

            // create a question or update if exists
            $question = Question::updateOrCreate(
                ['id' => property_exists($questionObj, 'id') ? $questionObj->id : null],
                [
                    'survey_id' => $surveyId,
                    'question' => $questionObj->question,
                    'configuration' => $item //store JSON string
                ]
            );

            // options will not be stored in database
            // if there is options
            /* if (property_exists($questionObj, 'options')) {
                foreach ($questionObj->options as $option) {
                    # create options or update if exists
                    QuestionsOption::updateOrCreate(
                        ['id' => property_exists($option, 'id') ? $option->id : null],
                        [
                            'question_id' => $question->id,
                            'value' => property_exists($option, 'value') ? $option->value : $option
                        ]
                    );
                }
            } */
        }
        return true;
    }
}

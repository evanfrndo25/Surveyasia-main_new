<?php

namespace App\Action;

use App\Models\Question;
use App\Models\QuestionsOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateQuestionBankAction
{
    // deprecated (don't use this)
    public function execute(Request $request)
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
                'questionbank_id' => $request->questionbank_id,
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

        return redirect('/')->with('admin.questionbank.show', 'Question bank created successfully');
    }

    public function alternate(Request $request)
    {
        # code...
        $questionsJson = $request->questions;
        $questionbankId = $request->questionbank_id;
        // $questions = array();

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

            // deleted options
            foreach ($deleted->options as $deletedOption) {
                # code...
                $trash = QuestionsOption::find($deletedOption);
                if ($trash != null) {
                    $trash->delete();
                }
            }
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
                    'question_bank_id' => $questionbankId,
                    'question' => $questionObj->question,
                    'type' => $questionObj->type,
                    'question_type' => $questionObj->questionType
                ]
            );


            // if there is options
            if (property_exists($questionObj, 'options')) {
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
            }
        }

        return redirect('admin.questionbank.index')->with('success', 'Questions added to your survey');
    }
}

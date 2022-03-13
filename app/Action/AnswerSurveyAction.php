<?php

namespace App\Action;

use App\Http\Requests\Survey\AnswerQuestionsRequest;
use App\Models\Answer;
use App\Models\QuestionsOption;
use App\Models\Survey;
use App\Models\UsersSurvey;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AnswerSurveyAction
{

    // deprecated (don't use this)
    public function execute(AnswerQuestionsRequest $request)
    {
        # code...
        $questionType = $request->question_type;
        $answers = $request->answer;
        $surveyId = $request->survey_id;
        $respondent = $request->user();


        foreach ($answers as $key => $value) {
            # code...
            $answer = [
                'question_id' => $key,
                'respondent_id' => $respondent->id
            ];

            if ($questionType[$key] == QuestionsOption::TYPE_TEXTFIELD) {
                $answer['answer'] = $value;
            } elseif ($questionType[$key] == QuestionsOption::TYPE_CHECKBOX) {
                $answer['answer'] = implode(", ", $value);
            } elseif ($questionType[$key] == QuestionsOption::TYPE_RADIO) {
                $answer['answer'] = $value;
            } elseif ($questionType[$key] == QuestionsOption::TYPE_DROPDOWN) {
                $answer['answer'] = $value;
            }


            if (!Answer::create($answer)) {
                return false;
            }
        }


        return true;
    }

    public function alternate(AnswerQuestionsRequest $request)
    {
        # code...
        // dd($request);

        // $time = date('H:i:s', $request->time_elapsed * 60)

        $answers = $request->answers;
        $user = $request->user();
        $time = $request->time_elapsed;

        // track user survey history
        UsersSurvey::create([
            'user_id' => $request->user()->id,
            'survey_id' => $request->survey_id,
            // 'time_elapsed' => $time,
            'user_ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            // 'questions_answered' => $request->total_question
        ]);

        foreach ($answers as $questionId => $answer) {
            # code...

            // ignore not answered question
            if ($answer == null) {
                continue;
            }

            $userAnswer = [
                'question_id' => $questionId,
                'respondent_id' => $user->id,
                'answer' => is_array($answer) ? implode(', ', $answer) : $answer
            ];

            Answer::create($userAnswer);
        }

        // check if the request is file
        if ($request->hasFile('answers')) {
            // get creator instance
            $creator = json_decode($request->creator);

            // get request as files (always array)
            $files = $request->file('answers');

            // loop each files
            foreach ($files as $key => $file) {
                # code...
                // make sure the file is valid and uploaded
                if ($file->isValid()) {
                    $survey = Survey::where(['id' => $request->survey_id])->first();
                    // store the file in creator's disk
                    // will create if not exists
                    // (should) unique path
                    $path = 'users/' . Str::kebab($creator->name) . '/' . Str::snake($survey->survey_title);

                    // store the file to specified storage
                    $path = $file->store($path);

                    // update filename
                    $answer = Answer::where(
                        [
                            'question_id' => $key,
                            'respondent_id' => $user->id
                        ]
                    )->update(['answer' => $path]);
                }
            }
        }

        // increase a number of attempted respondent in survey table
        $survey = Survey::where(['id' => $request->survey_id])->first();
        $survey->increment('attempted');

        return true;
    }
}

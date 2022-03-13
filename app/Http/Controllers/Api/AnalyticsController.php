<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SurveyResource;
use App\Models\Answer;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    public function surveyAnalytics(Request $request, Survey $survey)
    {
        $resultData = $survey->questions()
            ->select(['question', 'id'])
            ->get();
        $jsonize = $this->toJson($resultData);

        $data = [
            'survey' => new SurveyResource($survey),
            'data' => $jsonize
        ];

        return json_encode($data);
    }

    private function toJson($data)
    {
        # code...
        $result = $data;

        $index = 0;
        foreach ($data as $value) {
            # code...
            // retrieve answers
            $answers = Answer::select(DB::raw(' answer as x, COUNT(answer) as y'))
                ->where('question_id', '=', $value->id)
                ->groupBy('answer')
                // ->groupBy('respondent_id')
                ->get();

            $result[$index]['data'] = $answers;
            $index++;
        }

        return $result;
    }
}

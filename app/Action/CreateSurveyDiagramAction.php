<?php

namespace App\Action;

use App\Http\Requests\CreateSurveyDiagramRequest;
use App\Models\QuestionChartConfiguration;
use Illuminate\Support\Facades\DB;
use stdClass;

class CreateSurveyDiagramAction
{
    public function execute(CreateSurveyDiagramRequest $request)
    {
        # code...
        $surveyId = $request->survey_id;
        $configurations = $request->configurations;

        foreach ($configurations as $value) {
            # code...
            $config = json_decode($value);

            // dd($config);

            /* DB::table('question_chart_configuration')
            ->upsert([
                'question_id' => $config->id,
                'chart_id' => 1, //temporary
                'config' => json_encode($config->config)
            ],['id' => ]); */
            QuestionChartConfiguration::updateOrCreate(
                [
                    'id' => property_exists($config, 'id') ? $config->id : null,
                    'question_id' => property_exists($config, 'questionId') ? $config->questionId : null
                ],
                [
                    'question_id' => $config->questionId,
                    'chart_id' => 1, //temporary
                    'config' => is_object($config->config) ? json_encode($config->config) : $config->config,
                ]
            );
        }
    }
}

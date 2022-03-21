<?php

namespace App\Action;

use App\Http\Requests\CreateSurveyRequest;
use App\Models\Survey;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateSurveyAction
{
    public function execute(CreateSurveyRequest $request)
    {
        # code...
        $estimateCompletion = $request->estimate_completion;
        $maxAttempt = $request->max_attempt == null ? 40 : $request->max_attempt;
        $shareable = $request->has('shareable') ? 1 : 0;
        $reward = $request->reward_point == null ? 0 : $request->reward_point;
        $category = $request->category_id;

        $survey = Survey::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'category_id' => $category,
            'shareable' => $shareable,
            'signature' => Str::random(4).$request->title,
            'slug' => Str::slug($request->title, '-'),
            'max_attempt' => $maxAttempt,
            'estimate_completion' => $estimateCompletion,
            'reward_point' => $reward
        ]);

        if (!$survey) {
            return redirect()->back()->withErrors('Internal Server Error');
        }

        return redirect()->back()->with(['surveys.success', 'Survey Created!']);
    }
}
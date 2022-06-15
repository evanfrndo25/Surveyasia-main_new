<?php

namespace App\Http\Controllers\Respondent;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SurveyHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $user = Auth::user();

        // get surveys history with query
        $histories = DB::table('users_surveys')
        ->select(
            'users_surveys.id', 
            'users_surveys.created_at as users_surveys_createdAt', 
            'users_surveys.updated_at as users_surveys_updatedAt', 
            'surveys.reward_point', 
            'surveys.title'
        )
        ->join('surveys', 'users_surveys.survey_id', 'surveys.id')
        ->where('users_surveys.user_id', $user->id)
        ->orderBy('users_surveys.created_at', 'desc')
        ->get();

        return view('survey.history',[ 'histories' => $histories ]);
    }
}

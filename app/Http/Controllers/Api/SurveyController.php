<?php

namespace App\Http\Controllers\Api;

use App\Models\Survey;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSurveyRequest;
use App\Http\Resources\SurveyResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SurveyResource::collection(
            Survey::with(['questions', 'user', 'user_id', 'options'])
                ->where('status', '=', Survey::STATUS_ACTIVE) // hide unpublished survey
                ->where('user_id', '!=', Auth::id()) // hide owned survey
                ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSurveyRequest $request)
    {
        //
        $survey = Survey::create($request->validated());

        return new SurveyResource($survey);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //
        return new SurveyResource(
            $survey
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSurveyRequest $request, Survey $survey)
    {
        //
        $survey->update($request->validated());

        return new SurveyResource($survey);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
        return response()->json(
            $survey->delete(),
            200
        );
    }
}

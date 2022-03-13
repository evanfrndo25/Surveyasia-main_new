<?php

namespace App\Http\Controllers\Api;

use App\Models\QuestionBankSubTemplate;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateQuestionBankSubTemplateRequest;
use App\Http\Resources\QuestionBankSubTemplateResource;
use Illuminate\Http\Request;

class QuestionBankSubTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return QuestionBankSubTemplateResource::collection(QuestionBankSubTemplate::with(['questions', 'user', 'options'])->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $QuestionBankSubTemplate = QuestionBankSubTemplate::create($request->validated());

        return new QuestionBankSubTemplateResource($QuestionBankSubTemplate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionBankSubTemplate  $QuestionBankSubTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionBankSubTemplate $subtemplate)
    {
        //
        return new QuestionBankSubTemplateResource(
            QuestionBankSubTemplate::with('questions')
                ->where('id', '=', $subtemplate->id)
                ->first()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuestionBankSubTemplate  $QuestionBankSubTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionBankSubTemplate $QuestionBankSubTemplate)
    {
        //
        $QuestionBankSubTemplate->update($request->validated());

        return new QuestionBankSubTemplateResource($QuestionBankSubTemplate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionBankSubTemplate  $QuestionBankSubTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionBankSubTemplate $QuestionBankSubTemplate)
    {
        //
        return response()->json(
            $QuestionBankSubTemplate->delete(),
            200
        );
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Survey;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\SurveyCategory;
use App\Action\CreateSurveyAction;
use App\Http\Controllers\Controller;
use App\Models\QuestionBankTemplate;
use Illuminate\Support\Facades\Auth;
use App\Models\QuestionBankSubTemplate;
use App\Action\CreateSurveyQuestionAction;
use App\Http\Requests\CreateSurveyRequest;
use App\Http\Requests\CreateSurveyQuestionRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $title = "Survey";
    public function index()
    {
        // Conventional
        // $user = Auth::user();
        // $surveys = Survey::where(['creator_id' => $user->id])->get();

        // Relational
        $surveys = Survey::with('user')->latest()->paginate(10);
        // dd($surveys);
        // $surveys = Auth::user()->surveys;

        // $user = Auth::user();

        $data = [
            'title' => $this->title,
            'surveys' => $surveys,
            // 'user' => $user,
            'categories' => SurveyCategory::select(['id', 'name'])->get()
        ];
        
        return view('admin.survey.index', $data);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSurvey(CreateSurveyRequest $request)
    {
        //
        if (!$request->user()->can('create', Survey::class)) {
            # code...
            abort(403, 'Unauthorized');
        }

        $action = new CreateSurveyAction();
        return $action->execute($request);
    }

    public function storeQuestions(CreateSurveyQuestionRequest $request)
    {
        $action = new CreateSurveyQuestionAction();
        $action->alternate($request);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function showSurveyDetails(Survey $survey)
    {
        //
        return view('researcher.preview', compact('survey'));
    }

    public function surveyManagement(Survey $survey)
    {
        $questionbank_templates = QuestionBankTemplate::get();
        $questionbank_sub_templates = QuestionBankSubTemplate::with('template')->get();
        $questions = Question::all();

        $data = [
            'url' => route('surveys.show', $survey),
            'survey' => $survey,
            'questionbank_templates' => $questionbank_templates,
            'questionbank_sub_templates' => $questionbank_sub_templates,
            'questions' => $questions,
        ];

        return view('researcher.create-survey', $data);
    }

    public function customizeDiagram(Survey $survey)
    {
        $data = [
            'survey' => $survey,
        ];

        return view('researcher.customize-diagram', $data);
    }

    public function collectRespondent(Survey $survey)
    {
        // create shareable link if not exists or expired
        if ($survey->link_expired_at == null || $survey->isLinkExpired() || $survey->shareable_link == null) {
            // generate temporary signed URL (expirable) 40 minutes of expiration
            $survey->createShareableLink(40, Survey::STATUS_ACTIVE, true);
        }

        return view('researcher.collect-respondent', ['survey' => $survey]);
    }

    public function statusSurvey(Survey $survey)
    {
        $data = [
            'survey' => $survey,
        ];

        return view('researcher.status-survey', $data);
    }

    public function showReport(Survey $survey)
    {
        $questions = $survey->questions;

        $data = [
            'survey' => $survey,
            'questions' => $questions,
            'url' => route('api.analytics.show', $survey->id)
        ];

        return view('researcher.report', $data);
    }

    // public function search(Request $request)
    // {
    //     $surveys = Auth::user()->surveys();
    //     if (request('search')) {
    //         $surveys->where('title', 'like', '%' . request('search') . '%');
    //     }
    //     return view('researcher/dashboard', [
    //         "surveys" => $surveys->get()
    //     ]);
    // }

    public function destroy(Survey $survey)
    {
        $survey->delete();
        return back()->with('status', 'Deleted Survey success');
    }
}

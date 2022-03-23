<?php

namespace App\Http\Controllers\Survey;

use App\Models\Survey;
use App\Models\Question;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Exports\SurveyExport;
use App\Models\SurveyCategory;
use App\Action\CreateSurveyAction;
use App\Models\UsersSubscriptions;
use App\Http\Controllers\Controller;
use App\Models\CategorySubcriptions;
use App\Models\QuestionBankTemplate;
use Illuminate\Support\Facades\Auth;
use App\Models\QuestionBankSubTemplate;
use App\Action\CreateSurveyDiagramAction;
use App\Action\CreateSurveyQuestionAction;
use App\Http\Requests\CreateSurveyRequest;
use App\Http\Requests\CreateSurveyDiagramRequest;
use App\Http\Requests\CreateSurveyQuestionRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use PDF;

class SurveyController extends Controller
{
    /**
     * used to set current link
     */
    protected $current;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showUserSurvey()
    {
        // Conventional
        // $user = Auth::user();
        // $surveys = Survey::where(['creator_id' => $user->id])->get();

        // Relational
        $surveys = Auth::user()->surveys;
        $user = Auth::user();

        // Pricing Modal
        $subcriptions = Subscription::get();
        $categorySubscription = CategorySubcriptions::get();
        $userSubscription = UsersSubscriptions::where('user_id', Auth::user()->id)->value('category_id');

        $data = [
            'surveys' => $surveys,
            'user' => $user,
            'categories' => SurveyCategory::select(['id', 'name'])->get(),
            'subcriptions' => $subcriptions,
            'categorySubscription' => $categorySubscription,
            'userSubscription' => $userSubscription,
        ];

        return view('researcher.dashboard', $data);
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

    public function destroy($id)
    {
        Survey::find($id)->delete();
        return back();
    }

    public function storeQuestions(CreateSurveyQuestionRequest $request)
    {
        $action = new CreateSurveyQuestionAction();
        return $action->alternate($request);
    }

    public function storeDiagrams(CreateSurveyDiagramRequest $request, Survey $survey)
    {
        # code...
        $action = new CreateSurveyDiagramAction();
        $action->execute($request);
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
        $questionbank_sub_templates = QuestionBankSubTemplate::with(['template', 'questions'])->where('status', '=', 1)->get();
        $questions = Question::all();
        $this->current = "manage";

        $data = [
            'url' => route('surveys.show', $survey),
            'survey' => $survey,
            'questionbank_templates' => $questionbank_templates,
            'questionbank_sub_templates' => $questionbank_sub_templates,
            'questions' => $questions,
            'current' => $this->current
        ];

        return view('researcher.create-survey', $data);
    }

    public function customizeDiagram(Survey $survey)
    {
        $this->current = "diagram";

        // replace this with real data
        $charts = [
            [
                'library_name' => 'AnyChart',
                'chart_list' => [
                    [
                        'name' => 'Bar Chart',
                        'code' => 'any_bar'
                    ],
                    [
                        'name' => 'Line Chart',
                        'code' => 'any_line'
                    ],
                    [
                        'name' => 'Pie Chart',
                        'code' => 'any_pie'
                    ],
                    [
                        'name' => 'Tag Cloud Chart',
                        'code' => 'any_tag_cloud'
                    ],
                ],
            ],
            [
                'library_name' => 'DevExpress',
                'chart_list' =>  [
                    [
                        'name' => 'Bar Chart',
                        'code' => 'dev_bar'
                    ],
                    [
                        'name' => 'Line Chart',
                        'code' => 'dev_line'
                    ],
                    [
                        'name' => 'Pie Chart',
                        'code' => 'dev_pie'
                    ],
                    [
                        'name' => 'Doughnut Chart',
                        'code' => 'dev_doughnut'
                    ],
                ],
            ],
            // [
            //     'library_name' => 'ChartJS',
            //     'chart_list' =>  [
            //         [
            //             'name' => 'Bar Chart',
            //             'code' => 'cjs_bar'
            //         ],
            //         [
            //             'name' => 'Line Chart',
            //             'code' => 'cjs_line'
            //         ],
            //         [
            //             'name' => 'Pie Chart',
            //             'code' => 'cjs_pie'
            //         ],
            //         [
            //             'name' => 'Doughnut Chart',
            //             'code' => 'cjs_doughnut'
            //         ],
            //     ],
            // ],
        ];

        $data = [
            'survey' => $survey,
            'questions' => $survey
                ->questions()
                ->with(['options', 'chartConfig'])
                ->get([
                    'id',
                    'question',
                    'configuration',
                ]),
            'charts' => $charts,
            'current' => $this->current,
        ];

        // dd($data['questions']);

        return view('researcher.customize-diagram-test', $data);
    }

    public function collectRespondent(Survey $survey)
    {
        $this->current = "collect";
        // create shareable link if not exists or expired
        if ($survey->link_expired_at == null || $survey->isLinkExpired() || $survey->shareable_link == null) {
            // generate temporary signed URL (expirable) 40 minutes of expiration
            $survey->createShareableLink(40, Survey::STATUS_ACTIVE, true);
        }

        return view('researcher.collect-respondent', [
            'survey' => $survey,
            'current' => $this->current,
        ]);
    }

    public function statusSurvey(Survey $survey)
    {
        $this->current = "status";
        $data = [
            'survey' => $survey,
            'current' => $this->current,
        ];

        return view('researcher.status-survey', $data);
    }

    public function showReport(Survey $survey)
    {
        $questions = $survey->questions;
        $this->current = "report";

        $data = [
            'survey' => $survey,
            'questions' => $questions,
            'url' => route('api.analytics.show', $survey->id),
            'current' => $this->current,
        ];

        return view('researcher.report', $data);
    }

    /* public function search(Request $request)
    {
        $surveys = Auth::user()->surveys();
        if (request('search')) {
            $surveys->where('title', 'like', '%' . request('search') . '%');
        }
        return view('researcher/dashboard', [
            "surveys" => $surveys->get()
        ]);
    } */

    public function export_excel()
    {
        return Excel::download(new SurveyExport, 'answer.xlsx');
    }

    public function answeExportPdf(Request $request)
    {
        $data = $request->dataChart;
        // return view('pdf-tmp', compact('data'));
        // dd($data);
        $pdf = PDF::loadView('pdf-tmp', compact('data'));
        return $pdf->stream();
        // return $pdf->download('chart-export.pdf');
    }
}

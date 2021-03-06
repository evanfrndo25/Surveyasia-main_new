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
use App\Models\Chart;
use Exception;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
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

    // Update survey judul
    public function update(Request $request, $id)
    {
        // $title = $request->input('title');
        // $description = $request->input('description');

        Survey::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'closing' => $request->closing,
        ]);

        return redirect()->back();

        // $data           = Survey::find($id);
        // $data->title    = $request->title;
        // $data->description  = $request->description;
        // $data->save();

        // return redirect('/{survey}/manage');
    }


    // Update survey Logo
    public function updateLogo(Request $request, $id)
    {
        Survey::find($id)->update([
            'logo' => $request->logo
        ]);

        $data = Survey::findOrFail($id);

        if ($request->file('logo')) {
            if ($data->logo && file_exists(storage_path('app/public') . $data->logo)) {
                Storage::delete('public/' . $data->logo);
            }
            $file = $request->file('logo')->store('logo_survey', 'public');
            $data->logo = $file;
        }

        $data->save($request->all());
        return redirect()->back();
    }

    // Update survey background
    public function updateBackground(Request $request, $id)
    {
        Survey::find($id)->update([
            'background' => $request->background
        ]);

        $data = Survey::findOrFail($id);

        if ($request->file('background')) {
            if ($data->background && file_exists(storage_path('app/public') . $data->background)) {
                Storage::delete('public/' . $data->background);
            }
            $file = $request->file('background')->store('bg_survey', 'public');
            $data->background = $file;
        }

        $data->save($request->all());
        return redirect()->back();
    }

    // Update survey Header
    public function updateHeader(Request $request, $id)
    {
        Survey::find($id)->update([
            'img_header' => $request->img_header
        ]);

        $data = Survey::findOrFail($id);

        if ($request->file('img_header')) {
            if ($data->img_header && file_exists(storage_path('app/public') . $data->img_header)) {
                Storage::delete('public/' . $data->img_header);
            }
            $file = $request->file('img_header')->store('headers', 'public');
            $data->img_header = $file;
        }

        $data->save($request->all());
        return redirect()->back();
    }


    public function storeQuestions(CreateSurveyQuestionRequest $request)
    {
        try {
            // save question
            $action = new CreateSurveyQuestionAction();
            $action->alternate($request);
            
            // change status survey to Pending
            $surveyId = $request->survey_id;
            Survey::where('id', $surveyId)->update(
                ['status' => 'pending', 'reason_deny' => null]
            );

            // redirect with success message
            return redirect()->route('researcher.surveys.index')->with('success', 'Survey Anda sedang ditinjau oleh Admin, Mohon menunggu peninjauan akan dilakukan maksimal 2x24 jam');
        } catch (Exception $e) {
            abort(400, $e->getMessage());
        }
    }

    public function storeDraftQuestions(CreateSurveyQuestionRequest $request)
    {
        try {
            // save question
            $action = new CreateSurveyQuestionAction();
            $action->alternate($request);

            // change status survey to Draft
            $surveyId = $request->survey_id;
            Survey::where('id', $surveyId)->update(
                ['status' => 'draft']
            );
            
            // redirect with success message
            return redirect()->back()->with('success', 'Survey berhasil disimpan sebagai Draft');
        } catch (Exception $e) {
            abort(400, $e->getMessage());
        }
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
        // mapper() digunakan untuk memformat data
        // dengan ketentuan nama, tipe, deskripsi, dan gambar
        function mapper($datas) {
            $result = array();
            foreach ($datas as  $data) {
                $result[] = [
                    'name' => $data->name,
                    'code' => $data->type,
                    'description' => $data->description,
                    'image' => $data->image
                ];
            }
            return $result;
        }

        $this->current = "diagram";

        // AnyChart
        $chart_any = [
            'library_name' => 'AnyChart',
            'chart_list' => mapper(Chart::where('library_from', 'AnyChart')->get())
        ];

        # ChartJS masih bug di bagian website surveynya
        // $chart_cjs = [
        //     'library_name' => 'Chart JS',
        //     'chart_list' => mapper(Chart::where('library_from', 'Chart JS')->get())
        // ];

        // DevChart
        $chart_dev = [
            'library_name' => 'DevExpress',
            'chart_list' => mapper(Chart::where('library_from', 'DevExpress')->get())
        ];

        $charts = array_merge([$chart_any], [$chart_dev]);
        // $charts = array_merge([$chart_any], [$chart_cjs], [$chart_dev]);


        // replace this with real data
        // charts_backup hanyalah contoh 'data charts' yang dikirim ke views
        $charts_backup = [
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
            $survey->createShareableLink(40, Survey::STATUS_ACTIVE, true);  //  Survey::STATUS_ACTIVE tidak berarti apa-apa
        }

        // change url without signature :: http://localhost:3000/survey/
        $arrayUrl = explode('/', $survey->shareable_link);
        array_pop($arrayUrl);
        $survey->url_origin = implode('/', $arrayUrl).'/';

        return view('researcher.collect-respondent', [
            'survey' => $survey,
            'current' => $this->current,
        ]);
    }

    public function statusSurvey(Survey $survey)
    {
        $questions = $survey->questions;
        $this->current = "status";
        $data = [
            'survey' => $survey,
            'questions' => $questions,
            'current' => $this->current,
        ];

        return view('researcher.status-survey', $data);
    }

    public function showReport(Survey $survey)
    {
        $this->current = "report";
        $questions = $survey->questions;
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

    public function exportPdf(Survey $survey)
    {
        $questions = $survey->questions;
        $this->current = "report";

        $data = [
            'survey' => $survey,
            'questions' => $questions,
            'url' => route('api.analytics.show', $survey->id),
            'current' => $this->current,
        ];

        return view('researcher.export-pdf', $data);
    }
}

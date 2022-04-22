<?php

namespace App\Http\Controllers\Respondent;

use App\Models\News;
use App\Models\Survey;
use App\Models\Question;
use App\Models\SurveyToken;
use Illuminate\Http\Request;
use App\Models\SurveyCategory;
use App\Action\AnswerSurveyAction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Requests\Survey\AnswerQuestionsRequest;

class SurveyController extends Controller
{
    //
    public function dashboard()
    {
        $surveys = $surveys = Survey::whereDoesntHave('record', function (Builder $query) {
            $query->where('user_id', '=', Auth::id());
        })
            ->select(['title', 'id', 'slug', 'user_id',  'shareable_link', 'updated_at'])
            ->where('status', '=', Survey::STATUS_ACTIVE)
            ->get();

        $data = [
            'surveys' => $surveys,
            'count' => $surveys->count(),
            'newsList' => News::latest()->paginate(4),
        ];

        // $record = Survey::doesntHave('record')->get();

        return view('respondent.dashboard', $data);
    }

    public function showNews(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function details(Survey $survey)
    {
        session_start();
        $_SESSION["survey_id"] = $survey->id;
        return view('respondent.survey.details', compact('survey'));
    }

    public function start(AnswerQuestionsRequest $request)
    {
        $this->authorize('verifiedByAdmin');

        $action = new AnswerSurveyAction();
        $insert = $action->alternate($request);

        abort_if(!$insert, 403, 'Bad request');

        $survey = Survey::select(['id', 'title', 'slug'])
            ->where(['id' => $request->survey_id])
            ->first();

        return redirect()->route('survey.complete', $survey->slug);
    }

    /**
     * Get questions list of survey
     * @param int $id - Survey ID
     * @return
     */
    public function questions(Survey $survey)
    {
        session_start();

        $this->authorize('verifiedByAdmin');

        # code...
        $generateUrl = route('surveys.show', $survey);
        $data = [
            'url' => $generateUrl,
            'survey' => $survey
        ];

        // $token = SurveyToken::where('user_id', '=', Auth::user()->id)->where('survey_id', '=', $survey->id)->get();

        // bug here in some browsers(chrome)
        // exception : undefined index survey_id
        /* if ($_SESSION['survey_id'] == $survey->id) {
            return view('respondent.survey.questions', $data);
        } else {
            return redirect()->back();
        } */

        return view('respondent.survey.questions', $data);
    }

    public function complete(Survey $survey)
    {
        # code...
        return view('respondent.survey.complete', ['survey' => $survey]);
    }

    public function sharedSurvey(Request $request)
    {
        # code...
        /* abort_if(
            !$request->hasValidSignature(),
            404,
            'URL Invalid or Expired'
        ); */


        $survey = Survey::where('signature', '=', $request->route('code'))->first();

        abort_if(
            $survey == null,
            404,
            'Survey Not Found'
        );


        // set some record / increment / listener here


        return view('respondent.survey.details', ['survey' => $survey]);
    }

    public function updateSharedSurvey(Request $request, $code)
    {
        $url = $request->title;
        $checkUrl = Survey::where('shareable_link', $url)->first();
        if( $checkUrl ) {   // Jika url telah digunakan
            return redirect()->back();  // Tampilkan peringatan link telah digunakan
        }

        $sign = explode('/', $url);
        Survey::where('id', $code)->update(['shareable_link' => $url, 'signature' => end($sign)]);
        return redirect()->back();
    }

    public function filter()
    {
        if (isset($_GET['select_filter'])) {

            if ($_GET['select_filter'] == "semua") {

                return redirect('/respondent/dashboard');
            } else {
                $category_id = SurveyCategory::where('name', '=', $_GET['select_filter'])->first();

                $surveys = $surveys = Survey::whereDoesntHave('record', function (Builder $query) {
                    $query->where('user_id', '=', Auth::id());
                })
                    ->select(['title', 'id', 'slug', 'user_id', 'shareable_link', 'updated_at'])
                    ->where('status', '=', Survey::STATUS_ACTIVE)
                    ->where('category_id', '=', $category_id->id)
                    ->get();

                $data = [
                    'surveys' => $surveys,
                    'selected' => $_GET['select_filter'],
                    'newsList' => News::latest()->paginate(4),
                    'count' => $surveys->count()
                ];

                // $record = Survey::doesntHave('record')->get();

                return view('respondent.dashboard', $data);
            }
        }
    }
}

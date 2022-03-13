<?php

namespace App\Http\Controllers;

use App\Models\CategorySubcriptions;
use App\Models\Subscription;
use App\Models\Survey;
use App\Models\User;
use App\Models\UsersSubscriptions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $subcriptions = Subscription::get();
        $categorySubscription = CategorySubcriptions::get();

        if (Auth::check()) {
            $userSubscription = UsersSubscriptions::where('user_id', Auth::user()->id)->value('category_id');

            $data = [
                'subcriptions' => $subcriptions,
                'categorySubscription' => $categorySubscription,
                'userSubscription' => $userSubscription,
            ];
        } else {
            $data = [
                'subcriptions' => $subcriptions,
                'categorySubscription' => $categorySubscription,
            ];
        }

        return view('home', $data);
    }

    public function playground()
    {
        # code...

        $currentUser = Auth::user();

        //$role = User::with('role')->get()->first();
        // $userToTest = User::find(15);

        // $canManageUser = Gate::allows('manageAll');

        // $data = [
        //     [
        //         'context' => 'Current subscription ?',
        //         'result' => Auth::user()->subscription_id == null ? 'No subscription' : Auth::user()->subscription->name
        //     ],
        //     [
        //         'context' => 'Can manage other users ?',
        //         'result' => $canManageUser ? 'Yes' : 'No'
        //     ],
        //     [
        //         'context' => 'Can manage all survey ?',
        //         'result' => 'test available soon'
        //     ],
        //     [
        //         'context' => 'Can manage it\'s own survey ?',
        //         'result' => 'test available soon'
        //     ],
        //     [
        //         'context' => 'Can answer survey questions ?',
        //         'result' => 'test available soon'
        //     ],
        // ];

        // $survey = Survey::first();
        // $questions = $survey->questions;
        // $options = $questions[0]->options;
        // $answers = $questions[0]->answers;
        // $respondent = $answers[0]->respondent;

        $subscriptions = Subscription::with('users')->get();

        // use a user model or ignore the error
        $transactions = $currentUser->transactions()->get();

        /* $path = 'app/public/users/' . Str::snake($currentUser->nama_lengkap . '_' . $currentUser->id);
        $disk = Storage::build([
            'driver' => 'local',
            'root' => storage_path($path)
        ]); */

        // $disk->put('test.txt', 'testing');

        /* $pathName = Str::snake($currentUser->nama_lengkap . '_' . $currentUser->id);
        if ($pathName != 'lili_fujiati_1') {
            dd('denied');
        } else {
            dd(Storage::url('users/lili_fujiati_1/test.txt'));
        } */


        $result = [
            // 'results' => $data,
            // 'survey' => $survey,
            // 'questions' => $questions,
            // 'options' => $options,
            // 'answers' => $answers,
            // 'respondent' => $respondent,
            'subscriptions' => $subscriptions,
        ];

        // dd($result);

        return view('tests', $result);
    }

    public function formDemo()
    {
        # code...

        return view('test.form');
    }

    public function profile()
    {
        $user = User::with(['profile'])->where('id', Auth::user()->id)->first();
        $userSubsId = UsersSubscriptions::with('categorySubscription')->where('user_id', $user->id)->first();
        $subscription = CategorySubcriptions::with('subscription')->get();

        // dd($userSubsId);

        return view('profile', compact('user', 'userSubsId', 'subscription'));
    }
}

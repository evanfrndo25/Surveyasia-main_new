<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Chart;
use App\Models\News;
use App\Models\QuestionBankSubTemplate;
use App\Models\Transaction;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;
use Carbon\Carbon;


class DashboardController extends Controller
{
    //
    public $title = "dashboard";

    public function index()
    {
        # code...
        //jumlah user
        $users = User::hitungUser();
        //jumlah transaksi
        $transaksi = Transaction::count();
        $news = News::count();
        // $chart = Chart::count();
        // $chart_free = Chart::where('aktivitas', 'Free')->count();
        // $chart_premium = Chart::where('aktivitas', 'Premium')->count();
        $questionbank = QuestionBankSubTemplate::count();
        $questionbank_active = QuestionBankSubTemplate::where('status', 1)->count();
        $questionbank_free = QuestionBankSubTemplate::where('aktivitas', 'Free')->count();
        $questionbank_premium = QuestionBankSubTemplate::where('aktivitas', 'Premium')->count();
        $year = ['2015', '2016', '2017', '2018', '2019', '2020', '2021'];

        $user = [];

        // foreach ($year as $key => $value) {
        //     $user[] = User::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        // }
        // dd($user);
        $data = [
            'title' => $this->title,
            'users' => $users,
            'news' => $news,
            'transaksi' => $transaksi,
            // 'chart' => $chart,
            // 'chart_free' => $chart_free,
            // 'chart_premium' => $chart_premium,
            'questionbank' => $questionbank,
            'questionbank_active' => $questionbank_active,
            'questionbank_free' => $questionbank_free,
            'questionbank_premium' => $questionbank_premium,
            'year' => json_encode($year, JSON_NUMERIC_CHECK),
            'user' => json_encode($user, JSON_NUMERIC_CHECK),
        ];
        // dd($data);
        return view('admin.dashboard.index', $data);
    }
}

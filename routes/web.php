<?php

use App\Http\Controllers\Admin\ChartController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\QuestionBankTemplateController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AssignUserRole;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialAccountController;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\PickRoleActionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Respondent\SurveyController as RespondenSurveyController;
use App\Http\Controllers\Respondent\Validate\ValidationController;
use App\Http\Controllers\Survey\SurveyController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\SubcriptionController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\Admin\SurveyController as SurveyInAdmin;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth::routes(['verify' => true]);
Auth::routes();

// register controller
Route::get('register/{role}', [
    RegisterController::class,
    'showRegistrationForm',
])->name('register.withRole');

Route::get('/form', [App\Http\Controllers\HomeController::class, 'formDemo']);

Route::get('/playground', [
    App\Http\Controllers\HomeController::class,
    'playground',
])->middleware('auth');

/* non-middleware routes */
Route::view('/about', 'about')->name('about');
Route::get('/', [HomeController::class, 'index'])->middleware('redirect')->name('home');
Route::view('/tac', 'tac')->name('tac');
Route::view('/privacy', 'privacy')->name('privacy');

/* News Routes */
Route::prefix('news')
    ->name('news.')->group(function () {
        Route::get('/', [News::class, 'index'])->name('index');
        Route::get('{news:slug}', [News::class, 'show'])->name('show');
    });

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'composeEmail'])->name('contact.compose');
Route::get('pricing', [SubcriptionController::class, 'index'])->name('pricing');
// Route::view('/payment', 'payment')->name('payment');
Route::view('/faq', 'faq.faq')->name('faq');
Route::view('/faq/general-information', 'faq.general-information')->name('general-information');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('user/pick-role', [AssignUserRole::class, 'index'])->name('user.pick-role');
    Route::post('user/pick-role', [AssignUserRole::class, 'assign'])->name('user.store-role');
    Route::get('/profile', [
        App\Http\Controllers\HomeController::class,
        'profile',
    ])->name('user-profile');
    Route::get(
        '/profile/{id}/delete',
        'App\Http\Controllers\UsersProfileController@destroy'
    )->name('user-profile.delete');
});

/* Screening routes */
Route::middleware(['guest'])->group(function () {
    /* screening routes */
    Route::view('/choose-role', 'screening.choose-role')->name('choose-role');
});

Route::get('/respondent/dashboard/filter', [App\Http\Controllers\Respondent\SurveyController::class, 'filter']);

/* Researcher routes */
Route::middleware(['auth', 'role:researcher', 'verified'])->group(function () {
    Route::prefix('researcher')
        ->name('researcher.')
        ->group(function () {
            // Route::view('pricing', 'researcher.pricing');
            // Route::view('payment', 'researcher.payment');
            // Route::view('tutorial', 'researcher.tutorial');
            Route::get('tutorial', [TutorialController::class, 'index'])->name('tutorial.index');
            Route::get('tutorial/{news:slug}', [TutorialController::class, 'show'])->name('tutorial.show');

            //survey resource
            Route::prefix('surveys')
                ->name('surveys.')
                ->group(function () {
                    Route::get('/', [
                        SurveyController::class,
                        'showUserSurvey',
                    ])->name('index');
                    Route::get('/{survey}/manage', [
                        SurveyController::class,
                        'surveyManagement',
                    ])->name('manage');
                    Route::get('/{survey}/preview', [
                        SurveyController::class,
                        'showSurveyDetails',
                    ])->name('show');

                    //create survey
                    Route::post('/', [
                        SurveyController::class,
                        'storeSurvey',
                    ])->name('store');

                    //delete survey
                    Route::get('tasks/{id}', [SurveyController::class, 'destroy'])->name('delete');


                    //create questions
                    Route::post('/{survey}/questions', [
                        SurveyController::class,
                        'storeQuestions',
                    ])->name('storeQuestions');

                    // customize diagram
                    Route::get('/{survey}/customize-diagram', [
                        SurveyController::class,
                        'customizeDiagram',
                    ])->name('customizeDiagram');

                    // customize diagram
                    Route::get('/{survey}/customize-diagram/export_excel', [
                        SurveyController::class,
                        'export_excel',
                    ])->name('answeExportExcel');

                    // customize diagram
                    Route::post('/{survey}/customize-diagram/export_pdf', [
                        SurveyController::class,
                        'answeExportPdf',
                    ])->name('answeExportPdf');

                    //create diagram
                    Route::post('/{survey}/customize-diagram', [
                        SurveyController::class,
                        'storeDiagrams',
                    ])->name('storeDiagrams');

                    // collect respondent
                    Route::get('/{survey}/collect-respondent', [
                        SurveyController::class,
                        'collectRespondent',
                    ])->name('collectRespondent');

                    // status survey
                    Route::get('/{survey}/status-survey', [
                        SurveyController::class,
                        'statusSurvey',
                    ])->name('statusSurvey');

                    // show report
                    Route::get('{survey}/report', [
                        SurveyController::class,
                        'showReport',
                    ])->name('report');
                });

            //question resource
            Route::resource('questions', QuestionController::class);
            //pricing resource
            // Route::get('pricings', [SubcriptionController::class, 'index'])->name('pricings.index');
            Route::get('payment/{id}', [SubcriptionController::class, 'show'])->name('payment.show');
            Route::post('transaction', [TransactionController::class, 'store'])->name('transaction.store');
            Route::get('transaction/{id}', [TransactionController::class, 'showTransaction'])->name('transaction.showTransaction');
            Route::get('checkout/{id}', [TransactionController::class, 'checkoutTransaction'])->name('transaction.checkoutTransaction');
            Route::get('transaction-history', [TransactionController::class, 'history'])->name('transaction.history');
        });
});

// Respondent Routes
Route::middleware(['auth', 'role:respondent', 'verified'])->group(function () {
    Route::prefix('respondent')
        ->name('respondent.')
        ->group(function () {
            Route::get('survey/history', function () {
                $data = ['histories' => Auth::user()->surveyHistories];
                return view('survey.history', $data);
            })->name('survey.history');
            Route::view('/survey/change-point', 'survey.change-point')->name('survey.change-point');
            Route::view('/survey/pre-survey', 'survey.pre-survey')->name('survey.pre-survey');
            Route::view('/survey/pre-soal', 'survey.pre-soal');
            Route::view('/survey/pre-soall', 'survey.pre-soall');
            Route::get('dashboard', [
                RespondenSurveyController::class,
                'dashboard',
            ])->name('dashboard')->middleware('verify_profile');  //'verify_admin'

            Route::get('re-registration', [ValidationController::class, 'reRegistration'])->name('reRegistration'); // Registrasi Ulang Saat user ditolak verifikasinya

            Route::post('save-reRegistration', [
                ValidationController::class,
                'saveReRegistration'
            ])->name('saveReRegistration');

            // survey route
            Route::prefix('surveys')
                ->name('surveys.')
                ->group(function () {
                    // survey details
                    Route::get('{survey:slug}', [
                        RespondenSurveyController::class,
                        'details',
                    ])->name('show');

                    // answer survey
                    Route::post('submit', [
                        RespondenSurveyController::class,
                        'start',
                    ])->name('store');

                    // get questions data
                    Route::get('{survey}/questions', [
                        RespondenSurveyController::class,
                        'questions',
                    ])->name('questions');

                    // show complete survey
                    /* Route::get('{survey}/complete', [
                        RespondenSurveyController::class,
                        'complete',
                    ])->name('complete'); */
                });

            // validation
            Route::prefix('validation')
                ->name('validate.')
                ->group(function () {
                    // Route::get('{user}/scan', [
                    //     ValidationController::class,
                    //     'scan',
                    // ])->name('scan');
                    Route::get('{user}/personal', [
                        ValidationController::class,
                        'personal',
                    ])->name('personal');
                    Route::post('save', [
                        ValidationController::class,
                        'save',
                    ])->name('save');

                    Route::post('{user}/upload-ktp', [
                        ValidationController::class,
                        'uploadKtp',
                    ])->name('uploadKtp');

                    // verifikasi admin

                    Route::get('{user}/pending', [
                        ValidationController::class, 'pending'
                    ])->name('pending');
                    Route::get('{user}/accept', [
                        ValidationController::class, 'accept'
                    ])->name('accept');
                });
        });

    // complete survey
    Route::get('surveys/{survey:slug}/complete', [
        RespondenSurveyController::class,
        'complete',
    ])->name('survey.complete');
});

// share survey
// shareable link
Route::get('survey/{code}', [RespondenSurveyController::class, 'sharedSurvey'])
    ->name('survey.share')
    ->middleware(['auth', 'role:respondent', 'verified', 'verify_profile']);

//editprofile
Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get(
            '/edit-profile',
            'App\Http\Controllers\UsersProfileController@editProfile'
        )->name('edit-profile');
        Route::put(
            '/edit-profile/{id}',
            'App\Http\Controllers\UsersProfileController@update'
        )->name('edit-profile.update');
        Route::put(
            '/change-password',
            'App\Http\Controllers\UsersProfileController@changePassword'
        )->name('change-password');
    });
});

/* Change Role Route */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('change')
        ->name('change.')
        ->group(function () {
            Route::get('notice', [
                PickRoleActionController::class,
                'notice',
            ])->name('notice');
            Route::get('respondent', [
                PickRoleActionController::class,
                'respondent',
            ])->name('respondent');
            Route::get('researcher', [
                PickRoleActionController::class,
                'researcher',
            ])->name('researcher');

            // first time only
            Route::view(
                'researcher/personal',
                'researcher.screening.personal'
            )->name('form');
            Route::post('researcher/pick', [
                PickRoleActionController::class,
                'asResearcher',
            ])->name('asResearcher');
            Route::post('respondent/pick', [
                PickRoleActionController::class,
                'asRespondent',
            ])->name('asRespondent');
        });
});

//social share
// Route::get('/detail-news', [SocialShareController::class, 'index']);

/* admin routes */
Route::middleware(['is_admin', 'role:admin'])->group(function () {
    /* admin prefix, ex : admin/users , admin/news */
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::redirect('/', 'admin/dashboard', 301);

        /* show admin dashboard */
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

        /* users resource */
        Route::resource('users', UserController::class);
        // user custom notify
        Route::get('users/{user}/notify', [UserController::class, 'notify'])->name('users.notify');
        Route::get('users/{user}/profile', [UserController::class, 'profile'])->name('users.profile');
        Route::get('users/{id}/{status}/profile', [UserController::class, 'status'])->name('users.status');
        /* news resource */
        Route::resource('news', NewsController::class);
        Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
        Route::resource('transaction', TransactionController::class);
        Route::resource('questionbank', QuestionBankTemplateController::class);
        Route::post('/{questionbank}/questions', [QuestionBankTemplateController::class, 'storeQuestions'])->name('storeQuestions');
        Route::resource('chart', ChartController::class);
        Route::post('/news/search', [NewsController::class, 'search'])->name('news.search');
        
        // survey Admin
        // Route::resource('survey', SurveyInAdmin::class);
        Route::get('survey', [SurveyInAdmin::class, 'index'])->name('survey.index');
        Route::get('survey/{survey}/delete', [SurveyInAdmin::class, 'destroy'])->name('survey.destroy');
        Route::get('data-verification', [UserController::class, 'dataVerify'])->name('dataVerify');
    });
});

/* admin auth routes */
// login
Route::view('/admin-login', 'admin.auth.login-admin')->name('view-admin-login');
Route::post('/admin-login', [
    \App\Http\Controllers\Admin\AuthController::class,
    'attemptLogin',
])
    ->name('attempt-admin-login')
    ->middleware('throttle:admin-login');

/* email verification routes, DO NOT MODIFY */
// email verification link notice view
Route::get('email/verification-sent', [VerificationController::class, 'send'])->name(
    'verification.send'
);

// email verification link notice view
Route::post('verify/forceLogout', [VerificationController::class, 'forceLogout'])->name(
    'verification.logout'
);

// default auth
// email verification proccess
Route::get('email/verify/{id}/{hash}', [
    VerificationController::class,
    'verify',
])->name('verification.verify');

// resend email verification proccess
Route::post('email/verification-resend', [
    VerificationController::class,
    'resend',
])
    ->middleware(['throttle:2,10'])
    ->name('verification.resend');

// resend email verification proccess
Route::get('email/verification-notification', [
    VerificationController::class,
    'show',
])->name('verification.notice');

// socialite
Route::get('/auth/{provider}', [
    SocialAccountController::class,
    'redirectToProviders',
]);
Route::get('/auth/{provider}/callback', [
    SocialAccountController::class,
    'handleProviderCallback',
]);
Route::get('/admin/transaksi', function () {
    return view('admin.dashboard.transaksi');
});
// Route::get('/admin/questions', function () {
//     return view('admin.dashboard.question-bank');
// });
// Route::get('/admin/template', function () {
//     return view('admin.dashboard.template');
// });
// Route::get('/admin/profile-settings', function () {
//     return view('admin.dashboard.profile-settings', [
//         'title' => 'Profile Settings',
//     ]);
// });
// Route::get('/admin/questions', function () {
//     return view('admin.dashboard.question-bank');
// });
// Route::get('/admin/template', function () {
//     return view('admin.dashboard.template');
// });
// Route::get('/admin/profile-settings', function () {
//     return view('admin.dashboard.profile-settings');
// });
// Route::get('/admin/testChart', function () {
//     return view('admin.dashboard.charts.map-indo');
// });

Route::get('/admin/set-language', [App\Http\Controllers\Admin\QuestionBankTemplateController::class, 'setLanguage'])->name('set-language');
//testing radio
Route::get('testRadio', function () {
    return view('researcher.exampleRadio');
});

// midtrans
Route::post('midtrans/callback', [MidtransController::class, 'notificationHandler']);
Route::get('midtrans/finish', [MidtransController::class, 'finishRedirect'])->name('midtrans.finish');
Route::get('midtrans/unfinish', [MidtransController::class, 'unfinishRedirect'])->name('midtrans.unfinish');
Route::get('midtrans/error', [MidtransController::class, 'errorRedirect'])->name('midtrans.error');

// verif
Route::get('{user}/failed', [
    ValidationController::class, 'failed'
])->name('failed');

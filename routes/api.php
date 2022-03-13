<?php

use App\Http\Controllers\Api\AnalyticsController;
use App\Http\Controllers\Api\QuestionBank;
use App\Http\Controllers\Api\SurveyController;
use App\Http\Controllers\Api\QuestionBankSubTemplateController;
use App\Http\Controllers\Api\UploadFileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('surveys', SurveyController::class);
Route::get('analytics/{survey}', [AnalyticsController::class, 'surveyAnalytics'])->name('api.analytics.show');
Route::apiResource('subtemplates', QuestionBankSubTemplateController::class);
Route::apiResource('survey/question-bank', QuestionBank::class)->only('index');
Route::post('uploader/image', [UploadFileController::class, 'imageUpload']); //->middleware('auth:sanctum'); // use sanctum for secure api

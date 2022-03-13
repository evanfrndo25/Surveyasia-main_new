<?php

use App\Models\Survey;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // for storing user survey filling history
        Schema::create('users_surveys', function (Blueprint $table) {
            $table->id();

            // basic relations
            $table->foreignIdFor(User::class, 'user_id')->constrained('users');
            $table->foreignIdFor(Survey::class, 'survey_id')->constrained('surveys');

            // time elapsed for filling survey
            // $table->time('time_elapsed');

            // questions answered count by user
            // $table->integer('questions_answered');

            // set current question number (for saving purpose) - optional
            // $table->integer('last_question_number')->nullable();

            // track user information
            $table->string('user_agent');
            $table->ipAddress('user_ip');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_surveys');
    }
}

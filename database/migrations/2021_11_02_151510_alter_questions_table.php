<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->unsignedBigInteger('survey_id')->nullable()->after('id');
            $table->unsignedBigInteger('question_bank_id')->nullable()->after('survey_id');
            $table->enum('from_question_bank', ['yes', 'no'])->after('configuration')->nullable();
            $table->foreign('survey_id')->references('id')->on('surveys')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('question_bank_id')->references('id')->on('question_bank_sub_templates')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('survey_id');
            $table->dropForeign('question_bank_sub_templates_question_bank_id_foreign');
            $table->dropColumn('from_question_bank');
            $table->dropColumn('question_bank_id');
        });
    }
}

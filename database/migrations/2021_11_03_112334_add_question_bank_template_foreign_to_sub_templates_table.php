<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionBankTemplateForeignToSubTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question_bank_sub_templates', function (Blueprint $table) {
            $table->unsignedBigInteger('question_bank_template_id')->nullable()->after('sub_template_name');
            $table->foreign('question_bank_template_id')->references('id')->on('question_bank_templates')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_templates', function (Blueprint $table) {
            //
        });
    }
}

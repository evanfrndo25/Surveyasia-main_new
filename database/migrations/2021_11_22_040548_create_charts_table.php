<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->enum('chart_type', ['free', 'premium'])->default('free');

            // chart config type
            $table->tinyText('type');

            // define where this chart from
            $table->string('library_from')->default('chartJS');

            // list any of questions that supported by this chart
            $table->string('supported_questions');

            // define chart default configuration (prefer JSON)
            $table->longText('default_configuration');

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
        Schema::dropIfExists('charts');
    }
}

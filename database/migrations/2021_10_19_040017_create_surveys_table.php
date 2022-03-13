<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('description');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            // $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            // as substitute of id
            $table->string('slug')->nullable();

            // estimate completion - time estimate
            $table->smallInteger('estimate_completion')->default('2');

            // shareable link
            $table->tinyInteger('shareable')->default(1);

            // signature key for shared survey
            $table->string('signature')->nullable();

            // shareable link
            $table->string('shareable_link')->nullable();

            // target max respondent
            $table->integer('attempted')->default(0);

            // free survey
            $table->integer('max_attempt')->default(40);

            // survey status
            $table->enum('status', ['active', 'closed', 'unpublished'])->default('unpublished');

            // reward point system
            $table->integer('reward_point')->default(0);

            // survey password
            $table->string('key')->nullable();

            // survey type to track wheter its free or premium
            $table->enum('type', ['free', 'paid'])->default('free');

            // survey forms - implemented soon
            // $table->integer('form_count')->default(1);

            $table->softDeletes();
            $table->timestamps();

            // link expiration timestamps
            $table->timestamp('link_expired_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}

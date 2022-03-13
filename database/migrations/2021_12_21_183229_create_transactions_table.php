<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_subscription_id')->constrained('users_subscriptions');
            $table->integer('price');
            $table->string('title');
            $table->integer('quantity');
            $table->integer('total');
            $table->enum('payment_status', ['1', '2', '3', '4', '5', '6'])->comment('1=PENDING, 2=SUCCESS, 3=CANCEL,4=CHALLENGE,5=EXPIRE,6=FAILED');
            $table->string('snap_token', 36)->nullable();
            $table->timestamp('expired_at')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}

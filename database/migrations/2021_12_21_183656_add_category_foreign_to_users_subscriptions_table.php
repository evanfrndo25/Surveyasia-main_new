<?php

use App\Models\UsersSubscriptions;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryForeignToUsersSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_subscriptions', function (Blueprint $table) {
            $table->foreignIdFor(UsersSubscriptions::class, 'category_id')->after('subscription_id')->constrained('category_subcriptions', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_subscriptions', function (Blueprint $table) {
            //
        });
    }
}

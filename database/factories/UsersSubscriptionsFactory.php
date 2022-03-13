<?php

namespace Database\Factories;

use App\Models\CategorySubcriptions;
use App\Models\Subscription;
use App\Models\User;
use App\Models\UsersSubscriptions;
use Carbon\Carbon;
use Database\Seeders\CategoryPriceSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersSubscriptionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersSubscriptions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull(),
            'subscription_id' => $this->subscription()->id,
            'note' => $this->faker->words(3, true),
            'category_id' => $this->category()->id,
            'expired_at' => $this->subscription()->id == 1 ? null : Carbon::now()->addHours(24),
        ];
    }

    public function user($userId)
    {
        # code...
        $user = User::where('id', '=', $userId)->first();

        return $this->state([
            'user_id' => $userId
        ]);
    }

    public function subscription()
    {
        # code...
        //random subs, except Enterprise
        $subscriptionId = $this->faker->numberBetween(1, 3);
        $subscription = Subscription::where(['id' => $subscriptionId])->first();
        return $subscription;

    }


    public function category(){

        $categoryId =  $this->faker->numberBetween(1, 6);

        $category = CategorySubcriptions::where(['id' => $categoryId])->first();



        return $category;
    }


}

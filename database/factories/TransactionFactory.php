<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Transaction;
use App\Models\UsersSubscriptions;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price = $this->faker->numberBetween(90000, 10000000);
        $carbon = Carbon::now();
        $quantity = $this->faker->numberBetween(1, 3);
        $title = ['Free', 'Make Your Own', 'Contact Us', 'Basic', 'Essential Annual', 'Plus Annual', 'Advantage', 'Enterprise', 'Corporate'];
        $total = $price * $quantity;

        return [
            'user_subscription_id' => 1,
            'price' => $price,
            'title' => $title[mt_rand(0, 8)],
            'quantity' => $quantity,
            'total' => $total,
            'payment_status' => 1,
            'expired_at' => $carbon->addDays(30)
        ];
    }

    /* between subscription */
    public function userSubscription($id)
    {
        $userSubscription = UsersSubscriptions::where(['id' => $id])->first();

        return $this->state(['user_subscription_id' => $userSubscription->id]);
    }
}

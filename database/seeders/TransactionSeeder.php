<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Database\Factories\TransactionFactory;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = new TransactionFactory();

        for ($i = 1; $i <= 5; $i++) {
            $factory->userSubscription($i)->create();
        }
    }
}

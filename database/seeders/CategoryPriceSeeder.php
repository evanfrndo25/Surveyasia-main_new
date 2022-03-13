<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_prices')->insert([
            [
            'id' => 1,
            'category_price_name' => 'Free',
            'harga' => '0',
            'type_price_id' => 1,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 2,
            'category_price_name' => 'Make Your Own',
            'harga' => '20.000',
            'type_price_id' => 2,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 3,
            'category_price_name' => 'Contact Us',
            'harga' => 'Contact us for custom pricing',
            'type_price_id' => 2,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 4,
            'category_price_name' => 'Basic',
            'harga' => '249.000',
            'type_price_id' => 3,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 5,
            'category_price_name' => 'Essential Annual',
            'harga' => '199.000',
            'type_price_id' => 3,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 6,
            'category_price_name' => 'Plus Annual',
            'harga' => '449.000',
            'type_price_id' => 3,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 7,
            'category_price_name' => 'Advantage',
            'harga' => '1.099.000',
            'type_price_id' => 4,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 8,
            'category_price_name' => 'Enterprise',
            'harga' => '1.199.000',
            'type_price_id' => 4,
            'created_at' =>now(),
            'updated_at' => now()
        ],[
            'id' => 9,
            'category_price_name' => 'Corporate',
            'harga' => 'Contact Us',
            'type_price_id' => 4,
            'created_at' =>now(),
            'updated_at' => now()

        ]
    ]);
    }
}

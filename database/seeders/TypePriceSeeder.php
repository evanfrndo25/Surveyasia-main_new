<?php

namespace Database\Seeders;

use App\Models\Type_price;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_prices')->insert([
            [
            'id' => 1,
            'type_price_name' => 'Free',
            'Description' => 'Fee survey Adalah Survey Gratis',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 2,
            'type_price_name' => 'Pay Per Survey',
            'Description' => 'Survey Sekali Bayar',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'id' => 3,
            'type_price_name' => 'Personal',
            'Description' => 'Survey Berlangganan Tiap Bulan',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'id' => 4,
            'type_price_name' => 'Business',
            'Description' => 'Survey Tingkat Bisnis',
            'created_at' => now(),
            'updated_at' => now()
        ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            'id' => 1,
            'tipe' => 'Free',
            'harga' => '0',
            'sub_tipe' => 'Free',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 2,
            'tipe' => 'Pay Per Survey',
            'harga' => '20.000',
            'sub_tipe' => 'Make Your Own',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 3,
            'tipe' => 'Pay Per Survey',
            'harga' => 'Contact us for custom pricing',
            'sub_tipe' => 'Contact Us',
            'created_at' => now(),
            'updated_at' => now(),

        ],
        [
            'id' => 4,
            'tipe' => 'Personal',
            'harga' => '249.000',
            'sub_tipe' => 'Basic',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 5,
            'tipe' => 'Personal',
            'harga' => '199.000',
            'sub_tipe' => 'Essential Annual',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 6,
            'tipe' => 'Personal',
            'harga' => '449.000',
            'sub_tipe' => 'Plus Annual',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 7,
            'tipe' => 'Bussiness',
            'harga' => '1.099.000',
            'sub_tipe' => 'Advantage',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 8,
            'tipe' => 'Bussiness',
            'harga' => '1.999.000',
            'sub_tipe' => 'Enterprise',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'id' => 9,
            'tipe' => 'Bussiness',
            'harga' => 'Contact Us',
            'sub_tipe' => 'Corporate',
            'created_at' => now(),
            'updated_at' => now(),
        ]


    );
    }
}

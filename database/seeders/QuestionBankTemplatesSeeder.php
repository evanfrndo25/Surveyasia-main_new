<?php

namespace Database\Seeders;

use App\Models\QuestionBankTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionBankTemplatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_bank_templates')->insert([
            //engg
            [
                'id' => 1,
                'template_name' => 'Customer Research',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'template_name' => 'Education Research',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'template_name' => 'Employee Satisfaction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'template_name' => 'Healthy Research',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'template_name' => 'Product Research',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'template_name' => 'Basic Research',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //indo

            [
                'id' => 1 + 6,
                'template_name' => 'Riset Pelanggan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2 + 6,
                'template_name' => 'Riset Pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3 + 6,
                'template_name' => 'Riset Karyawan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4 + 6,
                'template_name' => 'Penelitian Sehat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5 + 6,
                'template_name' => 'Riset Produk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6 + 6,
                'template_name' => 'Penelitian dasar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

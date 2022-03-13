<?php

namespace Database\Seeders;

use App\Models\QuestionBankSubTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionBankSubTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_bank_sub_templates')->insert([
            //indo

            //Customer Research

            [
                'id' => 1,
                'question_bank_template_id' => 1,
                'sub_template_name' => 'Customer satisfaction',
                'goals' => 'to see customers who are satisfied with our products or services. The conclusion
                that can be seen is better strategic marketing.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 2,
                'question_bank_template_id' => 1,
                'sub_template_name' => 'Customer behavior',
                'goals' => 'to find out how customers choose the criteria for the product or service they need.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 3,
                'question_bank_template_id' => 1,
                'sub_template_name' => 'Typical Customer',
                'goals' => 'to classify between new customers and repeat customers.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 4,
                'question_bank_template_id' => 1,
                'sub_template_name' => 'Customer loyalty',
                'goals' => 'to see customer loyalty in using the products or services provided.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],

            //Education Research

            [
                'id' => 5,
                'question_bank_template_id' => 2,
                'sub_template_name' => 'Parent Satisfaction',
                'goals' => 'to see satisfaction with their childrens education development in the school environment.',
                'aktivitas' => 'Premium',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 6,
                'question_bank_template_id' => 2,
                'sub_template_name' => 'School facility',
                'goals' => 'to appreciate the facilities provided by their school.',
                'aktivitas' => 'Premium',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 7,
                'question_bank_template_id' => 2,
                'sub_template_name' => 'Teacher evaluation',
                'goals' => ' to see performance of a teacher in the explain learning materials to student.',
                'aktivitas' => 'Premium',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 8,
                'question_bank_template_id' => 2,
                'sub_template_name' => 'Bullying Survey',
                'goals' => 'to see how bullying occurs in the school environment.',
                'aktivitas' => 'Premium',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],

            //Employee Satisfaction

            [
                'id' => 9,
                'question_bank_template_id' => 3,
                'sub_template_name' => 'Job satisfaction',
                'goals' => 'to see the satisfaction of employees who have achieved their current performance.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 10,
                'question_bank_template_id' => 3,
                'sub_template_name' => 'Team Performance',
                'goals' => 'to see the opinion of team members in doing team work.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 11,
                'question_bank_template_id' => 3,
                'sub_template_name' => 'Employee engagement',
                'goals' => ' to help supervisors in understanding and measuring employee engagement in the company.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 12,
                'question_bank_template_id' => 3,
                'sub_template_name' => 'Employee evaluation',
                'goals' => 'to see the performance of an employee in doing him/her job.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 13,
                'question_bank_template_id' => 3,
                'sub_template_name' => 'Office Facility',
                'goals' => 'to appreciate the facilities provided by their office.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            

            //Healthy Research

            [
                'id' => 14,
                'question_bank_template_id' => 4,
                'sub_template_name' => 'Diabetes test',
                'goals' => 'to see opinions about factors and reduce diabetes risk.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 15,
                'question_bank_template_id' => 4,
                'sub_template_name' => 'Heart disease',
                'goals' => 'to see characteristic of heart disease',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 16,
                'question_bank_template_id' => 4,
                'sub_template_name' => 'Personality test',
                'goals' => "to understand someone's personality",
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],

            //Product Research
            [
                'id' => 17,
                'question_bank_template_id' => 5,
                'sub_template_name' => 'Product testing',
                'goals' => 'to see the opinion of customer about product was issued by company.',
                'aktivitas' => 'Free',
                'status' => 1,  
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 18,
                'question_bank_template_id' => 5,
                'sub_template_name' => 'Logo testing',
                'goals' => 'to see the evaluate of product logo.',
                'aktivitas' => 'Free',
                'status' => 1,  
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 19,
                'question_bank_template_id' => 5,
                'sub_template_name' => 'Brand awareness',
                'goals' => 'to see interesting a product to customers who use.',
                'aktivitas' => 'Free',
                'status' => 1,  
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 20,
                'question_bank_template_id' => 5,
                'sub_template_name' => 'Advertising',
                'goals' => 'to evaluate advertise what the company had done.',
                'aktivitas' => 'Free',
                'status' => 1,  
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],

            //Basic Research
            [
                'id' => 21,
                'question_bank_template_id' => 6,
                'sub_template_name' => 'Vacation research',
                'goals' => 'to see opinions about factors and reduce diabetes risk.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 22,
                'question_bank_template_id' => 6,
                'sub_template_name' => 'Mood survey',
                'goals' => 'to see mood someone.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 23,
                'question_bank_template_id' => 6,
                'sub_template_name' => 'Movie viewing',
                'goals' => 'to evaluate the movie was watch.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 24,
                'question_bank_template_id' => 6,
                'sub_template_name' => 'TV viewing',
                'goals' => 'to evaluate the television program was watched.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],
            [
                'id' => 25,
                'question_bank_template_id' => 6,
                'sub_template_name' => 'Social media habits',
                'goals' => 'to see how habits someone use the social media.',
                'aktivitas' => 'Free',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 0,
            ],


            //indo===============================================================================
            [
                'id' => 25 + 1,
                'question_bank_template_id' => 1 + 6                                                                                                                                                        ,
                'sub_template_name' => 'Kepuasan pelanggan',
                'goals' => 'untuk melihat pelanggan yang puas dengan produk atau layanan kami. Kesimpulannya
                yang bisa dilihat adalah pemasaran strategis yang lebih baik.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 2,
                'question_bank_template_id' => 1 + 6                                                                                                                                                        ,
                'sub_template_name' => 'Perilaku pelanggan',
                'goals' => 'untuk mengetahui bagaimana pelanggan memilih kriteria produk atau layanan yang mereka butuhkan.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 3,
                'question_bank_template_id' => 1 + 6                                                                                                                                                        ,
                'sub_template_name' => 'Pelanggan Biasa',
                'goals' => 'untuk mengklasifikasikan antara pelanggan baru dan pelanggan tetap.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 4,
                'question_bank_template_id' => 1 + 6                                                                                                                                                        ,
                'sub_template_name' => 'Loyalitas pelanggan',
                'goals' => 'untuk melihat loyalitas pelanggan dalam menggunakan produk atau layanan yang diberikan.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],

            //Penelitian Pendidikan

            [
                'id' => 25 + 5,
                'question_bank_template_id' => 2 + 6,
                'sub_template_name' => 'Kepuasan Orang Tua',
                'goals' => 'melihat kepuasan terhadap perkembangan pendidikan anaknya di lingkungan sekolah.',
                'aktivitas' => 'Premium',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 6,
                'question_bank_template_id' => 2 + 6,
                'sub_template_name' => 'Fasilitas sekolah',
                'goals' => 'untuk menghargai fasilitas yang disediakan oleh sekolah mereka.',
                'aktivitas' => 'Premium',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 7,
                'question_bank_template_id' => 2 + 6,
                'sub_template_name' => 'Evaluasi guru',
                'goals' => ' untuk melihat kinerja seorang guru dalam menjelaskan materi pembelajaran kepada siswa.',
                'aktivitas' => 'Premium',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 8,
                'question_bank_template_id' => 2 + 6,
                'sub_template_name' => 'Survei Penindasan',
                'goals' => 'untuk melihat bagaimana bullying terjadi di lingkungan sekolah.',
                'aktivitas' => 'Premium',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],

            //Kepuasan karyawan

            [
                'id' => 25 + 9,
                'question_bank_template_id' => 3 + 6,
                'sub_template_name' => 'Kepuasan kerja',
                'goals' => 'untuk melihat kepuasan karyawan yang telah mencapai kinerjanya saat ini.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 10,
                'question_bank_template_id' => 3 + 6,
                'sub_template_name' => 'Kinerja Tim',
                'goals' => 'untuk melihat pendapat anggota tim dalam melakukan kerja tim.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 11,
                'question_bank_template_id' => 3 + 6,
                'sub_template_name' => 'Keterlibatan karyawan',
                'goals' => ' untuk membantu supervisor dalam memahami dan mengukur employee engagement di perusahaan.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            
            [
                'id' => 25 + 12,
                'question_bank_template_id' => 3 + 6,
                'sub_template_name' => 'Evaluasi karyawan',
                'goals' => 'untuk melihat kinerja seorang karyawan dalam melakukan pekerjaannya.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],

            [
                'id' => 25 + 13,
                'question_bank_template_id' => 3 + 6,
                'sub_template_name' => 'Fasilitas Kantor',
                'goals' => 'untuk menghargai fasilitas yang disediakan oleh kantor mereka.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            

            //Penelitian Sehat

            [
                'id' => 25 + 14,
                'question_bank_template_id' => 4 + 6,
                'sub_template_name' => 'Tes diabetes',
                'goals' => 'untuk melihat opini tentang faktor dan mengurangi risiko diabetes.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 15,
                'question_bank_template_id' => 4 + 6,
                'sub_template_name' => 'Penyakit jantung',
                'goals' => 'melihat ciri-ciri penyakit jantung',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 16,
                'question_bank_template_id' => 4 + 6,
                'sub_template_name' => 'Tes kepribadian',
                'goals' => "untuk memahami kepribadian seseorang",
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],

            //Penelitian Produk
            [
                'id' => 25 + 17,
                'question_bank_template_id' => 5 + 6,
                'sub_template_name' => 'Pengujian produk',
                'goals' => 'untuk melihat pendapat pelanggan tentang produk yang dikeluarkan oleh perusahaan.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 18,
                'question_bank_template_id' => 5 + 6,
                'sub_template_name' => 'Pengujian logo',
                'goals' => 'untuk melihat evaluasi logo produk.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 19,
                'question_bank_template_id' => 5 + 6,
                'sub_template_name' => 'Kesadaran merek',
                'goals' => 'untuk melihat produk yang menarik bagi pelanggan yang menggunakannya.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 20,
                'question_bank_template_id' => 5 + 6,
                'sub_template_name' => 'Iklan',
                'goals' => 'untuk mengevaluasi mengiklankan apa yang telah dilakukan perusahaan.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],

            //Penelitian dasar
            [
                'id' => 25 + 21,
                'question_bank_template_id' => 6 + 6,
                'sub_template_name' => 'Penelitian liburan',
                'goals' => 'untuk melihat opini tentang faktor dan mengurangi risiko diabetes.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 22,
                'question_bank_template_id' => 6 + 6,
                'sub_template_name' => 'Survei suasana hati',
                'goals' => 'untuk melihat mood seseorang.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 23,
                'question_bank_template_id' => 6 + 6,
                'sub_template_name' => 'Menonton film',
                'goals' => 'untuk mengevaluasi film yang ditonton.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 24,
                'question_bank_template_id' => 6 + 6,
                'sub_template_name' => 'menonton TV',
                'goals' => 'untuk mengevaluasi program televisi yang ditonton.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],
            [
                'id' => 25 + 25,
                'question_bank_template_id' => 6 + 6,
                'sub_template_name' => 'Kebiasaan media sosial',
                'goals' => 'untuk melihat bagaimana kebiasaan seseorang menggunakan media sosial.',
                'aktivitas' => 'Free',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'language_id' => 1,
            ],

        ]);
    }
}

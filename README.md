# Surveyasia

Project for surveyasia developed by **Front End** and **Back End** team **Citiasia.inc**

# Features
1. Create Surveys as Researcher
2. Answer Surveys after joining as Respondent
3. more...

# Sebelum Install

Pastikan anda sudah mengistall software dibawah

1. [XAMPP](https://www.apachefriends.org/download.html)
2. Code Editor Pilihan / [VSCode](https://code.visualstudio.com/download) recommended
3. [Composer](https://getcomposer.org/download/)
4. [NodeJS & npm](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

# Cara Install

1. Clone repository ini ke code editor pilihan anda
2. Jalankan perintah `composer install` dan pastikan ada proses saat menginstall
3. Jalankan perintah `npm install`, lalu `npm run dev`
4. Copy paste file **.env.example** dan beri nama **.env**
5. Buka file **.env** dan cari `DB_DATABASE`
6. Isi `DB_DATABASE` dengan `surveyasia`
7. buka php-myadmin dan buat database dengan nama 'surveyasia'
8. Jalankan perintah `php artisan migrate:fresh --seed`
9. Jalankan perintah `php artisan storage:link`
10. Setelah selesai jalankan perintah `php artisan serve`
11. Coba di browser dengan url (http://localhost:8000)



# Info

This project was built using [Laravel 8](https://laravel.com)

Public domain [SurveyAsia](https://surveyasia.id)

<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'id' => 1,
            'title' => 'Enhance React onClick handlers with Currying',
            'slug' => Str::slug('Enhance React onClick handlers with Currying'),
            'description' => '<p>I wanted to share a design pattern I like to use when dealing with onClick handlers in React components.</p>

            <p>For my example, I’ll be using a common design pattern found in React for clicking on a list item.</p>',
            'status' => '1',
            'category' => '1',
            'author' => '1',
            'img' => 'news-img/img1.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        News::create([
            'id' => 2,
            'title' => 'Examples of Most Popular Web Apps built Angular',
            'slug' => Str::slug('Examples of Most Popular Web Apps built Angular'),
            'description' => '<p>If in doubt, the multiple websites built with Angular hold testimony of its usefulness and popularity. Over the years, Angular has faced stiff competition from competent frontend JavaScript frameworks, yet it stands out from the crowd. One can articulate the reasons for this with the spectacular range of examples of the websites built with the Angular framework.</p>',
            'status' => '1',
            'category' => '1',
            'author' => '1',
            'img' => 'news-img/img2.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        News::create([
            'id' => 3,
            'title' => 'Python or Node.js, Which is Better to Learn',
            'slug' => Str::slug('Python or Node.js, Which is Better to Learn'),
            'description' => '<p>Each project comes with its own set of requirements and standards. It’s also important to use the right technology for coding an application when you’re creating one. We’ll compare Python vs Node.js to learn about their advantages, disadvantages, and use cases so you can make an informed decision about which is ideal for your project.</p>',
            'status' => '1',
            'category' => '1',
            'author' => '1',
            'img' => 'news-img/img3.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

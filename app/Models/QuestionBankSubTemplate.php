<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBankSubTemplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_template_name', 
        'question_bank_template_id', 
        'goals', 
        'aktivitas', 
        'status', 
        'language_id'
    ];

    public function template()
    {
        return $this->belongsTo(QuestionBankTemplate::class, 'question_bank_template_id');
    }

    public function questions()
    {
        # code...
        return $this->hasMany(Question::class, 'question_bank_id');
    }

    public function active()
    {
        $active  = QuestionBankSubTemplate::where('status', '1');
        return  $active;
    }
    // public function options()
    // {
    //     # code...
    //     return $this->hasManyThrough(QuestionsOption::class, Question::class);
    // }
}

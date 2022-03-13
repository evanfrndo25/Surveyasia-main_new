<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBankTemplate extends Model
{
    use HasFactory;

    public function sub_template()
    {
        # code...
        return $this->hasMany(QuestionBankSubTemplate::class);
    }

    public function questions()
    {
        # code...
        return $this->hasManyThrough(Question::class, QuestionBankSubTemplate::class, 'question_bank_template_id', 'question_bank_id');
    }
}

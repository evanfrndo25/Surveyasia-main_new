<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'survey_id',
        'question_bank_id',
        'question',
        'configuration',
        'from_question_bank',
    ];

    public function survey()
    {
        # code...
        return $this->belongsTo(Survey::class);
    }

    public function answers()
    {
        # code...
        return $this->hasMany(Answer::class);
    }

    public function options()
    {
        # code...
        return $this->hasMany(QuestionsOption::class);
    }

    public function logicAnswer()
    {
        return $this->hasMany(logicAnswer::class);
    }

    public function template()
    {
        # code...
        return $this->belongsTo(QuestionBankSubTemplate::class, 'question_bank_id');
    }

    /**
     * retrieve chart instance / type for this question through question_chart_configuration
     */
    public function chart()
    {
        # code...
        return $this->hasOneThrough(Chart::class, QuestionChartConfiguration::class);
    }

    /**
     * retrieve a single chart config for this question
     */
    public function chartConfig()
    {
        # code...
        return $this->hasOne(QuestionChartConfiguration::class);
    }
}

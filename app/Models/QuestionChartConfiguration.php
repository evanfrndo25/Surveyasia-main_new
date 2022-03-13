<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionChartConfiguration extends Model
{
    public $timestamps = true;

    protected $fillable = [
        'question_id',
        'chart_id',
        'config'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function chart()
    {
        # code...
        return $this->belongsTo(Chart::class);
    }
}

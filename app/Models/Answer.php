<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Answer extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'question_id',
        'respondent_id',
        'answer'
    ];

    public function question()
    {
        # code...
        return $this->belongsTo(Question::class);
    }

    public function respondent()
    {
        # code...
        return $this->belongsTo(User::class, 'respondent_id');
    }
}

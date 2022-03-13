<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersSurvey extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = ['user_id', 'survey_id', 'time_elapsed', 'user_ip', 'user_agent', 'questions_answered'];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class, 'user_id');
    }

    public function survey()
    {
        # code...
        return $this->belongsTo(Survey::class, 'survey_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionsOption extends Model
{
    use HasFactory;

    protected $table = 'questions_option';

    public const TYPE_TEXTFIELD = 1;
    public const TYPE_CHECKBOX = 2;
    public const TYPE_RADIO = 3;
    public const TYPE_RATING = 4;
    public const TYPE_DROPDOWN = 5;
    public const TYPE_FILE_UPLOAD = 6;

    public $timestamps = true;

    protected $fillable = [
        'id',
        'question_id',
        'value',
        'created_at',
        'updated_at'
    ];

    public function question()
    {
        # code...
        return $this->belongsTo(Question::class);
    }
}

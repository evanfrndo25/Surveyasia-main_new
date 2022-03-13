<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = ['name', 'description', 'chart_type', 'type', 'library_from', 'supported_questions', 'default_configuration'];
}

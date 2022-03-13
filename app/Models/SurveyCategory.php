<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyCategory extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = ['name', 'description'];


    public function surveys()
    {
        # code...
        return $this->hasMany(Survey::class, 'category_id');
    }
}

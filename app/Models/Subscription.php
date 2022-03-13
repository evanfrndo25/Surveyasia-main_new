<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Const_;

class Subscription extends Model
{
    use HasFactory;

    public $timestamps = true;

    public const FREE = 1;
    public const PAY_PER_SURVEY = 2;
    public const PERSONAL = 3;
    public const BUSINESS = 4;


    protected $fillable = [
        'name', 'description',  'features'
    ];

    public function users()
    {
        # code...
        return $this->belongsToMany(User::class, 'users_subscriptions');
    }

    public function CategorySubcriptions()
    {
        return $this->belongsTo(CategorySubcriptions::class);
    }
}

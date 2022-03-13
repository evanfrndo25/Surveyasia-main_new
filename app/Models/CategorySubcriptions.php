<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySubcriptions extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'subscription_id',
        'title',
        'description',
        'price',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function usersubscription()
    {
        return $this->hasMany(UsersSubscriptions::class);
    }


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}

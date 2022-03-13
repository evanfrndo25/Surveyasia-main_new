<?php

namespace App\Models;

use Database\Seeders\UsersSubscriptionsSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsersSubscriptions;
use App\Models\Subscription;
use App\Models\User;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_subscription_id',
        'order_id',
        'price',
        'title',
        'quantity',
        'expired_at',
        'total',
    ];

    public function detail()
    {
        return $this->belongsTo(UsersSubscriptions::class);
    }

    public function sub()
    {
        return $this->belongsTo(UsersSubscriptions::class, 'user_subscription_id');
    }

    public function categorySubscription()
    {
        return $this->belongsTo(CategorySubcriptions::class, 'subscription_id');
    }
}

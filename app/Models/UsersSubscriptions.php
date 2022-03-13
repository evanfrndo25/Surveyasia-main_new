<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UsersSubscriptions extends Pivot
{
    //
    use HasFactory;

    public $table = 'users_subscriptions';

    /**
     * The name of the foreign key column.
     *
     * @var string
     */
    protected $foreignKey;

    /**
     * The name of the "other key" column.
     *
     * @var string
     */
    protected $relatedKey;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'subscription_id',
        'note',
        'category_id',
        'expired_at'
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        # code...
        return $this->belongsTo(Subscription::class);
    }

    public function subscriptions()
    {
        # code...
        return $this->belongsToMany(Subscription::class);
    }

    public function transaction()
    {
        # code...
        return $this->hasOne(Transaction::class);
    }

    public function categorySubscription()
    {
        return $this->belongsTo(CategorySubcriptions::class, 'category_id');
    }

    public function categorySub()
    {
        return $this->belongsTo(CategorySubcriptions::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\URL;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Survey extends Model
{
    use HasFactory, SoftDeletes, HasRelationships;

    public const TYPE_FREE = 'free';
    public const TYPE_PAID = 'paid';

    public const STATUS_ACTIVE = "active";
    public const STATUS_CLOSED = "closed";
    public const STATUS_UNPUBLISHED = "unpublished";

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'slug',
        'category_id',
        'estimate_completion',
        'shareable_link',
        'signature',
        'attempted',
        'max_attempt',
        'status',
        'reward_point',
        'key',
        'type',
        'reason_deny',
        'link_expired_at'
    ];

    protected $dates = ['link_expired_at'];

    // utils function

    /**
     * Create a temporary signed shareable link
     * @param int $expired_at expiration in minutes
     * @param int $status Survey status
     * @param bool $shouldSave Save changes
     * @return string temporary signed route / link
     */
    public function createShareableLink($expired_at, $status, $shouldSave)
    {
        # code...

        // temporary URL with signed route
        /* $this->shareable_link = URL::temporarySignedRoute(
            'survey.share',
            now()->addMinutes($expired_at), // 40 minutes of expiration
            [
                'code' => $this->signature // unique signature
            ]
        ); */

        // URL generated from route (shorter link)
        $this->shareable_link = route('survey.share', [
            'code' => $this->signature // unique signature
        ]);

        $this->link_expired_at = now()->addMinutes($expired_at); // 40 minutes of expiration
        // $this->status = $status; // set status

        if ($shouldSave) {
            $this->save();
        }

        return $this->shareable_link;
    }   

    /**
     * Check if the shareable link is expired
     * @return bool
     */
    public function isLinkExpired()
    {
        # less than or equal then it's expired
        return $this->link_expired_at->lte(now());
    }


    /**
     * Create HasOne creator (user) relationship
     */
    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }

    /**
     * Create HasMany questions for this survey
     */
    public function questions()
    {
        # code...
        return $this->hasMany(Question::class);
    }

    public function options()
    {
        # code...
        return $this->hasManyThrough(QuestionsOption::class, Question::class);
    }

    public function category()
    {
        # code...
        return $this->belongsTo(SurveyCategory::class, 'category_id');
    }

    /**
     * For user survey history, load this
     */
    public function record()
    {
        # code...
        return $this->hasMany(UsersSurvey::class, 'survey_id');
    }

    /**
     * Get survey's answers through questions if any
     */
    public function answers()
    {
        # code...
        return $this->hasManyThrough(Answer::class, Question::class);
    }

    // public function surveytokens()
    // {
    //     # code...
    //     return $this->hasMany(SurveyToken::class);
    // }

    /**
     * Get the route key for the model. Enable this to always use slug
     *
     * @return string
     */
    /* public function getRouteKeyName()
    {
        return 'slug';
    } */
}

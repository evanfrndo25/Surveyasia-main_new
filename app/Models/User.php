<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Survey;
use CategorySubcription;
use App\Models\Permission;
use App\Models\Transaction;
use App\Models\Subscription;
use App\Models\UsersProfile;
use App\Models\UsersSubscriptions;
use App\Jobs\QueuedEmailVerificationJob;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use App\Notifications\Auth\QueuedEmailVerification;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, CanResetPassword, HasRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'role_id',
        'profile_id',
        'avatar',
        'provider_id',
        'provider_name',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /* public function sendEmailVerificationNotification()
    {
        // Approach 1
        // $this->notify(new QueuedEmailVerification());

        //Approach 2
        // QueuedEmailVerificationJob::dispatch($this)->onQueue('emails');

        // no queue
        $this->notify(new EmailVerificationNotification());
    } */


    /**
     * Check If user have a specified role
     * @param App\Models\User $user
     * @param int $role
     * @return bool
     */
    public function hasRole(User $user, $role)
    {
        # code...

        if ($role == Role::IS_ADMIN) {
            return $user->role_id == Role::IS_ADMIN;
        }

        if ($role == Role::IS_RESEARCHER) {
            return $user->role_id == Role::IS_RESEARCHER;
        }

        return $user->role_id == Role::IS_RESPONDENT;
    }

    /**
     * Get user's profile, each user will have only one profile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile()
    {
        # code...
        return $this->hasOne(UsersProfile::class);
    }

    /**
     * Get user's role, each user will have only one role so that the
     * relation is one-to-one, or many
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        # code...
        return $this->belongsTo(Role::class);
    }

    /**
     * Get user's single subscription, each user will have only one active
     * subscription so that the relation is one-to-one
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOneThrough
     */
    public function subscription()
    {
        # code...
        return $this->hasOneDeep(Subscription::class, [UsersSubscriptions::class])
            ->latest();
    }

    /**
     * Get user's list of subscriptions, each user could have
     * more than one subscriptions but expired
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subscriptions()
    {
        # code...
        return $this->belongsToMany(Subscription::class, UsersSubscriptions::class);
    }

    /**
     * Get user's list of surveys
     */
    public function surveys()
    {
        # code...
        return $this->hasMany(Survey::class);
    }

    // This code will return error, dont use it
    // public function permissions()
    // {
    //     # code...
    //     return $this->hasManyThrough(Permission::class, Role::class);
    // }

    public function asRespondent()
    {
        # code...
        return $this->update(['role_id' => Role::IS_RESPONDENT]);
    }

    public function asResearcher()
    {
        # code...
        return $this->update(['role_id' => Role::IS_RESEARCHER]);
    }

    public static function hitungUser()
    {
        // $users = User::withCount('username')->get();
        $users = User::count();
        // $user->follows->count();
        return $users;
    }


    public function socialAccount()
    {
        return $this->hasMany(SocialAccount::class);
    }

    /**
     * Get user's survey histories
     */
    public function surveyHistories()
    {
        # code...
        return $this->hasMany(UsersSurvey::class, 'user_id', 'id');
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function transaction()
    {

        return $this->hasManyThrough(Transaction::class, UsersSubscriptions::class);
    }

    public function transactions()
    {
        # code...
        return $this->hasManyThrough(Transaction::class, UsersSubscriptions::class, 'user_id', 'user_subscription_id');
    }
}

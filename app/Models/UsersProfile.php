<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UsersProfile extends Model
{
    protected $table = 'users_profiles';
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'nik',
        'nama_lengkap',
        'telp',
        'gender',
        'birth_place',
        'birth_date',
        'image_ktp',
        'ktp_province',
        'ktp_city',
        'ktp_district',
        'ktp_postal_code',
        'province',
        'city',
        'district',
        'postal_code',
        'job',
        'job_location',
        'ktp_address',
        'address',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'nik',
        'user_id',
        'ktp_province',
        'ktp_city',
        'ktp_district',
        'ktp_postal_code',
    ];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}

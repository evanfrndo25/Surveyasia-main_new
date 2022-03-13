<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    //define constants
    public const IS_ADMIN = 1;
    public const IS_RESEARCHER = 2;
    public const IS_RESPONDENT = 3;

    public $timestamps = true;

    protected $fillable = ['name', 'description', 'created_at', 'updated_at', 'deleted_at'];

    public function permissions()
    {
        # code...
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    public function user()
    {
        # code...
        return $this->hasOne(User::class);
    }

    public function users()
    {
        # code...
        return $this->hasMany(User::class);
    }
}

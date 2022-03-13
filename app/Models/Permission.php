<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = true;

    protected $fillable = ['name', 'description', 'created_at', 'updated_at', 'deleted_at'];

    public function roles()
    {
        # code...
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'user_first_name', 'user_last_name', 'user_phone', 'email', 'password', 'user_role_id'
    ];

    public function UserRoles()
    {
        return $this->belongsTo(UserRole::class);
    }
}

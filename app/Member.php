<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\LoginAttempt;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use LoginAttempt;
    use Notifiable;

    protected $guard = 'member';
    protected $appends = [
        'full_name'
    ];

    protected $fillable = [
        'first_name', 'last_name', 'last_login_at', 'email', 'password', 'remember_token', 'email_verified_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'member_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    const ACCESS_ADMIN = 1;
    const ACCESS_USER = 2;

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeAdmin($query)
    {
        return $query->where('level', static::ACCESS_ADMIN);
    }

    public function scopeUser($query)
    {
        return $query->where('level', static::ACCESS_USER);
    }

    public function isUser()
    {
        return $this->level == static::ACCESS_USER;
    }

    public function isAdministrator()
    {
        return $this->id == 1;
    }

    public function isHaveAccess($akses)
    {
        return in_array($this->level, $akses);
    }

    public function isAdmin()
    {
        return $this->level == static::ACCESS_ADMIN;
    }
}

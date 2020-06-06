<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'avatar', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param array $attributes
     * @return string
     */
    public function photoUrl(array $attributes = ['w' => 60, 'h' => 60, 'fit' => 'crop'])
    {
        return 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80';
    }

    public function scopeSearchByKeyword($query, $keyword)
    {
        return $query->when($keyword, function ($query) use ($keyword) {
            return $query->where(function ($query) use($keyword){
                $query->where('name', 'like', '%'.$keyword.'%')
                    ->orWhere('phone', 'like', '%'.$keyword.'%')
                    ->orWhere('email', 'like', '%'.$keyword.'%');
            });
        });
    }

    public function scopeFilterStatus($query, $status)
    {
        return $query->when($status != 'all', function ($query) use ($status) {
            return $query->where('status', $status);
        });
    }

    public function scopeFilterRole($query, $role)
    {
        return $query->when($role != 'all', function ($query) use ($role) {
            return $query->where('role', $role);
        });
    }
}

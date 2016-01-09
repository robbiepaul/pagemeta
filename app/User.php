<?php

namespace PageMeta;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notify', 'email', 'password', 'api_key', 'requests_starts_at', 'requests_per_month', 'requests_left',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'requests_starts_at', 'created_at', 'updated_at', 'deleted_at'
    ];
}

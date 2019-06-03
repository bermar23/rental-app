<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'is_restricted', 
        'is_verified', 
        'accepted_terms_at', 
        'accepted_privacy_at', 
        'mobile_number', 
        'password',
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
        'accepted_terms_at' => 'datetime',
        'accepted_privacy_at' => 'datetime',
    ];

    protected $primaryKey = "user_id";

    /**
     * Get the transactions for user.
     */
    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}

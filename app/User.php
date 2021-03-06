<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function stickers()
    {
        return $this->hasMany(Sticker::class);
    }

    public function trades()
    {
        return $this->hasMany(Trade::class);
    }
    
    /*
    public function userTrades()
    {
        return $this->belongsToMany(Trade::class);
    }
    */
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

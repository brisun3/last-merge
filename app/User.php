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
<<<<<<< HEAD
        'name', 'email', 'password',
=======
<<<<<<< HEAD
        'name', 'ucountry','utype','email', 'password','username'
=======
        'name', 'email', 'password',
>>>>>>> 0e984abf5beb29d03b5b5167e7cf4e37c0f627f9
>>>>>>> 60a2a5eb58611068f4fae03b4582bb0b291f8d79
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function misss(){
        return $this->hasMany('App\Miss');
    }
    public function ptmisss(){
        return $this->hasMany('App\Ptmiss');
    }
    public function baoyangs(){
        return $this->hasMany('App\Baoyang');
    }
=======
>>>>>>> 60a2a5eb58611068f4fae03b4582bb0b291f8d79

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD
=======
>>>>>>> 0e984abf5beb29d03b5b5167e7cf4e37c0f627f9
>>>>>>> 60a2a5eb58611068f4fae03b4582bb0b291f8d79
}

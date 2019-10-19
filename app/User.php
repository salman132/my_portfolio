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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function settings(){
        return $this->hasOne('App\Settings');
    }

    public function skills(){
        return $this->hasMany('APP\Skill');
    }
    public function faqs(){
        return $this->hasMany('App\Faq');
    }
    public function about(){
        return $this->hasOne('App\About');
    }
    public function service(){
        return $this->hasMany('App\Service');
    }
    public function projects(){
        return $this->hasMany('App\Project');
    }
    public function category(){
        return $this->hasMany('App\Category');
    }


}

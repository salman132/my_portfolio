<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function user(){
        return $this->belongsToMany('App\User');
    }
    public function projects(){
        return $this->belongsToMany('App\Project');
    }
}

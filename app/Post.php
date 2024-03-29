<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['post', 'user_id'];

    public function user(){
        return $this->hasOne('App\User');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
}

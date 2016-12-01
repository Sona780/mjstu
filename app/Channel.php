<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'name', 'description', 'admin',
    ];
    public function videos(){
        return $this->hasMany('App\Video','channel');
    }
    public function users(){
        return $this->belongsToMany('App\User','subscriptions');
    }
}

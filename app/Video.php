<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title', 'description', 'url', 'owner', 'channel',
    ];
    public function channel(){
        return $this->belongsTo('App\Channel','channel');
    }
}

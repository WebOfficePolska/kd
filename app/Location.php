<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = ['title', 'address', 'city', 'code'];

    public function collections(){
        return $this->belongsToMany('App\Collection')->withTimestamps();
    }

}

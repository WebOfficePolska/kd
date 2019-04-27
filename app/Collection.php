<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{

    protected $fillable = ['title'];

    public function stones(){
        return $this->belongsToMany('App\Stone');
    }

    public function locations(){
        return $this->belongsToMany('App\Location');
    }



}

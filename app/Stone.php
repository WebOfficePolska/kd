<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stone extends Model
{

    protected $fillable = ['title','thumbnail', 'thumbnail_path'];


    public function collections(){
        return $this->belongsToMany('App\Collection');
    }

    public function additions()
    {
        return $this->hasMany('App\Addition');
    }


    public function options(){
        return $this->hasOne('App\Option');
    }

    public function finish(){
        return $this->hasOne('App\Finish');
    }

    public function stonetype(){
        return $this->hasOne('App\Stonetype');
    }

    public function mediaresources()
    {
        return $this->hasMany('App\Mediaresource');
    }


}

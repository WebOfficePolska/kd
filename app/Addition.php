<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{

    protected $fillable = ['title'];

    public function stone()
    {
        return $this->belongsTo('App\Stone');
    }

}

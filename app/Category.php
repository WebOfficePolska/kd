<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;


class Category extends Node
{

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}

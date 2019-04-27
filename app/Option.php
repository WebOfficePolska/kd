<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

   protected $fillable = ['top', 'floor', 'wall', 'upstairs', 'bathroom', 'fireplace', 'windowsill', 'outide', 'frost'];


    public function stone(){
        return $this->belongsTo('App\Stone');
    }

}

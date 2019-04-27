<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Mediaresource extends Model
{

	protected $fillable = ['stone_id', 'title', 'filename', 'filename_thumb', 'filepath', 'filetype_id', 'filecategory_id', 'sort'];

    public function stone(){
        return $this->belongsTo('App\Stone');
    }

    public function filetype(){
        return $this->hasOne('App\Filetype');
    }

    public function filecategory(){
        return $this->hasOne('App\Filecategory');
    }

}

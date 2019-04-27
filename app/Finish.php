<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finish extends Model
{



	public $timestamps = false;

 	protected $fillable = ['polerowany', 'szlifowany', 'satynowany', 'waterjet', 'waterjet_piaskowany', 'antykowany', 'płomieniowany', 'piaskowany', 'płomieniowany_szczotkowany', 'piaskowany_szczotkowany', 'nacinany', 'corteccia', 'wenghe', 'juta', 'wood', 'canvas', 'tranche', 'jodełka'];


    public function stone(){
        return $this->belongsTo('App\Stone');
    }

}

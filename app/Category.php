<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public $timestamps = true;

    public function players(){
    	return $this->belongsToMany('App\Player','abilities','category','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function ability()
    {
        return $this->hasOne('App\Ability','user_id');
    }

    public function position()
    {
        return $this->belongsToMany('App\Position','player_positions');
    }

    public function category(){
        return $this->belongsToMany('App\Category','abilities','id','category');
    }

}

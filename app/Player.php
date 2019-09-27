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

    public function positions()
    {
        return $this->hasMany('App\PlayerPosition')->select('*');
    }

    public function full_positions()
    {
        return $this->hasMany('App\PlayerPosition')->join('positions','player_positions.position_id','=','positions.id');
    }

    public function full_info()
    {
        return $this->hasOne('App\Ability','user_id')->join('categories','abilities.category','=','categories.id');
    }

}

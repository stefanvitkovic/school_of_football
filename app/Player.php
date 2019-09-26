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

}

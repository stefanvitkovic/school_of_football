<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    public $timestamps = true;
    protected $guarded = [];

    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}

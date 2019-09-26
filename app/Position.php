<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    // protected $table = 'player_positions';
    public $timestamps = true;
    protected $guarded = [];

    // public function player()
    // {
    //     return $this->belongsTo('App\Player');
    // }
}

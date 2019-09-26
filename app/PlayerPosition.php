<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerPosition extends Model
{
    protected $table = 'player_positions';

    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}

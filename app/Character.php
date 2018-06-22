<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function game()
    {
        return $this->belongsTo('App\Game');
    }

    public static function allHeroes()
    {
        $characters = Character::all();
        return $characters;
    } 
}

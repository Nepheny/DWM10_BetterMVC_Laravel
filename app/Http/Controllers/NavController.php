<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Character as Character;

class NavController extends Controller
{
    public function heroes()
    {
        return view('heroes', ['characters' => Character::allHeroes()]);
    }
}

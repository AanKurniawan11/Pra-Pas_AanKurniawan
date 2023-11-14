<?php

namespace App\Http\Controllers;

use App\Models\player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
         return view('player/player',[
            "title" => "player",
            "players" => player::all()
        ]);
    }

    public function show(player $player)
    {
        return view('player.pdetail', [
            "title" => "detail-player",
            "player" => $player 
        ]);
    }
    
}

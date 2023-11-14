<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
         return view('club/all',[
            "title" => "club",
            "clubs" => Club::all()
        ]);
    }

    public function show(Club $club)
    {
        return view('club.detail', [
            "title" => "detail-club",
            "club" => $club 
        ]);
    }
    
}

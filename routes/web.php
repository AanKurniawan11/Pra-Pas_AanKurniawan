<?php

use App\Models\Club;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;




// Route::get('/',function (){
//     return redirect('/home');
// });

Route::get('/home',function (){
    return view('club.all', [
        'title' => "home"
    ]);
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/club', [ClubController::class,'index']);

Route::get('/club/detail/{club}', [ClubController::class, 'show'])->name('clubs.show');

Route::get('/player', [PlayerController::class,'index']);

Route::get('/player/pdetail/{player}', [PlayerController::class, 'show'])->name('players.show');





<?php

use App\Models\Club;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\FixtureController;
use App\Models\Fixture;


Route::get('/home', function () {
    return view('club.all', [
        'title' => "home"
    ]);
});

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Club
Route::get('/club', [ClubController::class, 'index']);
Route::get('/club/detail/{club}', [ClubController::class, 'show'])->name('clubs.show');

// Route untuk Player
Route::get('/player', [PlayerController::class, 'index']);
Route::get('/player/pdetail/{player}', [PlayerController::class, 'show'])->name('players.show');


// Route untuk Fixture
Route::get('/fixture', [FixtureController::class, 'index']);
Route::get('/fixture/fdetail/{fixture}', [FixtureController::class, 'show'])->name('fixtures.show');
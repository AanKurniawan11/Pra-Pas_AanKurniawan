<?php

namespace App\Http\Controllers;
use App\Models\Fixture;

use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index()
    {
         return view('fixture/fixture',[
            "title" => "fixture",
            "fixtures" => fixture::all()
        ]);
    }

    public function show(fixture $Fixture)
    {
        return view('fixture.fdetail', [
            "title" => "detail-fixture",
            "fixture" => $Fixture
        ]);
    }
    
}


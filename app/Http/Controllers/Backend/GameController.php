<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        $records = Game::all();
        
        return view('backend.layouts.game.index', compact('records'));
    }
}

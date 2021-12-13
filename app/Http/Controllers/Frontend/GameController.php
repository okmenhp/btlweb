<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameConfig;
use App\Models\GameType;
use App\Models\GameGameType;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        $games = Game::all();

        return view('frontend.game.listgame', compact('games'));
    }

    public function detail(Request $request){
        $id = $request->all()['id'];
        $game = Game::where('id', $id)->first();
        $types = GameGameType::where('game_id', $game->id)->get();
            $game_types = array();
            foreach($types as $key => $type){
                $type_ids[$key] = GameType::find($type->game_type_id)->name;
            }
            $game_types = implode(', ', $type_ids);
        $game_config = GameConfig::find($game->game_config_id);

        return view('frontend.game.overview', compact('game', 'game_types', 'game_config'));
    }
}

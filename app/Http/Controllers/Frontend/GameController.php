<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Game;
use App\Models\GameConfig;
use App\Models\GameType;
use App\Models\GameGameType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $comments_arr = Comment::where('game_id',$id)->orderBy('created_at','desc')->get();
        $comments = array();
        foreach($comments_arr as $key => $record){
            $comments[$key]['member_name'] = User::find($record->user_id)->name;
            $comments[$key]['content'] = $record->content;
        }

        return view('frontend.game.overview', compact('game', 'game_types', 'game_config','comments'));
    }

    public function comment(Request $request){
        $input = $request->all();

        Comment::create([
            'user_id' => Auth::user()->id,
            'game_id' => $input['id'],
            'content' => $input['comment']
        ]);

        return response()->json(array('name'=>Auth::user()->name, 'comment'=>$input['comment']));
    }
}

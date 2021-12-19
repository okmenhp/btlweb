<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Game;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request){
        // dd($request->session());
        $articles = Article::paginate(6);
        $tags = array();
        foreach($articles as $key => $article){
            $tags[$key] = explode(',',$article->tags);
        }

        $games = Game::all();
        // video
        $video_first = Video::first();
        $videos = Video::where('id','!=',7)->paginate(2);

        return view('frontend.homepage.index', compact('articles', 'tags', 'games', 'video_first', 'videos'));
    }

    public function search(Request $request){
        $text_search = $request->all()['search_result'];

        $games = Game::where('name','like','%'.$text_search.'%')->get();
        return view('frontend.game.search_result', compact('games','text_search'));
    }
}

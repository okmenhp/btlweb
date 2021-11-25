<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Game;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $articles = Article::paginate(5);
        $games = Game::all();
        // video
        $video_first = Video::first();
        $videos = Video::where('id','!=',7)->paginate(2);

        return view('frontend.homepage.index', compact('articles', 'games', 'video_first', 'videos'));
    }
}

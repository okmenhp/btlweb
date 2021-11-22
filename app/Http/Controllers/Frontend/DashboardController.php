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
        $articles = Article::paginate(4);
        $games = Game::all();
        $videos = Video::all();

        return view('frontend.homepage.index', compact('articles', 'games', 'videos'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy('updated_at','desc')->get();

        $tags = array();
        foreach($articles as $key => $article){
            $tags[$key] = explode(',',$article->tags);
        }

        return view('frontend.article.list', compact('articles','tags'));
    }

    public function detail(Request $request){
        $article = Article::find($request->all()['id']);
        $other_articles = Article::where('id','!=',$article->id)->paginate(5);

        return view('frontend.article.detail', compact('article','other_articles'));
    }
}

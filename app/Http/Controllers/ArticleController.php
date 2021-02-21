<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function addArticle()
    {
        return view('add-article');
    }

    public function createArticle(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return back()->with('article_created', 'Article has been created .');
    }

    public function getArticle()
    {
        $article = Article::orderBy('id', 'DESC')->get();
        return view('articles', compact('article'));
    }
}

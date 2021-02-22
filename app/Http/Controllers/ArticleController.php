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
        $articles = Article::orderBy('id', 'DESC')->get();
        return view('articles', compact('articles'));
    }

    public function getArticleById($id)
    {
        $article = Article::where('id', $id)->first();
        return view('single-article', compact('article'));
    }

    public function deleteArticle($id)
    {
        Article::where('id', $id)->delete();
        return back()->with('article_deleted', 'Article hs been deleted');
    }

    public function editArticle($id)
    {
        $article = Article::find($id);
        return view('edit-article', compact('article'));
    }

    public function updateArticle(Request $request)
    {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return back()->with('article_updated', 'Update has been successfully');
    }
}

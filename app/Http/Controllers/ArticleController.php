<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('published', true)->paginate(10);

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::where('published', true)->findOrFail($id);

        return view('articles.show', compact('article'));
    }
}

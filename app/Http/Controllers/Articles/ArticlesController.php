<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}

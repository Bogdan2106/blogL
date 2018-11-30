<?php

namespace Blog\Http\Controllers;

use Illuminate\Http\Request;
use Blog;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Blog\Article::all();
        return view ('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Blog\Article::find($id);
        return view ('articles.show', compact('article'));
    }
}

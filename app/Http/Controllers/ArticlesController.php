<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->published->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);
        dd($article->created_at->month);
        return $article;
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {

        Auth::user()->articles()->create($request->all());
        \Session::flash('flash_message', 'Your article has been created.');
        return redirect('articles');
    }


    public function edit(Article $article)
    {
    return view('articles.edit', compact('article'));
}

    public function update(Article $article, ArticleRequest $request)
    {

        $article->update($request->all());
        return redirect('articles');
}
}
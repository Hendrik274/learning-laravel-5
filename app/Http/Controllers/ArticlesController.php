<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index()
    {
        return 'get all articles';
    }

    public function show($id){
        $article = Article::find($id);
        return $article;
    }

}
    public function create() {
    return view('articles.create');
}

public function store()
{
$input = Request::all();
    $input['published_at'] = Carbon::now();
    Articles::create($input);
    return redirect('articles');
}
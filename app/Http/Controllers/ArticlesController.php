<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

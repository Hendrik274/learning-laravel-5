<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {

        $name = 'Jeffrey Way';

        return view('views.about')->with('name', $name);
    }
}


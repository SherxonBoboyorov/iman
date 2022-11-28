<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function list()
    {
        $articles = Article::orderBy('created_at', 'DESC')->get();
        return view('front.articles.list', compact('articles'));
    }

    public function show($slug)
     {
        $article = Article::where('slug_uz', $slug)
             ->orWhere('slug_ru', $slug)
             ->orWhere('slug_en', $slug)
             ->first();
        return view('front.articles.show', compact('article'));
     }
}

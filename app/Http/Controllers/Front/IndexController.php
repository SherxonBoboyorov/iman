<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function hompage()
    {

        $sliders = Slider::all();
        $categories = Category::orderBy('created_at', 'DESC')->get()->take(8);
        $articles = Article::orderBy('created_at', 'DESC')->get();

        return view('front.index', compact(
            'sliders',
            'categories',
            'articles'
        ));
    }
}

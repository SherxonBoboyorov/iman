<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Article;
use App\Models\Product;
use App\Models\Page;
use App\Models\Opinion;
use App\Models\Publication;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function hompage()
    {

        $sliders = Slider::all();
        $categories = Category::orderBy('created_at', 'DESC')->get()->take(8);
        $articles = Article::orderBy('created_at', 'DESC')->get();
        $products = Product::orderBy('created_at', 'DESC')->get();
        $pages = Page::all();
        $opinions = Opinion::orderBy('created_at', 'DESC')->get();
        $publications = Publication::orderBy('created_at', 'DESC')->get();

        return view('front.index', compact(
            'sliders',
            'categories',
            'articles',
            'products',
            'pages',
            'opinions',
            'publications'
        ));
    }
}

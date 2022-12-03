<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('front.catalog', compact(
            'categories',
        ));
    }
}

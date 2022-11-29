<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogInsideController extends Controller
{
    public function list()
    {
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.catalog.list', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug_uz', $slug)
             ->orWhere('slug_ru', $slug)
             ->orWhere('slug_en', $slug)
             ->first();

        return view('front.catalog.show', compact('product'));
    }
}

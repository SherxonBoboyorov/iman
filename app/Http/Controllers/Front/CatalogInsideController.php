<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CatalogInsideController extends Controller
{
    public function list($id)
    {
        // $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        $categories = Category::all();
        $products = Product::where('category_id', $id)->orderBy('created_at', 'DESC')->paginate(12);

        return view('front.catalog.list', compact('products', 'categories'));
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

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog($id)
    {
        // $categories = Category::orderBy('created_at', 'DESC')->get();
        $categories = Category::orderBy('created_at', 'DESC')->with('products')->get();
        if($id != 1){
            $products = Product::where('category_id', $id)->orderBy('created_at', 'DESC')->paginate(12);
        }else{
            $data = Category::orderBy('created_at', 'DESC')->first();
            $products = Product::where('category_id', $data->id)->orderBy('created_at', 'DESC')->paginate(12);
        }

        return view('front.catalog', compact(
            'products',
            'categories'
        ));
    }
}

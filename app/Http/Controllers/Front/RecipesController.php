<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Recipenew;
use Illuminate\Http\Request;

class RecipesController extends Controller
{

    public function list()
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->get();
        $recipenews = Recipenew::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.recipes.list', compact('recipenews', 'recipes'));
    }

    public function show($slug)
    {
        $recipenew = Recipenew::where('slug_uz', $slug)
             ->orWhere('slug_ru', $slug)
             ->orWhere('slug_en', $slug)
             ->first();

        return view('front.recipes.show', compact('recipenew'));
    }
}

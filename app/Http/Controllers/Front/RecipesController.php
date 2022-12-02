<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\Recipenew;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function list($id)
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->with('recipenews')->get();
        if($id != 2){
            $recipenews = Recipenew::where('recipe_id', $id)->orderBy('created_at', 'DESC')->paginate(12);
        }else{
            $data = Recipe::orderBy('created_at', 'DESC')->first();
            $recipenews = Recipenew::where('recipe_id', $data->id)->orderBy('created_at', 'DESC')->paginate(12);
        }

        return view('front.recipes.list', compact('recipenews', 'recipes', 'id'));
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

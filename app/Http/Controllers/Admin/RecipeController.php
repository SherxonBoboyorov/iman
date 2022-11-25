<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateRecipe;
use App\Http\Requests\Admin\UpdateRecipe;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->get();
        return view('admin.recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateRecipe  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRecipe $request)
    {
        $data = $request->all();

        if (Recipe::create($data)){
            return redirect()->route('recipe.index')->with('message', 'Recipes created successfully');
        }
        return redirect()->route('recipe.index')->with('message', 'unable to created Recipes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        return view('admin.recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateRecipe  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipe $request, $id)
    {
        $recipe = Recipe::find($id);

        $data = $request->all();

        if ($recipe->update($data)) {
            return redirect()->route('recipe.index')->with('message', 'changed successfully!!!');
        }

        return redirect()->route('recipe.index')->with('message', 'changed no successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);

        if ($recipe->delete()) {
            return redirect()->route('recipe.index')->with('message', "Recipes deleted successfully");
        }
        return redirect()->route('recipe.index')->with('message', "unable to delete recipes");
    }
}

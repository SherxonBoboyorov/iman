<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateRecipenew;
use App\Http\Requests\Admin\UpdateRecipenew;
use App\Models\Recipenew;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RecipenewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipenews = Recipenew::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.recipenew.index',[
            'recipenews' => $recipenews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->get();
        return view('admin.recipenew.create', [
           'recipes' => $recipes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateRecipenew  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRecipenew $request)
    {
        $data = $request->all();

        $data['image'] = Recipenew::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if (Recipenew::create($data)) {
            return redirect()->route('recipenew.index')->with('message', "Recipes news created seccessfully");
        }
        return redirect()->route('recipenew.index')->with('message', "unable to created Recipes news");
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
    public function edit(Recipenew $recipenew)
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->get();

        return view('admin.recipenew.edit', [
            'recipes' => $recipes,
            'recipenew' => $recipenew
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateRecipenew  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipenew $request, $id)
    {
        if (!Recipenew::find($id)) {
            return redirect()->route('recipenew.index')->with('message', "Recipes news not fount");
        }

        $recipenew = Recipenew::find($id);

        $data = $request->all();
        $data['image'] = Recipenew::updateImage($request, $recipenew);

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($recipenew->update($data)) {
            return redirect()->route('recipenew.index')->with('message', "Recipes news changed successfully");
        }
        return redirect()->route('recipenew.index')->with('message', "Unable to update Recipes news");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Recipenew::find($id)) {
            return redirect()->route('recipenew.index')->with('message', "Recipes news not found");
        }

        $recipenew = Recipenew::find($id);

        if (File::exists(public_path() . $recipenew->image)) {
            File::delete(public_path() . $recipenew->image);
        }

        if ($recipenew->delete()) {
            return redirect()->route('recipenew.index')->with('message', "Recipes news deleted successfully");
        }
        return redirect()->route('recipenew.index')->with('message', "unable to delete Recipes news");
    }
}

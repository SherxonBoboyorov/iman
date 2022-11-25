<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateForcelebration;
use App\Http\Requests\Admin\UpdateForcelebration;
use App\Models\Forcelebration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ForcelebrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forcelebrations = Forcelebration::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.forcelebration.index', compact('forcelebrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forcelebration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateForcelebration  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateForcelebration $request)
    {
        $data = $request->all();

        $data['image'] = Forcelebration::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if (Forcelebration::create($data)) {
            return redirect()->route('forcelebration.index')->with('message', "For celebrations created seccessfully");
        }
        return redirect()->route('forcelebration.index')->with('message', "unable to created For celebrations");
    }

    /**
     * Display the specified resource.
     *
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
        $forcelebration = Forcelebration::find($id);
        return view('admin.forcelebration.edit', compact('forcelebration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateForcelebration  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForcelebration $request, $id)
    {
        if (!Forcelebration::find($id)) {
            return redirect()->route('forcelebration.index')->with('message', "For celebrations not fount");
        }

        $forcelebration = Forcelebration::find($id);

        $data = $request->all();
        $data['image'] = Forcelebration::updateImage($request, $forcelebration);

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($forcelebration->update($data)) {
            return redirect()->route('forcelebration.index')->with('message', "For celebrations changed successfully");
        }
        return redirect()->route('forcelebration.index')->with('message', "Unable to update For celebrations");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Forcelebration::find($id)) {
            return redirect()->route('forcelebration.index')->with('message', "For celebrations not found");
        }

        $forcelebration = Forcelebration::find($id);

        if (File::exists(public_path() . $forcelebration->image)) {
            File::delete(public_path() . $forcelebration->image);
        }

        if ($forcelebration->delete()) {
            return redirect()->route('forcelebration.index')->with('message', "For celebrations deleted successfully");
        }
        return redirect()->route('forcelebration.index')->with('message', "unable to delete For celebrations");
    }
}

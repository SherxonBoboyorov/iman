<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateHolidayset;
use App\Http\Requests\Admin\UpdateHolidayset;
use App\Models\Holidayset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class HolidaysetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidaysets = Holidayset::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.holidayset.index', compact('holidaysets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.holidayset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateHolidayset  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHolidayset $request)
    {
        $data = $request->all();

        $data['image'] = Holidayset::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if (Holidayset::create($data)) {
            return redirect()->route('holidayset.index')->with('message', "Holiday sets created seccessfully");
        }
        return redirect()->route('holidaydet.index')->with('message', "unable to created Holiday sets");
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
        $holidayset = Holidayset::find($id);
        return view('admin.holidayset.edit', compact('holidayset'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateHolidayset  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHolidayset $request, $id)
    {
        if (!Holidayset::find($id)) {
            return redirect()->route('holidayset.index')->with('message', "Holiday sets not fount");
        }

        $holidayset = Holidayset::find($id);

        $data = $request->all();
        $data['image'] = Holidayset::updateImage($request, $holidayset);

        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($holidayset->update($data)) {
            return redirect()->route('holidayset.index')->with('message', "Holiday sets changed successfully");
        }
        return redirect()->route('holidayset.index')->with('message', "Unable to update Holiday sets");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Holidayset::find($id)) {
            return redirect()->route('holidayset.index')->with('message', "Holiday sets not found");
        }

        $holidayset = Holidayset::find($id);

        if (File::exists(public_path() . $holidayset->image)) {
            File::delete(public_path() . $holidayset->image);
        }

        if ($holidayset->delete()) {
            return redirect()->route('holidayset.index')->with('message', "Holiday sets deleted successfully");
        }
        return redirect()->route('holidayset.index')->with('message', "unable to delete holiday sets");
    }
}

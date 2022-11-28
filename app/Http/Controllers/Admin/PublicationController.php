<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePublication;
use App\Http\Requests\Admin\UpdatePublication;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'DESC')->get();
        return view('admin.publication.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePublication  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePublication $request)
    {
        $data = $request->all();

        $data['image'] = Publication::uploadImage($request);

        if (Publication::create($data)) {
            return redirect()->route('publication.index')->with('message', "Latest publications created seccessfully");
        }
        return redirect()->route('publication.index')->with('message', "unable to created Latest publications");
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
        $publication = Publication::find($id);
        return view('admin.publication.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePublication  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublication $request, $id)
    {
        if (!Publication::find($id)) {
            return redirect()->route('publication.index')->with('message', "Latest publications not fount");
        }

        $publication = Publication::find($id);

        $data = $request->all();
        $data['image'] = Publication::updateImage($request, $publication);

        if ($publication->update($data)) {
            return redirect()->route('publication.index')->with('message', "Latest publications changed successfully");
        }
        return redirect()->route('publication.index')->with('message', "Unable to update Latest publications");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Publication::find($id)) {
            return redirect()->route('publication.index')->with('message', "Latest publications not found");
        }

        $publication = Publication::find($id);

        if (File::exists(public_path() . $publication->image)) {
            File::delete(public_path() . $publication->image);
        }

        if ($publication->delete()) {
            return redirect()->route('publication.index')->with('message', "Latest publications deleted successfully");
        }
        return redirect()->route('publication.index')->with('message', "unable to delete Latest publications");
    }
}

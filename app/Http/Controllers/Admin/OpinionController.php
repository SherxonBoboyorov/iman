<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOpinion;
use App\Http\Requests\Admin\UpdateOpinion;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opinions = Opinion::orderBy('created_at', 'DESC')->get();
        return view('admin.opinion.index', compact('opinions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.opinion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateOpinion  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOpinion $request)
    {
       $data = $request->all();

        if(Opinion::create($data)) {
             return redirect()->route('opinion.index')->with('message', "Opinion of our gourmets created successfully");
        }
        return redirect()->route('opinion.index')->with('message', "Unable to create Opinion of our gourmets");
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
        $opinion = Opinion::find($id);
        return view('admin.opinion.edit', compact('opinion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateOpinion  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOpinion $request, $id)
    {
        $opinion = Opinion::find($id);

        $data = $request->all();

        if ($opinion->update($data)) {
            return redirect()->route('opinion.index')->with('message', 'changed successfully!!!');
        }

        return redirect()->route('opinion.index')->with('message', 'changed no successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opinion = Opinion::find($id);

        if ($opinion->delete()) {
            return redirect()->route('opinion.index')->with('message', "Opinion of our gourmets deleted successfully");
        }
        return redirect()->route('opinion.index')->with('message', "unable to delete Opinion of our gourmets");
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCorporateclient;
use App\Http\Requests\Admin\UpdateCorporateclient;
use App\Models\Corporateclient;
use Illuminate\Http\Request;

class CorporateclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corporateclients = Corporateclient::orderBy('created_at', 'DESC')->get();
        return view('admin.corporateclient.index', compact('corporateclients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.corporateclient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCorporateclient  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCorporateclient $request)
    {
        // $data = $request->all();

        // if(Corporateclient::create($data)) {
        //      return redirect()->route('corporateclient.index')->with('message', "Corporate clients created successfully");
        // }
        // return redirect()->route('corporateclient.index')->with('message', "Unable to create Corporate clients");
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
        $corporateclient = Corporateclient::find($id);
        return view('admin.corporateclient.edit', compact('corporateclient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateCorporateclient  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCorporateclient $request, $id)
    {
        $corporateclient = Corporateclient::find($id);

        $data = $request->all();

        if ($corporateclient->update($data)) {
            return redirect()->route('corporateclient.index')->with('message', 'changed successfully!!!');
        }

        return redirect()->route('corporateclient.index')->with('message', 'changed no successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Corporateclient;
use Illuminate\Http\Request;

class CorporativeController extends Controller
{
    public function corporative()
    {

        $corporateclients = Corporateclient::all();
        return view('front.to_corporative', compact(
            'corporateclients'
        ));
    }
}

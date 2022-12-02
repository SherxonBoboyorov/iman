<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Callback;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $callbacks = Callback::orderBy('created_at', 'DESC')->get();


        return view('front.contacts', compact(
            'callbacks'
        ));
    }
}

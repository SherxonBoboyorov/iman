<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Forcelebration;
use Illuminate\Http\Request;

class CelebrationController extends Controller
{
    public function list()
    {
        $forcelebrations = Forcelebration::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.celebration.list', compact('forcelebrations'));
    }

    public function show($slug)
    {
        $forcelebration = Forcelebration::where('slug_uz', $slug)
            ->orwhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();
        return view('front.celebration.show', compact('forcelebration'));
    }
}

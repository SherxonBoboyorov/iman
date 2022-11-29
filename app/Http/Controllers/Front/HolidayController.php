<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Holidayset;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function list()
    {
        $holidaysets = Holidayset::orderBy('created_at', 'DESC')->paginate(12);
        return view('front.holiday.list', compact('holidaysets'));
    }

    public function show($slug)
    {
        $holidayset = Holidayset::where('slug_uz', $slug)
            ->orwhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();
        return view('front.holiday.show', compact('holidayset'));
    }
}

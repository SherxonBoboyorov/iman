<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Forcelebration extends Model
{
    use HasFactory;

    protected $table = 'forcelebrations';

    protected $fillable = [
        'image',
        'title_ru', 'title_uz', 'title_en',
        'slug_ru', 'slug_uz', 'slug_en',
        'package_ru', 'package_uz', 'package_en',
        'weight',
        'compound_ru', 'compound_uz', 'compound_en',
        'best_before_date_ru', 'best_before_date_uz', 'best_before_date_en',
        'price',
        'description_ru', 'description_uz', 'description_en',
        'meta_title_ru', 'meta_description_ru',
        'meta_title_uz', 'meta_description_uz',
        'meta_title_en', 'meta_description_en',
    ];


    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/forcelebration/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/forcelebration/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $forcelebration): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $forcelebration->image)) {
                File::delete(public_path() . $forcelebration->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/forcelebration/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/forcelebration/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $holidayset->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/forcelebration/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/forcelebration/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}

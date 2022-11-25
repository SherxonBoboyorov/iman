<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Recipenew extends Model
{
    use HasFactory;

    protected $table = 'recipenews';

    protected $fillable = [
        'recipe_id', 'image',
        'title_ru', 'title_uz', 'title_en',
        'slug_ru', 'slug_uz', 'slug_en',
        'description_ru', 'description_uz', 'description_en',
        'frame',
        'meta_title_ru', 'meta_description_ru',
        'meta_title_uz', 'meta_description_uz',
        'meta_title_en', 'meta_description_en',
    ];

    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe', 'recipe_id');
    }

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/recipenew/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/recipenew/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }
        return null;
    }

    public static function updateImage($request, $recipenew): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $recipenew->image)) {
                File::delete(public_path() . $recipenew->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/recipenew/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/recipenew/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $recipenew->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/recipenew/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/recipenew/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}

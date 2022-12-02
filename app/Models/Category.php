<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'image',
        'title_ru', 'title_uz', 'title_en',
        'slug_ru', 'slug_uz', 'slug_en',
        'description_ru', 'description_uz', 'description_en'
    ];


    public function products(){
        return $this->hasMany(Product::class);
    }
    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/category/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/category/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $category): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $category->image)) {
                File::delete(public_path() . $category->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/category/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/category/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $category->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/category/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/category/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}

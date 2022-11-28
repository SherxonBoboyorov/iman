<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';

    protected $fillable = [
        'image',
        'content_ru', 'content_uz', 'content_en',
    ];

    public static function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/publication/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/publication/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return null;
    }

    public static function updateImage($request, $publication): string
    {
        if ($request->hasFile('image')) {
            if (File::exists(public_path() . $publication->image)) {
                File::delete(public_path() . $publication->image);
            }

            self::checkDirectory();

            $request->file('image')
                ->move(
                    public_path() . '/upload/publication/' . date('d-m-Y'),
                    $request->file('image')->getClientOriginalName()
                );
            return '/upload/publication/' . date('d-m-Y') . '/' . $request->file('image')->getClientOriginalName();
        }

        return $publication->image;
    }

    private static function checkDirectory(): bool
    {
        if (!File::exists(public_path() . '/upload/publication/' . date('d-m-Y'))) {
            File::makeDirectory(public_path() . '/upload/publication/' . date('d-m-Y'), $mode = 0777, true, true);
        }

        return true;
    }
}

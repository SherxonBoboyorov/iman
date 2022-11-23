<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Holidayset extends Model
{
    use HasFactory;

    protected $table = 'holidaysets';

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
}

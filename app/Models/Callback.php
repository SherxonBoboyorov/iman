<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
    use HasFactory;

    protected $table = 'callbacks';

    protected $fillable = [
        'title_ru', 'title_uz', 'title_en',
        'phone_number',
        'address_ru', 'address_uz', 'address_en',
        'map'
    ];
}

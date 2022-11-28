<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $table = 'opinions';

    protected $fillable = [
        'name_ru', 'name_uz', 'name_en',
        'company_name_ru', 'company_name_uz', 'company_name_en',
        'content_ru', 'content_uz', 'content_en',
    ];
}

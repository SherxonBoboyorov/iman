<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = [
        'title_ru', 'title_uz', 'title_en'
    ];

    public function recipenews(){
        return $this->hasMany(Recipenew::class);
    }
}

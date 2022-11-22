<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'package_ru' => 'required|max:255',
            'package_uz' => 'required|max:255',
            'package_en' => 'required|max:255',
            'weight' => 'required',
            'compound_ru' => 'required',
            'compound_uz' => 'required',
            'compound_en' => 'required',
            'best_before_date_ru' => 'required|max:255',
            'best_before_date_uz' => 'required|max:255',
            'best_before_date_en' => 'required|max:255',
            'price' => 'required',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'description_en' => 'required',
        ];
    }
}

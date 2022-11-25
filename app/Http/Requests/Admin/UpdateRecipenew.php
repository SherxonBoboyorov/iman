<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecipenew extends FormRequest
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
            'recipe_id' => 'required',
            'title_ru' => 'required|max:255',
            'title_uz' => 'required|max:255',
            'title_ru' => 'required|max:255',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'description_en' => 'required',
            'frame' => 'required'
        ];
    }
}

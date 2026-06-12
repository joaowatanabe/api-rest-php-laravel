<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['sometimes', 'required', 'string', 'max:255'],
            'director' => ['sometimes', 'required', 'string', 'max:255'],
            'genre' => ['sometimes', 'required', 'string', 'max:100'],
            'release_year' => ['sometimes', 'required', 'integer', 'digits:4'],
            'rating' => ['sometimes', 'nullable', 'numeric', 'between:0,10'],
            'synopsis' => ['sometimes', 'nullable', 'string'],
        ];
    }
}
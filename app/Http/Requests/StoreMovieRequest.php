<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'director' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'string', 'max:100'],
            'release_year' => ['required', 'integer', 'digits:4'],
            'rating' => ['nullable', 'numeric', 'between:0,10'],
            'synopsis' => ['nullable', 'string'],
        ];
    }
}
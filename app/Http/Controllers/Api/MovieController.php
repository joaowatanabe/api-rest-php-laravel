<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->paginate(10);

        return MovieResource::collection($movies);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'director' => ['required', 'string', 'max:255'],
            'genre' => ['required', 'string', 'max:100'],
            'release_year' => ['required', 'integer', 'digits:4'],
            'rating' => ['nullable', 'numeric', 'between:0,10'],
            'synopsis' => ['nullable', 'string'],
        ]);

        $movie = Movie::create($validated);

        return new MovieResource($movie);
    }

    public function show(Movie $movie)
    {
        return new MovieResource($movie);
    }

    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title' => ['sometimes', 'required', 'string', 'max:255'],
            'director' => ['sometimes', 'required', 'string', 'max:255'],
            'genre' => ['sometimes', 'required', 'string', 'max:100'],
            'release_year' => ['sometimes', 'required', 'integer', 'digits:4'],
            'rating' => ['nullable', 'numeric', 'between:0,10'],
            'synopsis' => ['nullable', 'string'],
        ]);

        $movie->update($validated);

        return new MovieResource($movie);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return response()->json([
            'message' => 'Filme removido com sucesso.'
        ], 200);
    }
}

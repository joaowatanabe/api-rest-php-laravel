<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
           'id' => $this->id,
            'title' => $this->title,
            'director' => $this->director,
            'genre' => $this->genre,
            'release_year' => $this->release_year,
            'rating' => $this->rating,
            'synopsis' => $this->synopsis,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

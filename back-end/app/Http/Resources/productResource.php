<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'slug' => $this->slug,
            'price' => $this->price,
            'Stock Statue' => $this-> inStock,
            'image' => productImageResource::collection($this->images->first()),
            'category' => categoryResource::collection($this->category) ,
        ];
    }
}

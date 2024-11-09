<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'quantity'=> $this->quantity, // the quantity of the product in the stock
            'statue' => $this->published,
            'Stock Statue' => $this-> inStock,
            'image' => productImageResource::collection($this->images->first()),
            'category' => categoryResource::collection($this->category) ,
        ];
    }
}

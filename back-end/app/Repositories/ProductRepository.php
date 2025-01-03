<?php

namespace App\Repositories;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductRepository
{
    public function paginate(array $params): LengthAwarePaginator
    {
        $query = Product::orderBy('created_at', 'desc');
    
        return $query->paginate($params['per_page'] ?? 10);
    }
    public function getAllProducts()
    {
        return Product::all();
    }
    public function getProductById($id){
        return Product::findOrFail($id);
    }
    public function createProduct($data){
        return Product::create($data);
    }
    public function updateProduct($id,$data)
{
    $product = Product::findOrFail($id);
    $product->update($data);
    return $product;
}
public function deleteProduct($id)
{
    $product = Product::findOrFail($id);
    if($product){
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully.'],200);
    }
    return response()->json(['message' => 'Product not found.'], 404);
}
}
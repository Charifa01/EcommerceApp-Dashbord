<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\productResource;
use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Resources\AllProductsResource;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService )
    {
        $this->productService = $productService;
    }
    public function index(Request $request)
    {
        $params = $request->only(['per_page', 'search']);
        $products = $this->productService->paginate($params);
        return AllProductsResource::collection($products);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->productService->createProduct($data);
        return response()->json(['message' => 'Product created successfully'], 201);
    }
    public function getAllProducts(){
        $products = $this->productService->getAllProducts();
        return AllProductsResource::collection($products);
    }

    public function show(string $id)
    {
       $product =  $this->productService->getProductById($id);
       return new productResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $product = $this->productService->updateProduct($id, $data);
        return new productResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->productService->deleteProduct($id);
        return response()->noContent();
    }
}

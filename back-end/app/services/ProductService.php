<?php 

namespace App\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductService{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function paginate(array $params): LengthAwarePaginator
    {
        return $this->productRepository->paginate($params);
    }
    public function getAllProducts()
    {
        return $this->productRepository->getAllProducts();
    }
    public function getProductById($id)
    {
        return $this->productRepository->getProductById($id);
    }
    public function createProduct($data)
    {
        return $this->productRepository->createProduct($data);
    }
    public function updateProduct($id , $data)
    {
        return $this->productRepository->updateProduct($id , $data);
    }
    public function deleteProduct($id)
    {
        return $this->productRepository->deleteProduct($id);
    }

}
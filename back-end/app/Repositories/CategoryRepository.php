<?php

namespace App\Repositories;
use App\Models\Category;

class CategoryRepository
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
        }
        public function Paginate($params)
        {
            $query = $this->category->orderBy('created_at','desc');
            return $query->paginate($params['per_page'] ?? 10);
        }
        public function getAllCategories()
        {
            return $this->category->all();
        }
        public function getCategoryById($id)
        {
            return $this->category->find($id);
        }
        public function createCategory($data)
        {
            return $this->category->create($data);
        }
        public function updateCategory($id, $data)
        {
            return $this->category->findOrFail($id)->update($data);
        }
        public function deleteCategory($id)
        {
            return $this->category->findOrFail($id)->delete();
        }
       
                            
}
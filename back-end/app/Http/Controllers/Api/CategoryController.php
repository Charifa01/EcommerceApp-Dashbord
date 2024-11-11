<?php

namespace App\Http\Controllers\Api;
use App\Services\CategoryService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\categoryResource;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index(Request $request)
    {
        $params = $request->only(['per_page']);
        $categories = $this->categoryService->paginate($params['per_page'] ?? 10);
        return categoryResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $category = $this->categoryService->createCategory($data);
        return new categoryResource($category);
    }
    public function getAllCategories(){
        $categories = $this->categoryService->getAllCategories();
        return categoryResource::collection($categories);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = $this->categoryService->getCategoryById($id);
        return new categoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $category = $this->categoryService->updateCategory($id, $data);
        return new categoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->categoryService->deleteCategory($id);
    }
}

<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function getAllProducts($filters = [], $paginate = false, $perPage = 10)
    {
        $query = Product::with(['category', 'statusRelation']);

        if (!empty($filters['name'])) {
            $query->where('title', 'LIKE', '%' . $filters['name'] . '%');
        }

        if (!empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }

        if (!empty($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        if (!empty($filters['start_date']) && !empty($filters['end_date'])) {
            $query->whereBetween('created_at', [$filters['start_date'], $filters['end_date']]);
        }

        $query->orderBy('created_at', 'desc');

        if ($paginate) {
            return $query->paginate($perPage);
        }

        return $query->get();
    }

    public function getProductById($id)
    {
        return Product::with(['category', 'statusRelation'])->findOrFail($id);
    }

    public function createProduct($data)
    {
        return Product::create($data);
    }

    public function updateProduct($id, $data)
    {
        $model = Product::findOrFail($id);
        $model->update($data);
        return $model;
    }

    public function deleteProduct($id)
    {
        $model = Product::findOrFail($id);
        return $model->delete();
    }

    public function getActiveProducts()
    {
        return Product::active()->with(['category', 'statusRelation'])->get();
    }

    public function getProductsByCategory($categoryId)
    {
        return Product::active()->byCategory($categoryId)->with(['category', 'statusRelation'])->get();
    }
}
<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function getCategories($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['error' => 'Categoria não encontrada']);
        }

        return response()->json($category->products);
    }
}

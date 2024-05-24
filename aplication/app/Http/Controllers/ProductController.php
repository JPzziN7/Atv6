<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function create()
    {
        $category = new Category();
        $category->name = 'Alimentos';
        $category->description = 'Feitos especialmente para saborear';
        $category->status = true;
        $category->save();

        $category2 = new Category();
        $category2->name = 'Eletrônicos';
        $category2->description = 'Feitos especialmente para você';
        $category2->status = true;
        $category2->save();

        $category3 = new Category();
        $category3->name = 'Limpeza';
        $category3->description = 'Feitos especialmente para limpar';
        $category3->status = true;
        $category3->save();
        
        $product = new Product();
        $product->name = 'Arroz';
        $product->description = 'para comer';
        $product->price = 62;
        $product->category()->associate($category);
        $product->save();

        $product = new Product();
        $product->name = 'Feijão';
        $product->description = 'para comer';
        $product->price = 53;
        $product->category()->associate($category);
        $product->save();

        $product = new Product();
        $product->name = 'Notebook';
        $product->description = 'Gamer';
        $product->price = 53;
        $product->category()->associate($category2);
        $product->save();

        $product = new Product();
        $product->name = 'Vassoura';
        $product->description = 'para limpar';
        $product->price = 53;
        $product->category()->associate($category3);
        $product->save();
    }

    public function createCategories()
    {
        

        return 'Categoria salva com sucesso!';
    }
}

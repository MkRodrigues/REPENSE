<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class FemininoController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', 'like', '%Feminino');
        })->get();
        return view('repense.feminino', compact('products'));
    }

    public function single($id)
    {
        return view('repense.visualizarProduto', ['products' => Product::findOrFail($id)]);
    }

    public function searchSize(Request $request)
    {
        $name = $request->query('name');
        $size  = $request->query('size');
        $category = Category::where('name', 'LIKE', "%{$name}%")->first();
        $product = $category->products()->where('size', 'LIKE', "%{$size}%")->get();
        return view('repense.feminino')->with('products', $product);
    }
}

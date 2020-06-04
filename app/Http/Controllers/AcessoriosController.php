<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class AcessoriosController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        // return view('repense.feminino')->with('category', Category::where('gender', 'like', '%Feminino%'));
        // $products = Product::with(['categories' => function ($query) {$query->where('name', 'LIKE', '%Feminino%'); }])->get();
        // dd($products);
        $products = Product::whereHas('categories', function ($query) {
            $query->where('name', 'like', '%Acessorios');
        })->get();
        return view('repense.acessorios', compact('products'));
    }


    public function single($id)
    {
        return view('repense.visualizarProduto', ['products' => Product::findOrFail($id)]);
    }


    public function searchSize(Request $request){
        $name = $request->query('name');
        $size  = $request->query('size');
        $category = Category::where('name', 'LIKE', "%{$name}%")->first();
        $product = $category->products()->where('size' , 'LIKE' , "%{$size}%")->get();
        return view('repense.acessorios')->with('products' , $product);
    }
}

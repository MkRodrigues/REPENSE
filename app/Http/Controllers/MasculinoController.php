<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MasculinoController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = Product::whereHas('categories', function ($query) {
            $query->where('gender', 'like', '%Masculino');
        })->get();
        return view('repense.masculino', compact('products'));
    }


    public function single($id)
    {
        return view('repense.visualizarProduto', ['products' => Product::findOrFail($id)]);
    }
}

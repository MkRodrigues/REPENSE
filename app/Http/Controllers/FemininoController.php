<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FemininoController extends Controller
{
    // //
    private $product;

    public function __construct(Product $product)
    {
        $this->product=$product;
    
    }

    public function index()
    {
          return view('repense.feminino')->with('products', Product::all());
    }

    public function single($id)
    {
         

        
return view('repense.visualizarProduto', ['products' => Product::findOrFail($id)]);
    }
   
}



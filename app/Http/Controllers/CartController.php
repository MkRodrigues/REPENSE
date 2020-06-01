<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index(){

        $cart = session()->has('cart') ? session()->get('cart') :[];

        // $cart = session()->has('cart') ? session()->get('cart'): [];
        return view('repense.cart',compact('cart'));
    }



    public function add (Request $request){
        $products=$request->get('products');

        if(session()->has('cart')){

            // $product = session()->get('cart');
            // $productId = array_column($product,'id');

            // if(in_array($product['id'],$productId)){
            //     $this->productIncrement($product['id'],$product['quantity'],$product);
            //     session()->put('cart',$product);
            // }else{
            session()->push('cart',$products);
            // }
        }
        else{
            $product[]=$products;
            session()->put('cart',$product);

        }

        // flash('Produto Adcicionado no carrinho')->sucess();
        return redirect()->route('cart.index');
    }




    public function remove($id){

        if(!session()->has('cart'))
        return redirect()->route('cart.index');
        
        $product = session()->get('cart');

        $product = array_filter($product,function($line) use($id){
            return $line ['id']!=$id;

        });

        session()->put('cart',$product);
        return redirect()->route('cart.index');
    
}


    // public function productIncrement($id,$size,$quantity,$product){

    //     $product = array_map(function() use($id,$quantity){
    //         if($id == $line && $size == $line ){
    //             $line['quantity'] += $quantity;
    //         }
    //         return $line;
    //     },$product);
    //     return $product;
    // }




}


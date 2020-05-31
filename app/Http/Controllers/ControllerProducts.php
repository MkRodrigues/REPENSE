<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ControllerProducts extends Controller
{
    public function __construct()
    {
        $this->middleware('VerifyCategoriesCount')->only(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index')->with('products', Product::all())->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create')->with('categories', Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {

        $image = $request->image->store('products');
        $products = Product::create($request->all());

        $products->image = $image;
        $products->save();

        session()->flash('success', 'Produto Criado com sucesso');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.products.show', ['products' => Product::findOrFail($id)])->with('categories', Category::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit')->with('products', $product)->with('categories' , Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProductRequest $request, Product $product)
    {
        //

        $product->update([
            'name' => $request->name ,
            'quantity' => $request->quantity ,
            'size' => $request->size ,
            'category_id' => $request->category_id ,
            'color' => $request->color ,
            'price' => $request->price ,
            'description' => $request->description
        ]);

        if($request->image){
            Storage::delete($product->image);


            $image =  $request->image->store('products');

            $product->image = $image;
            $product->save();
        }


        session()->flash('success', 'Produto Editado com sucesso');

        return redirect(route('products.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $product = Product::withTrashed()->where('id', $id)->firstOrFail();

        if($product->trashed()){
            Storage::delete($product->image);
            $product->forceDelete();
            session()->flash('success', 'Produto removido com sucesso!');
        }else{
            $product->delete();
            session()->flash('success', 'Produto movido para lixeira com sucesso!');
        }
        return redirect()->back();
    }


    public function trashed(){
        return view('admin.products.index')->with('products' , Product::onlyTrashed()->get());

    }


    public function restore($id){
        $product = Product::withTrashed()->where('id' , $id)->firstOrFail();
        $product->restore();
        session()->flash('success' , 'Produto ativado com sucesso');
        return redirect()->back();
    }
}

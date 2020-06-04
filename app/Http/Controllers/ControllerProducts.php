<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class ControllerProducts extends Controller
{
    public function __construct()
    {
        $this->middleware('VerifyCategoriesCount')->only(['create', 'store']);
    }

    public function index(Request $request)
    {

        $products = Product::orderBy('id', 'DESC')->paginate(3);
        return view('admin.products.index', compact('products'))->with('i', ($request->input('page', 1) - 1) * 3);
        // return view('admin.products.index' , ['products'=>$products]);
    }

    public function create()
    {
        return view('admin.products.create')->with('categories', Category::all());
    }

    public function store(CreateProductRequest $request)
    {
        $image = $request->image->store('products');
        $products = Product::create($request->all());

        $products->image = $image;
        $products->save();

        session()->flash('success', 'Produto Criado com sucesso');

        return redirect(route('products.index'));
    }

    public function show($id)
    {
        return view('admin.products.show', ['products' => Product::findOrFail($id)]);
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit')->with('products', $product)->with('categories', Category::all());
    }

    public function update(EditProductRequest $request, Product $product)
    {
        $product->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'size' => $request->size,
            'category_id' => $request->category_id,
            'color' => $request->color,
            'price' => $request->price,
            'description' => $request->description
        ]);

        if ($request->image) {
            Storage::delete($product->image);


            $image =  $request->image->store('products');

            $product->image = $image;
            $product->save();
        }

        session()->flash('success', 'Produto Editado com sucesso');

        return redirect(route('products.index'));
    }

    public function destroy($id)
    {
        $product = Product::withTrashed()->where('id', $id)->firstOrFail();

        if ($product->trashed()) {
            Storage::delete($product->image);
            $product->forceDelete();
            session()->flash('success', 'Produto removido com sucesso!');
        } else {
            $product->delete();
            session()->flash('success', 'Produto movido para lixeira com sucesso!');
        }
        return redirect()->back();
    }


    public function trashed(Product $product)
    {
        return view('admin.products.trashed')->with('products', Product::onlyTrashed()->get());

    }



    public function restore($id)
    {
        $product = Product::withTrashed()->where('id', $id)->firstOrFail();
        $product->restore();
        session()->flash('success', 'Produto ativado com sucesso');
        return redirect()->back();
    }



}

<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Http\Request;

class ControllerCategory extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(3);
        return view('admin.categories.index', compact('categories'))->with('i', ($request->input('page', 1) - 1) * 3);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
            'type' => $request->type
        ]);

        session()->flash('success', 'Categoria Criada com sucesso');
        return redirect(route('categories.index'));
    }


    public function show($id)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit')->with('categories', $category);
    }

    public function update(EditCategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'type' => $request->type
        ]);

        session()->flash('success', 'Categoria alterada  com sucesso');

        return redirect(route('categories.index'));
    }

    public function destroy($id)
    {
        $category  = Category::withTrashed()->where('id', $id)->firstOrFail();

        if ($category->trashed()) {
            $category->forceDelete();
            session()->flash('success', 'Categoria removido com sucesso');
        } else {
            $category->delete();
            session()->flash('success', 'Categoria movido para a lixeira com sucesso');
        }

        return redirect()->back();
    }


    public function trashed()
    {
        return view('admin.categories.trashed')->with('categories', Category::onlyTrashed()->get());
    }

    public function restore($id)
    {
        $category = Category::withTrashed()->where('id', $id)->firstOrFail();
        $category->restore();
        session()->flash('success', 'Categoria ativado com sucesso');
        return redirect()->back();
    }
}

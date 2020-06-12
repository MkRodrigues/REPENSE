<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('id', 'DESC')->paginate(2);
        return view('admin.administrador.index', compact('users'))->with('i', ($request->input('page', 1) - 1) * 2);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin.administrador.show', ['users' => User::findOrFail($id)]);
    }

    public function edit(User $user)
    {
        return view('admin.administrador.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

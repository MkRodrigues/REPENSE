<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // $users = DB::table('users')->paginate(2);
        // return view('admin.administrador.index' , ['users'=>$users])->with('users' , User::all());
        $users = User::orderBy('id', 'DESC')->paginate(2);
        return view('admin.administrador.index', compact('users'))->with('i', ($request->input('page', 1) - 1) * 2);
        // return view('user.index', ['users' => $users]);
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

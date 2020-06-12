<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\EditRegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.administrador.index')->with('users', User::all());
    }

    // Tela de Edição de dados administrador
    public function edit()
    {
        return view('admin.perfil.edit')->with('user', auth()->user());
    }

    // Atualiza o perfil do administrador
    public function update(EditProfileRequest $request)
    {
        $user = auth()->user();
        $user->name = $request->name;

        if ($user->email != $request->email) {
            $user->email = $request->email;
            $user->email_verified_at = null;
        }

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        session()->flash('success', 'Usuário alterado com sucesso');
        return redirect(route('admin.index'));
    }

    public function changeAdmin(User $user)
    {
        if ($user->isAdmin())
            $user->role = 'user';
        else
            $user->role = 'admin';

        $user->save();
        session()->flash('sucess', 'Usuario alterado com sucesso');
        return redirect()->back();
    }

    // View Minha conta
    public function profileUser(User $user)
    {
        return view('repense.perfil')->with('user', auth()->user());
    }

    public function updateregister(Request $request, User $user)
    {
        $user = auth()->user();

        $user->name = $request->name;
        $user->birth_date = $request->birth_date;
        $user->cpf = $request->cpf;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->address_number = $request->address_number;
        $user->zipcode = $request->zipcode;
        $user->state = $request->state;
        $user->phone = $request->phone;

        if ($user->email != $request->email) {
            $user->email = $request->email;
            $user->email_verified_at = null;
        }

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        session()->flash('success', 'Perfil atualizado com sucesso');
        $user->save();
        return redirect()->back();
    }
}

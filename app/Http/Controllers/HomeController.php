<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('repense.index');
    }

    public function profile()
    {
        return view('repense.perfil')->with('user', auth()->user());
    }
}

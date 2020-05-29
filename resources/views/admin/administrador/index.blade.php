@extends('admin.templates.main'),

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <div class="">
            <h2 class="mb-4">Administrador</h2>
        </div>
        <img class="imagem-paginas" src="{{ asset('assets/admin/admin.svg') }}" alt="">
    </div>

    <div class="mr-4 mt-2">
        <table class="table">
            <thead>
                <tr class="text-center table">
                    <th scoope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach($users as $user)
                <tr class="text-center">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('admin.show', $user->id)}}" class="btn btn-primary btn-sm">Mostrar</a>
                        <a href="{{route('admin.edit', $user->id)}}" class="btn btn-warning btn-sm text-white">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
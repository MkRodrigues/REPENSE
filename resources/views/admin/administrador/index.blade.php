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
                @if($user->id != auth()->user()->id)
                <tr class="text-center">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{route('users.change-admin' , $user->id)}}" class="d-inline" method="POST"
                            onsubmit="return confirm('Vocé tem certeza que dseja alterar para Admin ? ')">
                            @csrf
                            @method('PUT')

                            <button type="submit"
                                class="btn btn-sm {{$user->isAdmin() ? 'btn-danger' : 'btn-primary'}}">
                                {{$user->isAdmin() ? 'Remover Admin' : 'Adicionar Admin'}}
                            </button>
                        </form>
                        {{-- <a href="{{route('admin.show', $user->id)}}" class="btn btn-primary btn-sm">Mostrar</a> --}}
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        {{$users->links()}}

    </div>
</div>
@endsection

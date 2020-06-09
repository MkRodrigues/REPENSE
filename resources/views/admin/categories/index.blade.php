@extends('admin.templates.main')

@section('content')
<div class="container">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-4">
            <div class="">
                <h2 class="mb-4">Categorias</h2>
                <div class="">
                    <a href="{{route('categories.create')}}" class="btn btn-primary left">Nova Categoria</a>
                    <a href="{{route('categories.trashed')}}" class="btn btn-danger right">Lixeira</a>
                </div>
            </div>
            <img class="imagem-paginas" src="{{ asset('assets/admin/categoria.svg') }}" alt="">
        </div>
        <div class="mr-4 mt-2">
            <table class="table">
                <thead>
                    <tr class="text-center table">
                        <th scoope="col">Id</th>
                        <th scope="col">Nome Categoria</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($categories as $category)
                    <tr class="text-center">
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->type}}</td>
                        <td>
                            @if(!$category->trashed())
                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning btn-sm text-white">Editar</a>
                            @else
                            <form action="{{ route('category.restore', $category->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer restaurar este dado?')">
                                @csrf
                                @method('PUT')
                                <button type="submit" href="#" class="btn btn-primary btn-sm ">Reativar</button>
                            </form>
                            @endif
                            <form action="{{route('categories.destroy', $category->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer apagar?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Mover pra lixeira</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- @if(!$category->trashed()) --}}
            {{$categories->links()}}
            {{-- @else --}}
            {{-- @endif --}}
        </div>
    </div>
    @endsection

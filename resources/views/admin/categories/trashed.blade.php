@extends('admin.templates.main')

@section('content')
<div class="container">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-4">
            <div class="">
                <h2 class="mb-4"> Lixeira Categorias</h2>
                <div class="">
                    <a href="{{route('categories.index')}}" class="btn btn-primary">Voltar</a>
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
                            <form action="{{route('categories.destroy', $category->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer apagar?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"> Excluir</button>
                            </form>

                            <form action="{{ route('category.restore', $category->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Você tem certeza que quer restaurar este dado?')">
                                @csrf
                                @method('PUT')
                                <button type="submit" href="#" class="btn btn-primary btn-sm ">Reativar</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @endsection

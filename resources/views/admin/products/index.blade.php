@extends('admin.templates.main'),

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <div class="">
            <h2 class="mb-4">Produtos</h2>
            <div class="">
                <a href="{{route('products.create')}}" class="btn btn-primary left">Novo Produto</a>
                <a href="{{route('categories.trashed')}}" class="btn btn-danger right">Lixeira</a>
            </div>
        </div>
        <img class="imagem-paginas" src="{{ asset('assets/admin/produto.svg') }}" alt="">
    </div>

    <div class="mr-4 mt-2">
        <table class="table">
            <thead>
                <tr class="text-center table">
                    <th scoope="col">Id</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach($products as $product)
                <tr class="text-center">
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>
                        <a href="{{route('products.show', $product->id)}}" class="btn btn-primary btn-sm">Mostrar</a>
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning btn-sm text-white">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>

                        {{-- <a href="showOne/{{$product->id}}" href class="btn btn-primary btn-sm">Mostrar</a>
                        <a href="showOne/{{$product->id}}/edit" class="btn btn-warning btn-sm text-white">Editar</a>
                        <a href="showOne/{{$product->id}}/delete" class="btn btn-danger btn-sm">Excluir</a> --}}
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection
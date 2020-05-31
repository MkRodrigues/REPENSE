@extends('admin.templates.main'),

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <div class="">
            <h2 class="mb-4">Produtos</h2>
            <div class="">
                <a href="{{route('products.create')}}" class="btn btn-primary left">Novo Produto</a>
                <a href="{{route('products.trashed')}}" class="btn btn-danger right">Lixeira</a>
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

                        @if(!$product->trashed())
                        <a href="{{route('products.show', $product->id)}}" class="btn btn-primary btn-sm">Mostrar</a>
                        <a href="{{route('products.edit', $product->id)}}"
                            class="btn btn-warning btn-sm text-white">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                        @else
                        <form action="{{ route('products.restore', $product->id) }}" class="d-inline" method="POST"
                            onsubmit="return confirm('Você tem certeza que quer reativar?')">
                            @csrf
                            @method('PUT')
                            <button type="submit" href="#" class="btn btn-primary btn-sm ">Reativar</button>
                        </form>
                        @endif
                        <form action="{{ route('products.destroy', $product->id) }}" class="d-inline" method="POST"
                            onsubmit="return confirm('Você tem certeza que quer apagar?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="#" class="btn btn-primary btn-sm ">
                                {{ $product->trashed() ? 'Remover' : 'Mover para Lixeira' }}</a>
                        </form>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>


    </div>
</div>
@endsection

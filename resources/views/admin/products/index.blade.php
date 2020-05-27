@extends('admin.templates.main')
@section('content')
<h2> Lista de Produtos</h2>


<div class="d-flex mb-2 justify-content-end">
    <a href="{{route('products.create')}}" class="btn btn-success right"> Criar Produtos</a>
</div>

<div>
    <ul class="list-group col-md-10 ">
        @foreach($products as $product)
        <li class="list-group-item m-md-2">
            <span>Nome Produto: {{$product->name}} / Quantidade: {{$product->quantity}}</span>
            <a href="{{route('products.show' , $product->id)}}" class="btn btn-primary btn-sm float-right ml-1">Mostrar</a>
            <a href="{{route('products.edit' , $product->id)}}" class="btn btn-primary btn-sm float-right ml-1">Editar</a>
            <a href="#" class="btn btn-primary btn-sm float-right ml-1">Excluir</a>
        </li>
        @endforeach
    </ul>
</div>


@endsection
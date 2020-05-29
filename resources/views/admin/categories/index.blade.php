@extends('admin.templates.main')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center py-4">
        <div class="">
            <h2 class="mb-4">Categorias</h2>
            <div class="">
                <a href="{{route('categories.create')}}" class="btn btn-primary left">Criar Categoria</a>
                <a href="{{route('categories.trashed')}}" class="btn btn-danger right">Lixeira</a>
            </div>
        </div>
        <img class="imagem-paginas" src="{{ asset('assets/admin/categoria.svg') }}" alt="">
    </div>

    <ul class="list-group col-md-10">
        @foreach($categories as $categoria)
        <li class="list-group-item m-md-2">
            <span>{{$categoria->name}} / Genero: {{$categoria->gender}}</span>
            @if(!$categoria->trashed())
            <a href="{{route('categories.edit' , $categoria->id)}}" class="btn btn-primary btn-sm float-right ml-1">
                Editar</a>
            @endif
            <form action="{{route('categories.destroy', $categoria->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Voce tem certeza que quer apagar ?')">
                @csrf
                @method('DELETE')
                <button type="submit" href="#" class="btn btn-danger btn-sm float-right ml-1">
                    {{$categoria->trashed() ? 'Remover' : 'Mover pra lixeira'}}</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
@endsection
@extends('admin.templates.main')
@section('content')



<h2> Categorias </h2>

<div class="d-flex mb-2 justify-content-end">
    <a href="{{route('categories.create')}}" class="btn btn-success right"> Criar Categorias</a>
    <a href="{{route('categories.trashed')}}" class="btn btn-success right"> Lixeira Categorias</a>
</div>

<ul class="list-group col-md-10">
    @foreach($categories as $categoria)
    <li class="list-group-item m-md-2">
        <span>{{$categoria->name}} / Genero: {{$categoria->gender}}</span>
        @if(!$categoria->trashed())
        <a href="{{route('categories.edit' , $categoria->id)}}" class="btn btn-primary btn-sm float-right ml-1">
            Editar</a>
        @endif
        <form action="{{route('categories.destroy', $categoria->id)}}" class="d-inline" method="POST"
            onsubmit="return confirm('Voce tem certeza que quer apagar ?')">
            @csrf
            @method('DELETE')
            <button type="submit" href="#" class="btn btn-danger btn-sm float-right ml-1">
                {{$categoria->trashed() ? 'Remover' : 'Mover pra lixeira'}}</button>
        </form>
    </li>
    @endforeach
</ul>

@endsection
@extends('admin.templates.main')
@section('content')



<h2> Categorias </h2>

<div class="d-flex mb-2 justify-content-end">
    <a href="{{route('categories.create')}}" class="btn btn-success right"> Criar Categorias</a>
</div>

<ul class="list-group col-md-10">
    @foreach($categories as $categoria)
    <li class="list-group-item m-md-2">
        <span>{{$categoria->name}} / Genero: {{$categoria->gender}}</span>
        <a href="{{route('categories.edit' , $categoria->id)}}" class="btn btn-primary btn-sm float-right ml-1">
            Editar</a>
        <a href="" class="btn btn-primary btn-sm float-right ml-1"> Excluir</a>
    </li>
    @endforeach
</ul>

@endsection
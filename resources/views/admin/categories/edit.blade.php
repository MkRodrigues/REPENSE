@extends('admin.templates.main')
@section('content')

<form action="{{route('categories.update' , $categories->id)}}" method="POST">
    <h2 class="m-md-2"> Alterar Categoria </h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-group">
            @foreach($errors->all() as $error)
            <li class="list-group text-danger">{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf

    @method('PUT')
    <div class="row">
        <div class="form-group col-md-7">
            <label class="control-label"> Nome Categoria </label>
            <div>
                <input type="text" class="form-control" placeholder="Nome Categoria" name="name" value="{{$categories->name}}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="form-group col-md-7">
            <label class="control-label"> Nome Categoria </label>
            <div>
                <input type="text" class="form-control" placeholder="Genero" name="gender" value="{{$categories->gender}}">
            </div>
        </div>
    </div>

   

    <button type="submit" class="btn-primary"> Confirmar </button>
</form>
@endsection
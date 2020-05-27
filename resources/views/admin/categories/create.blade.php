@extends('admin.templates.main')
@section('content')
<h2> Cadastro de Categoria</h2>

<form action="{{route('categories.store')}}" method="POST">
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
    <div class="row">
        <div class="form-group col-md-7">
            <label class="control-label"> Nome Categoria </label>
            <div>
                <input type="text" class="form-control" name="name" value="{{old('name')}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-7">
            <label class="control-label"> Genero</label>
            <div >
                <input type="text" class="form-control" name="gender" value="{{old('gender')}}">
            </div>
        </div>
    </div>


    <button type="submit" class="btn-primary"> Cadastrar</button>
</form>
@endsection
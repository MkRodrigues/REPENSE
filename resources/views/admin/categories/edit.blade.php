@extends('admin.templates.main')

@section('content')
<div class="container pr-5">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2 class="mb-4">Editar Categoria</h2>
        <div>
            <img class="imagem-outros" src="{{ asset('assets/admin/categoria.svg') }}" alt="">
        </div>
    </div>
    <form action="{{route('categories.update', $categories->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-md-6"> <label class="control-label"> Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$categories->name}}">
                <small><span class="text-danger">{{ $errors->first('name') }}</span></small>
            </div>

            <div class="form-group col-md-6"> <label class="control-label"> Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{$categories->type}}">
                <small><span class="text-danger">{{ $errors->first('type') }}</span></small>
            </div>
        </div>

        <div class="">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-danger" href="{{ route('categories.index') }}">Cancelar</a>
        </div>

    </form>
</div>
@endsection
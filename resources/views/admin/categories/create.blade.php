@extends('admin.templates.main')

@section('content')
<div class="container pr-5">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2 class="mb-4">Nova Categoria</h2>
        <div>
            <img class="imagem-outros" src="{{ asset('assets/admin/categoria.svg') }}" alt="">
        </div>
    </div>
    <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="form-group col-md-8"> <label class="control-label">Nome Categoria</label> <select name="name"
                    id="" class="form-control @error('name') is-invalid @enderror">
                    <option value="Acessorios"> Acessorios</option>
                    <option value="Feminino"> Feminino</option>
                    <option value="Masculina"> Masculina</option>
                    <option value="Neutro"> Neutro</option>
                </select>
                <small><span class="text-danger">{{ $errors->first('name') }}</span></small>
            </div>


            <div class="form-group col-md-4"> <label class="control-label"> Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                    value="{{old('type')}}">
                <small><span class="text-danger">{{ $errors->first('type') }}</span></small>
            </div>
        </div>

        <div class="">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-danger" href="{{ route('categories.index') }}">Cancelar</a>
        </div>

    </form>
</div>
@endsection

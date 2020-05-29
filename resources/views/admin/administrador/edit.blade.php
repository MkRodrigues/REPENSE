@extends('admin.templates.main')

@section('content')
<div class="container pr-5">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2 class="mb-4">Editar Usuário</h2>
        <div>
            <img class="imagem-outros" src="{{ asset('assets/admin/admin.svg') }}" alt="">
        </div>
    </div>

    <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md">
                <label for="">Nome Usuário</label>
                <input class="form-control bg-light" type="text" placeholder="{{$users->name}}" readonly>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Confirmar</button>
            <a class="btn btn-danger" href="{{ route('admin.index') }}">Cancelar</a>
        </div>
    </form>
</div>
@endsection
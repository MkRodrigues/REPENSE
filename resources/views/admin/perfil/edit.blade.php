@extends('admin.templates.main')

@section('content')
<div class="container pr-5">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2 class="mb-4">Editar Perfil</h2>
        <div>
            <img class="imagem-outros" src="{{ asset('assets/admin/moca-admin.svg') }}" alt="">
        </div>
    </div>
    <form action="{{route('perfil.update-profile')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="control-label">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}">
            <small><span class="text-danger">{{ $errors->first('name') }}</span></small>
        </div>

        <div class="form-group">
            <label class="control-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}">
            <small><span class="text-danger">{{ $errors->first('email') }}</span></small>
        </div>
        <div class="form-group">
            <label class="control-label">Senha</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Digite uma nova senha (caso não alterado, sua senha permanecerá a mesma)">
            <small><span class="text-danger">{{ $errors->first('password') }}</span></small>
        </div>
        <div class="">
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a class="btn btn-danger" href="{{ route('admin.index') }}">Cancelar</a>
        </div>
    </form>
</div>
@endsection
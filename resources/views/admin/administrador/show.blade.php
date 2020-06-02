@extends('admin.templates.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <div class="">
            <h2 class="mb-4">{{$users->name}}</h2>
            <div class="">
                <a href="{{route('admin.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        <img class="imagem-paginas" src="{{ asset('assets/admin/admin.svg') }}" alt="">
    </div>

    <h3 class="realce">Dados Pessoais</h3>

    <div class="row">
        <div class="form-group  col-md-6">
            <label for="">Logradouro</label>
            <input class="form-control bg-light" type="text" placeholder="{{$users->address}}" readonly>
        </div>
        <div class="form-group  col-md-4">
            <label for="">Complemento</label>
            <input class="form-control bg-light" type="text" placeholder="{{$users->address_complement}}" readonly>
        </div>
        <div class="form-group  col-md-2">
            <label for="">Número</label>
            <input class="form-control bg-light" type="text" placeholder="{{$users->address_number}}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="form-group  col-md-5">
            <label for="">CEP</label>
            <input class="form-control bg-light" type="text" placeholder="{{$users->zipcode}}" readonly>
        </div>
        <div class="form-group  col-md-7">
            <label for="">Estado</label>
            <input class="form-control bg-light" type="text" placeholder="{{$users->state}}" readonly>
        </div>
    </div>

    <h3 class="realce">Contato</h3>

    <div class="row">
        <div class="form-group  col-md-6">
            <label for="">E-mail</label>
            <input class="form-control bg-light" type="text" placeholder="{{$users->email}}" readonly>
        </div>
        <div class="form-group  col-md-6">
            <label for="">Telefone</label>
            <input class="form-control bg-light" type="text" placeholder="{{$users->phone}}" readonly>
        </div>
    </div>

</div>
@endsection
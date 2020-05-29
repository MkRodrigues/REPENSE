@extends('admin.templates.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <div class="">
            {{-- <h2 class="mb-4">{{$variavell->campo}}</h2> --}}
            <div class="">
                <a href="{{route('report.index')}}" class="btn btn-primary">Voltar</a>
            </div>
        </div>
        <img class="imagem-paginas" src="{{ asset('assets/admin/relatorio.svg') }}" alt="">
    </div>
</div>
@endsection
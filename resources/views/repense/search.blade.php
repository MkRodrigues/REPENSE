@extends('repense.templates.main')

@section('content')
<section class="pesquisa-container">
    <div class="pesquisa-info">
        <h2>{{$title}}</h2>
        <p>Estes foram todos os produtos encontrados para o termo pesquisado</p>
    </div>
    <div class="pesquisa-produtos">
        @forelse($products as $product)
        <div class="pesquisa-produto">
            <img src="{{ asset('storage/'.$product->image) }}">
            <div class="pp-info">
                <a href="{{ route('repense.single', $product->id) }}">{{ $product->name }}</a>
                <span>R$ {{$product->price}}</span>
            </div>
        </div>
        @empty
        <div class="pesquisa-falha">
            <p>Não foi encontrado nenhum termo para a pesquisa <strong>{{request()->query('s')}}</strong></p>
        </div>
        @endforelse
    </div>
</section>
@endsection
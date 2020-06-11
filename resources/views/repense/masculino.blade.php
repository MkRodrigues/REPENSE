@extends('repense.templates.main')

@section('content')
<div class="header">
    <img class="acessorio-img" src="{{asset('assets/repense/masculinos.png')}}" alt="Mulher deitada">
    <h2>Masculino</h2>
</div>

<div class="main-acessorios">
    <div class="col1">

        <section>
            <div class="categoria-head">
                <span>Categorias</span>
            </div>
            <div class="categoria-body">
                <ul>
                    <li>Calças</li>
                    <li>Camisetas</li>
                </ul>
            </div>
        </section>

        <section>
            <div class="tamanho-head">
                <span>Tamanho</span>
            </div>

            <div class="tamanho-body">
                <form action="{{route('masculino-search')}}">
                    <select class="customizar-select" name="size">
                        <option value="P"> P</option>
                        <option value="M"> M</option>
                        <option value="G"> G</option>
                    </select>
                    <input name="name" type="hidden" value="Feminino">
                    <button class="btn-tamanho" type="submit"> Buscar </button>
                </form>
            </div>

        </section>
    </div>

    <div class="col2">
        <p>A verdadeira medida de um homem não é como ele se comporta em momentos de conforto e conveniência, mas como ele se mantém em tempos de controvérsia e desafio.</p>
        <section class="produtos">
            @foreach($products as $product)
            <div class="prod-item">
                <img src="{{ asset('storage/'.$product->image) }}">
                <a href="{{ route('repense.single', $product->id) }}" class="prod-titulo">{{ $product->name }}</a>
                <span>R$ {{$product->price}}</span>
            </div>
            @endforeach
        </section>
    </div>

</div>

@endsection

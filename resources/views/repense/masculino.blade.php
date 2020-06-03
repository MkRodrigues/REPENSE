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
            <div class="cor-head">
                <span>Cor</span>
            </div>
            <form class="cor-body" action="">
                <div class="cor-container">
                    <label class="cor-item" style="">
                        <input type="checkbox" checked="checked">
                        <span class="checkbox"></span>
                    </label>

                    <label class="cor-item">
                        <input type="checkbox" checked="checked">
                        <span class="checkbox"></span>
                    </label>

                    <label class="cor-item">
                        <input type="checkbox" checked="checked">
                        <span class="checkbox"></span>
                    </label>
                </div>
            </form>
        </section>

        <section>
            <div class="tamanho-head">
                <span>Tamanho</span>
            </div>

            <div class="tamanho-body">
                <table class="tabela">
                    <tr>
                        <td>PP</td>
                        <td>P</td>
                        <td>M</td>
                    </tr>
                    <tr>
                        <td>G</td>
                        <td>GG</td>
                    </tr>
                </table>
            </div>

        </section>
    </div>
    <div class="col2">
        <p>Padrão de beleza é você se sentir bem, ser linda de alma e coração também.</p>
        <section class="produtos">
            @foreach($products as $product)
            <div class="prod-item">
                <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid">
                <a href="{{ route('repense.single', $product->id) }}"class="prod-titulo">{{ $product->name }}</a>
                <span>R$ {{$product->price}}</span>
            </div>

            @endforeach
            </section>
    </div>
</div>

@endsection

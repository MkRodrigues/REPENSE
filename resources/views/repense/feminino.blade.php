@extends('repense.templates.main')

@section('content')
<div class="header">
    <img class="acessorio-img" src="{{asset('assets/repense/femininos.png')}}" alt="Mulher deitada">
    <h2>Feminino</h2>
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
                    <form action="">
                        <select name="size" id="">
                            <option value="P"> P</option>
                            <option value="M"> M</option>
                            <option value="G"> G</option>
                        </select>
                        <input name="gender" type="hidden" value="Feminino">
                        <button type="submit"> Buscar </button>
                    </form>
                </table>
            </div>

        </section>
    </div>
    <div class="col2">
        <p>Padrão de beleza é você se sentir bem, ser linda de alma e coração também.</p>
        <section class="produtos">
            @foreach($products as $product)

            <div class="prod-item">
                <a href="{{ route('repense.single', $product->id) }}">
                    <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid">
                </a>
                <a href="{{ route('repense.single', $product->id) }}" class="prod-titulo">{{ $product->name }}</a>
                <span>R$ {{$product->price}}</span>
            </div>

            @endforeach
        </section>
    </div>
</div>

@endsection

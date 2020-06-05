@extends('repense.templates.main')

@section('content')
<div class="header">
    <img class="acessorio-img" src="{{asset('assets/repense/neutros.png')}}" alt="criancas de saia">
    <h2>Neutro</h2>
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
                <table class="tabela">
                    <form action="{{route('neutro-search')}}">
                        <select name="size" id="">
                            <option value="P"> P</option>
                            <option value="M"> M</option>
                            <option value="G"> G</option>
                        </select>
                        <input name="name" type="hidden" value="Neutro">
                        <button type="submit"> Buscar </button>
                    </form>
                </table>
            </div>

        </section>
    </div>
    <div class="col2">
        <div class="col2">
            <p>O respeito não vê cor, religião e muito menos orientação sexual. Ele é universal e cabe a nós mesmos lutar pelo direito de todos..</p>
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
</div>

@endsection
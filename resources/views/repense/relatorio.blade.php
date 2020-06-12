@extends('repense.templates.main')

@section('content')
<div class="container-pedido">
    <div class="bg-perfil">
        <div class="imgs-perfil">
            <img src="{{asset('assets/repense/historico.svg')}}" alt="Icone Historico">
            <span>Meus Pedidos</span>
        </div>
    </div>

    <div class="pedido-info">
        <h2>Número do Pedido</h2>
    </div>

    <div class="container-modal">
        @forelse ($orders as $key => $order)
        <button type="button" class="modal">{{$order->reference}}</button>
        <div class="conteudo-modal">
            @php $items = unserialize($order->items); @endphp
            <div class="items-pedido">
                @foreach ($items as $item)
                <div class="item-pedido">
                    <h3>Item:</h3>
                    <p>{{$item['name']}}</p>
                </div>
                <div class="item-pedido">
                    <h3>Quantidade:</h3>
                    <p>{{$item['quantity']}}</p>
                </div>
                <div class="item-pedido">
                    <h3>R$:</h3>
                    <p>{{number_format($item['price']*$item['quantity'], 2, ',', '.')}}</p>
                </div>
                @endforeach
            </div>
        </div>
        @empty
        <div class="alert alert-warning">Nenhum pedido recebido!</div>
        @endforelse
    </div>

    <div class="botao-pedido">
        <a class="btn-pedido" href="">Retornar</a>
    </div>
</div>
@section('scripts')
<script src="{{asset('assets/repense/js/modal.js')}}"></script>
@endsection
@endsection
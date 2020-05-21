@extends('repense.templates.main')

@section('content')
<h2>Carrinho de Compras</h2>
<section class="">
    <img src="" alt="">
    <div class="">
        <span>Nome do Produto</span>
        <span>R$: 0,00</span>
        <button>Adicionar</button>
        <button>Remover</button>
    </div>
</section>

<section class="">
    <h3>Checkout</h3>
    <span>Valor total: </span>
    <span>R$0,00</span>
    <a>Continuar Comprando</a>
    <button>Finalizar Compra</button>
</section>
@endsection
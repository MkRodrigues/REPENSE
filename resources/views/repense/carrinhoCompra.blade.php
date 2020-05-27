@extends('repense.templates.main')

@section('content')

<h2 class="carrinho-titulo">Carrinho de Compras</h2>

<div class="produto-container">
    <div class="carrinho-col1">
        {{-- Item a repetir --}}
        <section class="carrinho-produto">
            <img src="assets/repense/blusa.png" alt="">
            <div class="carrinho-info">
                <span class="info-nome">Nome do Produto</span>
                <span class="info-preco">R$: 0,00</span>
                <div class="info-btn">
                    <button class="info-btn1">Adicionar</button>
                    <button class="info-btn2">Remover</button>
                </div>
            </div>
        </section>
        {{-- Fim item --}}
    </div>

    <section class="carrinho-col2">
        <div class="col2-bg">
            <div class="col2-container">
                <h3>Checkout</h3>
                <div class=""><span class="col2-valor">Valor total: </span>
                    <span class="col2-preco">R$ 0,00</span></div>
                <a>Continuar Comprando</a>
                <button>Finalizar Compra</button>
            </div>
        </div>
    </section>
</div>

@endsection
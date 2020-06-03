@extends('repense.templates.main')

@section('content')

<h2 class="carrinho-titulo">Carrinho de Compras</h2>

<div class="produto-container">
    
    <div class="carrinho-col1">
        {{-- Item a repetir --}}
        @php $total = 0;
                   
        @endphp
        @foreach($cart as $c)
        <section class="carrinho-produto">
            <img src="assets/repense/blusa.png" alt="">
            <div class="carrinho-info">
                <span class="info-nome">{{$c['name']}}</span>
                <span class="info-preco">{{number_format($c['price'],2,',','.')}}</span>
                <span class="info-preco">{{$c['quantity']}}</span> 

                <span class="info-preco">{{$c['size']}}</span>

                @php 
                
                if($c['quantity']>0){
                $subtotal = $c['price'] * $c['quantity'];
                $total += $subtotal;
                 } else{
                    echo  "<script>alert('Quantidade invalida, adicione novo produto');</script>";
            }
               @endphp

                <div class="info-btn">
                    <a class="info-btn1">Adicionar +</a>
                    <a href="{{route('cart.remove',['id' =>$c['id']])}}" class="info-btn2">Remover -</a>
                   
                </div>
            </div>
        </section>
        {{-- Fim item --}}
        @endforeach
    </div>  

    <section class="carrinho-col2">
        <div class="col2-bg">
            <div class="col2-container">
                <h3>Checkout</h3>
                <div class="">
                    <span class="col2-valor">Valor total: </span>

                    <span class="col2-preco">{{number_format($total,2,',','.')}}</span>
                </div>

                <a href="{{route('index')}}">Continuar Comprando</a>
                <button>Finalizar Compra</button>
            </div>
        </div>
    </section>
</div>

@endsection
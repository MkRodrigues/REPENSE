@extends('repense.templates.main')

@section('content')
<div class="thanks-container">

    <p class="thanks-p">Muito obrigado por ter comprado conosco!</p>
    <p>Seu pedido foi processado, código do pedido: {{ request()->get('order') }}.</p>
</div>
@endsection
@extends('repense.templates.main')

@section('content')
<h2>Forma de Pagamento</h2>
<section class="">
    <span>Selecione uma forma de pagamento</span>
    <form action="">
        <div class="">
            <input type="checkbox" name="boleto" id="">
            <label for="">Boleto</label>
        </div>
        <div class="">
            <input type="checkbox" name="cartao" id="">
            <label for="">Cartão de Crédito</label>
        </div>
    </form>
</section>

<section class="">
    <h2>Selecione ou Cadastre um Cartão de Crédito</h2>
    <div class="">
        <span>Cartões Cadastrados</span>
        <form action="">
            <div class="">
                <label for="">Cartões Cadastrados</label>
                <select name="" id="">
                    <option value=""></option>
                </select>
            </div>
            <div class="">
                <label for="">Nome no Cartão</label>
                <input type="text">
                <label for="">Número no Cartão</label>
                <input type="text">
            </div>
        </form>
    </div>
</section>
<button type="submit">Novo Cartão</button>

<section class="">
    <h2>Novo Cartão de Crédito</h2>
    <form action="">
        <div class="">
            <label for="">Nome no Cartão</label>
            <input type="text" placeholder="Nome como no Cartão">
        </div>

        <div class="">
            <label for="">Número no Cartão</label>
            <input type="text" placeholder="xxxx xxxx xxxx xxxx">
        </div>

        <div class="">
            <label for="">Vencimento</label>
            <input type="text" placeholder="xx/xxxx">
        </div>

        <div class="">
            <label for="">Código Segurança</label>
            <input type="text" placeholder="xxx">
        </div>
    </form>
</section>
<button>Confirmar Forma de Pagamento</button>

@endsection
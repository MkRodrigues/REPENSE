@extends('repense.templates.main')

@section('stylesheets')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
<div class="card-container">
    <h2>Dados para Pagamento</h2>
    <form method="POST">
        <div class="">
            <div class="campo-ck espaco-campo">
                <label for="">Nome igual ao do Cartão</label>
                <input type="text" class="ck-grande" name="card_name">
            </div>
        </div>

        <div class="card-flex">
            <div class="campo-ck espaco-campo">
                <label for="">Número do Cartão <span class="brand"></span></label>
                <input type="text" class="ck-medio" name="card_number" placeholder="xxxx xxxx xxxx xxxx">
                <input type="hidden" name="card_brand">
            </div>

            <div class="campo-ck espaco-campo">
                <label for="">Mês</label>
                <input type="text" class="ck-pequeno" name="card_month" placeholder="expira em">
            </div>

            <div class="campo-ck espaco-campo">
                <label for="">Ano</label>
                <input type="text" class="ck-pequeno" name="card_year" placeholder="expira em">
            </div>
            <div class="campo-ck espaco-campo">
                <label for="">Código de Segurança</label>
                <input type="text" class="" name="card_cvv" placeholder="xxx">
            </div>
        </div>

        <div class="pgto-container installments"></div>

        <button class="btn-usuario proccessCheckout" type="submit">Efetuar Pagamento</button>

    </form>


</div>

@endsection

@section('scripts')
<script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script src="{{asset('assets/repense/js/jquery.ajax.js')}}"></script> --}}

<script>
    // Set-Cookie: promo_shown=1; Max-Age=2600000; Secure;
        const sessionId = "{{session()->get('pagseguro_session_code')}}";
        PagSeguroDirectPayment.setSessionId(sessionId);
</script>

<script>
    let amountTransaction = '{{$cartItems}}';
        let cardNumber = document.querySelector('input[name=card_number]');
        let spanBrand = document.querySelector('span.brand');
        cardNumber.addEventListener('keyup', function()
        {
            // console.log(cardNumber.value);
            if(cardNumber.value.length >= 6)
            {
                PagSeguroDirectPayment.getBrand(
                    {
                        cardBin: cardNumber.value.substr(0, 6),
                        success: function(res)
                        {
                            let imgFlag = `<img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/${res.brand.name}.png">`;
                            spanBrand.innerHTML = res.brand.name;
                            spanBrand.innerHTML = imgFlag;
                            document.querySelector('input[name=card_brand]').value = res.brand.name;
                            getInstallments(amountTransaction, res.brand.name);
                            // getInstallments(40, res.brand.name);

                            // console.log(res);
                        },
                        error: function(err)
                        {
                            console.log(err);
                        },
                        complete: function(res)
                        {
                            // console.log('Complete:', res);
                        }
                    });
            }
            // console.log(cartNumber.value);
        });

        let submitButton = document.querySelector('button.proccessCheckout');

        submitButton.addEventListener('click', function(event)
        {
            event.preventDefault();
            PagSeguroDirectPayment.createCardToken(
                {
                    cardNumber:      document.querySelector('input[name=card_number]').value,
                    brand:           document.querySelector('input[name=card_brand]').value,
                    cvv:             document.querySelector('input[name=card_cvv]').value,
                    expirationMonth: document.querySelector('input[name=card_month]').value,
                    expirationYear:  document.querySelector('input[name=card_year]').value,
                    success: function(res)
                         {
                            console.log(res);
                            proccessPayment(res.card.token);
                        },
                    // error: function(err)
                    //     {
                    //         console.log(err);
                    //     }
                });
        });

        function proccessPayment(token)
        {
            let data =
            {
                card_token: token,
                hash: PagSeguroDirectPayment.getSenderHash(),
                installment: document.querySelector('select.select_installments').value,
                card_name: document.querySelector('input[name=card_name]').value,
                _token: '{{csrf_token()}}',
            };

            $.ajax(
            {
                type: 'POST',
                url: '{{route("checkout.proccess")}}',
                data: data,
                dataType: 'json',
                success: function(res)
                {
                    // console.log(res);
                    // alert(res.data.message);
                    // res.data.message;
                    toastr.success(res.data.message, 'Sucesso!!');
                    window.location.href = "{{route('thanks')}}?order=" + res.data.order;

                }
            });
        }

        // buscando opções de parcelamento
        function getInstallments(amount, brand)
        {
            PagSeguroDirectPayment.getInstallments(
                {
                    amount: amount,
                    brand: brand,
                    // será 0 pq não se assumi juros de nada - se fosse tres sem juros seria 3 -
                    // tenho de pensar nisto melhor pra dar a opção do logista escolher na loja e no produto quantas parcelas ele assume sem juros.
                    maxInstallmentNoInterest:0,
                    success: function(res)
                    {
                        let selectInstallments = drawSelectInstallments(res.installments[brand]);
                        document.querySelector('div.installments').innerHTML = selectInstallments;
                        console.log(res);
                    },
                    error: function(err)
                    {
                        console.log(err);
                    },
                    complete: function(res)
                    {
                        console.log(res);
                    }
                });
        }
        function drawSelectInstallments(installments) {
		let select = '<label class="parcelar-titulo">Opções de Parcelamento:</label>';
		select += '<select class="parcelar-pgto select_installments">';
		for(let l of installments) {
		    select += `<option value="${l.quantity}|${l.installmentAmount}">${l.quantity}x de ${l.installmentAmount} - Total fica ${l.totalAmount}</option>`;
		}
		select += '</select>';
		return select;
	}
</script>

@endsection
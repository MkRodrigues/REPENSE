@extends('repense.templates.main')

@section('content')

<div class="card-container">
    <form action="" method="POST">
        <div class="card-flex">
            <div class="campo espaco-campo">
                <label for="">Nome do Cartão </label>
                <input class="cp-menor" type="text" class="" name="card_name">
            </div>
            <div class="campo-flex">
                <div class="campo espaco-campo">
                    <label for="">Número do Cartão <span class="brand"></span></label>
                    <input type="text" class="" name="card_number">
                </div>
                <input type="hidden" name="card_brand">
            </div>
        </div>
        <div class="card-flex">
            <div class="">
                <div class="campo espaco-campo">
                    <label>Mês</label>
                    <input type="text" class="" name="card_month">
                </div>
            </div>

            <div class="">
                <div class="campo espaco-campo">
                    <label>Ano</label>
                    <input type="text" class="form-control" name="card_year">
                </div>
            </div>
        </div>

        <div class="campo espaco-campo">
            <label>CVV</label>
            <input type="text" class="" name="">
        </div>
        <button class="btn-usuario proccessCheckout">Efetuar pagamento </button>
    </form>

</div>

@endsection

 @section('scripts')
<script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script src="{{asset('assets/repense/js/jquery.ajax.js')}}"></script>
<script>
    const sessionId = '{{session()->get('pagseguro_session_code')}}';
    PagSeguroDirectPayment.setSessionId(sessionId);

</script>
<script>
    let cardNumber = document.querySelector('input[name=card_number]');
    let spanBrand = document.querySelector('span.brand');
    let amountTransaction = '{{$cartItems}}';

//____________________________________________________________________________

    cardNumber.addEventListener('keyup', function(){
        if(cardNumber.value.length >= 6)
        {
            PagSeguroDirectPayment.getBrand(
                    {
                        cardBin: cardNumber.value.substr(0, 6),
                        success: function(res)
                        {
                            let imgFlag = `<img src="https://stc.pagseguro.uol.com.br/public/img/payment-methods-flags/68x30/${res.brand.name}.png">`;
                            spanBrand.innerHTML = imgFlag;
                            document.querySelector('input[name=card_brand]').value = res.brand.name;
                            getInstallments(amountTransaction, res.brand.name);
                            console.log(res);
                        },
                        error: function(err)
                        {
                            console.log(err);
                        },
                        complete: function(res)
                        {

                        }
                    });
            }

        });


//____________________________________________________________________________

        let submitButton = document.querySelector('button.proccessCheckout')
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
            });
        });

//____________________________________________________________________________

        function proccessPayment(token)
        {
            let data =
            {
                card_token:token,
                hash:PagSeguroDirectPayment.getSenderHash(),
                installment:document.querySelector('.select_installments').value,
                card_name: document.querySelector('input[name=card_name]').value,
                _token:'{{csrf_token()}}',
            };

            $.ajax(
            {
                type: 'POST',
                url: '{{route("checkout.proccess")}}',
                data: data,
                dataType: 'json',
                success: function(res)
                {
                    console.log(res);
                }
            });
        }
//____________________________________________________________________________

        function getInstallments(amount, brand){
            PagSeguroDirectPayment.getInstallments({
                amount: amount,
                brand: brand,
                maxInstallmentNoInterest:0,
                success: function(res){
                    let selectInstallments = drawSelectInstallments(res.installments[brand]);
                    document.querySelector('div.installments').innerHTML = selectInstallments;

                },
                error: function(err){

               },
               complete: function(res){

               },
            })

        }

//____________________________________________________________________________

        function drawSelectInstallments(installments) {
           let select = '<label>Opções de Parcelamento:</label>';
           select += '<select class="form-control select_installments">';
           for(let l of installments) {
               select += `<option value="${l.quantity}|${l.installmentAmount}">${l.quantity}x de ${l.installmentAmount} - Total fica ${l.totalAmount}</option>`;
           }
           select += '</select>';
           return select;
       }

</script>

@endsection
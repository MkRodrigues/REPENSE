@extends('repense.templates.main')

@section('content')

<div class="card-container">
<form action="" method="POST">
    <div class="col-nd-6">
        <div class="form-group">
            <label>Numero do Cartão</label>
            <input type="text" class="form-control" name="card_number">
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label>Mes</label>
            <input type="text" class="form-control" name="card_number">
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label>Ano</label>
            <input type="text" class="form-control" name="numero">
        </div>
    </div>

    <div class="row">
        <div class="form-group">
            <label>Mes</label>
            <input type="text" class="form-control" name="numero">
        </div>
    </div>

    <button class="btn btn-sucess btn-lg"  >Efetuar pagamento </button>

</form>

</div>
    
@endsection

@section('scripts')
<script src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script>
    const sessionId = '{{session()->get('pagseguro_session_code')}}';

    PagSeguroDirectPayment.setSessionId(sessionId);

</script>

<script>
    let cardNumber = document.querySelector('input[name=numero]');
    cardNumber.addEventListener('keyup', function(){
        if(cardNumber.value.length >= 6)
        {
            PagSeguroDirectPayment.getBrand(
                {
                    cardBin: cardNumber.value.substr(0, 6),
                    success: function(res)
                    {
                        console.log(res);
                        
                        // console.log(res);
                    },
                    error: function(err)
                    {
                        console.log(err);
                    },
                    complete: function(res)
                    {
                         console.log('Complete:', res);
                    }
                });

        }
    }); 

</script>

@endsection
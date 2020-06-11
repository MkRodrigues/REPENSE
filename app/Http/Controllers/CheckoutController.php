<?php

namespace App\Http\Controllers;
use App\Payment\PagSeguro\CreditCard;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){

        // session()->forget('pagseguro_session_code');
        if(!auth()->check())
        {
            return redirect()->route('login');
        }

        if(!session()->has('cart')) return redirect()-route('home');

        $this->makePagSeguroSession();
        $cartItems = array_map(function($line)
        {
            return $line['quantity'] * $line['price'];
        }, session()->get('cart'));

        $cartItems = array_sum($cartItems);
        return view('repense.checkout', compact('cartItems'));
}

//__________________________________________________________________

public function proccess(Request $request)
{
    // dd($request->all());
    try
        {
            $dataPost = $request->all();
            $cartItems = session()->get('cart');
            $reference = 'XPTO';
            $user = auth()->user();

            $creditCardPayment = new CreditCard($cartItems, $user, $dataPost, $reference);
            $result = $creditCardPayment->doPayment();
            // var_dump($result);

            $userOrder =
            [
                'reference' =>$reference,
                'pagseguro_code' => $result->getCode(),
                'pagseguro_status' => $result->getStatus(),
                'items' => serialize($cartItems),
            ];

            $userOrder = $user->orders()->create($userOrder);
            session()->forget('cart');
            session()->forget('pagseguro_session_code');

            return response()->json
            ([
                'data'=>
                [
                    'status'=>true,
                    'message'=>'Pedido criado com Sucesso !!!',
                    'order' => $reference
                ]
            ]);
        } catch(\Exception $e)
        {
            $message = env('APP_DEBUG') ? $e->getMessage() : 'Erro ao processar Pedido!';
            return response()->json
            ([
                'data'=>
                [
                    'status'=>false,
                    'message'=>$message
                ]
                ], 401);
        }
    }


    //_________________________

public function thanks()
{
    return view('repense.thanks');
}
//_________________________________________________

    private function makePagseguroSession(){

        if(!session()->has('pagseguro_session_code'))
    {        $sessionCode = \PagSeguro\Services\Session::create(
                \PagSeguro\Configuration\Configure::getAccountCredentials());

            return session()->put('pagseguro_session_code',$sessionCode->getResult());
    }
    }
    }

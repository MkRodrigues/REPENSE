@extends('repense.templates.main')



@section('content')


<section class="container-principal">
    <div class="container-prod">
    <div class="ct-im">
        <img  src="assets/repense/blusa.png" alt="" srcset="">
        {{--  < img  src = " {{asset('storage/'.$product ->image)}} "   width = " 40 "  height = " 40 " >  --}}
    </div>
        <div class="ct-detalhes">
            <h2>Produto teste</h2>
             
            <h3 id="desc">Descrição</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolor minima dolorem esse ducimus, excepturi hic modi natus dignissimos tenetur fugiat voluptatibus? Voluptatibus iste vitae eligendi praesentium consequatur ducimus unde!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quidem sunt vel fugiat cumque in quos odit, rem ipsum, dignissimos sit porro! Quam in, odit aspernatur sapiente ab ducimus nisi.
            </p>

            <h3>R$ 5.99</h3>

        {{--  <h2>{{$product->name}}</h2>

        <p>{{$product->description}}</p>

        <h3>{{$product->price}}</h3>  --}}
    
    <div class="ct-select">
               <select >
            <option  value="tamanho" >Tamanho</option>
            <option  value="pp" >PP</option>
            <option value="p">P</option>
            <option value="m">M</option>
            <option value="g">G</option>
            <option value="gg">GG</option>
            <option value="g2">G2</option>
            <option value="g3">G3</option>
            <option value="g4">G4</option>
           </select>

           <select >
            <option  value="quantidade" >Qtd</option>
            <option  value="1" >1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           </select>
        </div>
    
    <div class="btn-adccard">
        <a href="#">Adicionar ao Carrinho</a>
    </div>
</div>
</div>
    
@endsection
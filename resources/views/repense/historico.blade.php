@extends('repense.templates.main')

@section('content')

<div class="container-historico">

    <div class="bg-perfil">
        <div class="imgs-perfil">
            <img src="{{asset('assets/repense/historico.svg')}}" alt="Icone Historico">
            <span>Histórico</span>
        </div>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Visualizar Item</th>
                    <th>Data da Compra</th>
                    <th>Status da Compra</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Texto</td>
                    <td>Texto</td>
                    <td>Texto</td>
                </tr>
            </tbody>
        </table>
        <button>Voltar</button>
    </div>

</div>
</div>
@endsection
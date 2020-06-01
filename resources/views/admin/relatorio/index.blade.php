@extends('admin.templates.main'),

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <div class="">
            <h2 class="mb-4">Relatório</h2>
        </div>
        <img class="imagem-paginas" src="{{ asset('assets/admin/relatorio.svg') }}" alt="">
    </div>

    <div class="mr-4 mt-2">
        <table class="table">
            <thead>
                <tr class="text-center table">
                    <th scoope="col">Texto</th>
                    <th scope="col">Texto</th>
                    <th scope="col">Texto</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                {{-- @foreach($users as $user) --}}
                <tr class="text-center">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Mostrar</a>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
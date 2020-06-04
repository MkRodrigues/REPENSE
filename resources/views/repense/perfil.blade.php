@extends('repense.templates.main')

@section('content')

<div class="container-perfil">

    <div class="bg-perfil">
        <div class="imgs-perfil">
            <img src="{{asset('assets/repense/perfil.svg')}}" alt="Icone Meu perfil">
            <span>Meu Perfil</span>
        </div>
    </div>
    <div class="secao-atualizar">
        <form action="{{ route('update.profile') }}" method="POST">
            <span class="titulo-secoes">Informações Pessoais</span>
            <div class="secao-container">

                <div class="secao-campo">
                    <label for="">Nome Completo</label>
                    <input class="cp-maior" id="name" type="text" name="name" value="{{$user->name}}">
                </div>

                <div class="secao-campo">
                    <label for="">Data de Nascimento</label>
                    <input class="cp-menor" id="birth_date" type="date" name="birth_date" value="{{$user->birth_date}}">
                </div>

                <div class="secao-campo">
                    <label for="">Cpf</label>
                    <input class="cp-medio" id="cpf" type="text" name="cpf" value="{{$user->cpf}}">
                </div>
            </div>

            <span class="titulo-secoes">Contato</span>
            <div class="secao-container">
                <div class="secao-campo">
                    <label for="">E-mail</label>
                    <input class="cp-maior" id="email" type="email" name="email" value="{{$user->email}}">
                </div>

                <div class="secao-campo">
                    <label for="">Celular</label>
                    <input class="cp-maior" id="phone" type="text" name="phone" value="{{$user->phone}}">
                </div>
            </div>

            <span class="titulo-secoes">Endereço</span>
            <div class="secao-container-endereco">
                <div class="secao-endereco">
                    <div class="secao-campo">
                        <label for="">Logradouro</label>
                        <input class="cp-maior" id="address" type="text" name="address" value="{{$user->address}}">
                    </div>

                    <div class="secao-campo">
                        <label for="">Número</label>
                        <input class="cp-menor" id="address_number" type="text" name="address_number" value="{{$user->address_number}}">
                    </div>

                    <div class="secao-campo">
                        <label for="">Complemento</label>
                        <input class="cp-medio" id="address_complement" type="text" name="address_complement" value="{{$user->address_complement}}">
                    </div>
                </div>

                <div class="secao-endereco">
                    <div class="secao-campo">
                        <label for="">Cep</label>
                        <input class="cp-medio" id="zipcode" type="text" name="zipcode" value="{{$user->zipcode}}">
                    </div>

                    <div class="secao-campo">
                        <label for="">Estado</label>
                        <input class="cp-medio" id="state" type="text" name="state" value="{{$user->state}}">
                    </div>
                </div>
            </div>

            <span class="titulo-secoes">Informações de Acesso</span>
            <div class="secao-container">
                <div class="secao-campo">
                    <label for="">Senha</label>
                    <input class="cp-medio" id="password" type="password" name="password" autocomplete="current-password">
                </div>

                <div class="secao-campo">
                    <label for="">Confirmar Senha</label>
                    <input class="cp-medio" id="password-confirm" type="password" name="password_confirmation">
                </div>
            </div>
            <button class="btn-cadastro" type="submit">Confirmar Cadastro</button>
        </form>
    </div>
    {{-- <a href="{{ route('edit.register') }}">Atualizar Cadastro</a> --}}
</div>
</div>
@endsection


@extends('repense.templates.main')
@section('content')


<div class="container-usuario">
    <section class="usuario">
        <h2>Efetue seu Cadastro </h2>

        <form method="POST" action="{{ route('register') }}">
            <p> Informações Pessoais </p>
            <hr>
            @csrf

            <div class="campo">
                <label for="">Nome Completo</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}">

                <input id="birth_date" type="date" name="birth_date" value="{{ old('birth_date') }}">
            </div>


            <div class="campo">
                <label for="">Cpf</label>
                    <input id="cpf" type="text"  name="cpf" value="{{ old('cpf') }}">


                    <label for="">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <label for="">Celular</label>
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}">
            </div>

            <p> Endereco </p>
            <hr>

            <div class="campo">
                <label for="">Logradouro</label>
                <input id="address" type="text" name="address" value="{{ old('address') }}">

                <label for="">Número</label>
                <input id="address_number" type="text" name="address_number" value="{{ old('address_number') }}">

                <label for="">Complemento</label>
                <input id="address_complement" type="text" name="address_complement"
                    value="{{ old('address_complement') }}">
            </div>


            <div class="campo">
                <label for="">Cep</label>
                <input id="zipcode" type="text" name="zipcode" value="{{ old('zipcode') }}">

                <label for="">Estado</label>
                <input id="state" type="text" name="state" value="{{ old('state') }}">


            </div>

            <p> Informaçoes de Acesso </p>
            <hr>

            <div class="campo">
                <label for="">Senha</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="campo">
                <label for="">Confirma Senha</label>

                <input id="password-confirm" type="password" name="password_confirmation" required
                    autocomplete="new-password">
            </div>


            <button class="btn-usuario" type="submit">Confirmar Cadastro</button>

        </form>

    </section>
    @endsection
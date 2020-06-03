@extends('repense.templates.main')

@section('content')
<div class="container-usuario">
    <section class="usuario">
        <h2>Já é um Cliente?</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="campo">
                <label for="">E-mail</label>
                <input id="email" type="email" class="@error('email') erro-campo @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                @error('email')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="campo">
                <label for="">Senha</label>
                <input id="password" type="password" class="@error('password') erro-campo @enderror" name="password" autocomplete="current-password">
                @error('password')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="lembrar-me">
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="" for="remember"> {{ __('Lembrar me') }}</label>
            </div>
            <div class="btn-senha">
                @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">{{ __('Esqueceu sua senha?') }}</a>
                @endif</div>

            <button class="btn-usuario" type="submit">Entrar</button>
        </form>
    </section>

    <section class="cadastro">
        <h2>Ainda não é um Cliente? <br> Cadastre-se!</h2>
        <a class="cadastro-senha" href="{{ route('register') }}">Cadastrar-se</a>
    </section>
</div>
@endsection
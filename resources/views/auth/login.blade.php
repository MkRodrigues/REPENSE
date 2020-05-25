


@extends('repense.templates.main')

@section('content')
<div class="container-usuario">
    <section class="usuario">
        <h2>Já é um Cliente?</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="campo">
                <label for="">E-mail</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
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

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <button class="btn-usuario" type="submit">Entrar</button>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </form>

    </section>

    <section class="cadastro">
        <h2>Ainda não é um Cliente? <br> Cadastre-se!</h2>
        <a class="cadastro-senha" href="{{ route('register') }}">Cadastrar-se</a>
    </section>
</div>
@endsection
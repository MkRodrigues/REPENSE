@extends('repense.templates.main')

@section('content')
<section class="cadastro-container">
    <h2>Efetue seu Cadastro</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <span class="titulo-secoes">Informações Pessoais</span>
        <div class="secao-container">
            <div class="secao-campo">
                <label for="">Nome Completo</label>
                <input class=" cp-maior @error('name') erro-campo @enderror" id="name" type="text" name="name" value="{{ old('name') }}">
                @error('name')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="secao-campo">
                <label for="">Data de Nascimento</label>
                <input class="cp-menor @error('birth_date') erro-campo @enderror" id="birth_date" type="date" name="birth_date" value="{{ old('birth_date') }}">
                @error('birth_date')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="secao-campo">
                <label for="">Cpf</label>
                <input class="cp-medio @error('cpf') erro-campo @enderror" id="cpf" type="text" name="cpf" value="{{ old('cpf') }}">
                @error('cpf')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <span class="titulo-secoes">Contato</span>
        <div class="secao-container">
            <div class="secao-campo">
                <label for="">E-mail</label>
                <input class="cp-maior @error('email') erro-campo @enderror" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                @error('email')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="secao-campo">
                <label for="">Celular</label>
                <input class="cp-maior @error('phone') erro-campo @enderror" id="phone" type="text" name="phone" value="{{ old('phone') }}">
                @error('phone')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <span class="titulo-secoes">Endereço</span>
        <div class="secao-container-endereco">
            <div class="secao-endereco">
                <div class="secao-campo">
                    <label for="">Logradouro</label>
                    <input class="cp-maior @error('address') erro-campo @enderror" id="address" type="text" name="address" value="{{ old('address') }}">
                    @error('address')
                    <span class="feedback-invalido">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="secao-campo">
                    <label for="">Número</label>
                    <input class="cp-menor @error('address_number') erro-campo @enderror" id="address_number" type="text" name="address_number" value="{{ old('address_number') }}">
                    @error('address_number')
                    <span class="feedback-invalido">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="secao-campo">
                    <label for="">Complemento</label>
                    <input class="cp-medio @error('address_complement') erro-campo @enderror" id="address_complement" type="text" name="address_complement" value="{{ old('address_complement') }}">
                    @error('address_complement')
                    <span class="feedback-invalido">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="secao-endereco">
                <div class="secao-campo">
                    <label for="">Cep</label>
                    <input class="cp-medio @error('zipcode') erro-campo @enderror" id="zipcode" type="text" name="zipcode" value="{{ old('zipcode') }}">
                    @error('zipcode')
                    <span class="feedback-invalido">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="secao-campo">
                    <label for="">Estado</label>
                    <input class="cp-medio @error('state') erro-campo @enderror" id="state" type="text" name="state" value="{{ old('state') }}">
                    @error('state')
                    <span class="feedback-invalido">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        <span class="titulo-secoes">Informações de Acesso</span>
        <div class="secao-container">
            <div class="secao-campo">
                <label for="">Senha</label>
                <input class="cp-medio @error('password') erro-campo @enderror" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                @error('password')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="secao-campo">
                <label for="">Confirmar Senha</label>
                <input class="cp-medio @error('password_confirmation') erro-campo @enderror" id="password-confirm" type="password" name="password_confirmation" autocomplete="new-password">
                @error('password_confirmation')
                <span class="feedback-invalido">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <button class="btn-cadastro" type="submit">Confirmar Cadastro</button>
    </form>
</section>
@endsection
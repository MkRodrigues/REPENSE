@extends('repense.templates.main')

@section('content')
<div class="container-usuario">
    <section class="usuario">
        <h2>Já é um Cliente?</h2>

        <form action="" method="POST">
            <div class="campo">
                <label for="">E-mail</label>
                <input type="text">
            </div>
            <div class="campo">
                <label for="">Senha</label>
                <input type="password">
            </div>
        </form>
        <button class="btn-usuario" type="submit">Entrar</button>
        <a class="usuario-senha" href="#">Esqueceu a Senha?</a>
    </section>

    <section class="cadastro">
        <h2>Ainda não é um Cliente? <br> Cadastre-se!</h2>
        <a class="cadastro-senha" href="#">Cadastrar-se</a>
    </section>
</div>
@endsection
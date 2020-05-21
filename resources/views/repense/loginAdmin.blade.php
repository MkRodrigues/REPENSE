@extends('repense.templates.main')

@section('content')
<section class="cliente">
    <h2>Acesso Administrativo</h2>

    <form action="" method="POST">
        <div class="campo1">
            <label for="">E-mail</label>
            <input type="text">
        </div>
        <div class="campo2">
            <label for="">Senha</label>
            <input type="text">
        </div>
        <button type="submit">Entrar</button>
    </form>
    <span>Esqueceu a Senha?</span>
</section>

@endsection
@extends('repense.templates.main')

@section('content')

<section class="principal-bg">
    <div class="principal-info">
        <h1>Seja mais Você!</h1>
        <p>Acreditamos que em nossa loja você pode encontrar roupas e acessórios para todos os tipos de pessoas, sim PESSOAS, pois aqui não existe cor, gênero e nem padrão, aqui você faz o seu padrão!</p>
    </div>
    <img src="assets/repense/principal.png" alt="mulheres abrançando">
</section>

<section class="masc-bg">
    <img src="assets/repense/masculino.png" alt="Imagem masculino">
    <div class="masc-info">
        <div class="info-centro">
            <h2>Seja mais Você!</h2>
            <p>Acreditamos que em nossa loja você pode encontrar roupas e acessórios para todos os tipos de pessoas, sim PESSOAS, pois aqui não existe cor, gênero e nem padrão, aqui você faz o seu padrão!</p>
            <a href="#">Masculinos</a>
        </div>
    </div>
</section>

<section class="fem-bg">
    <div class="fem-info">
        <div class="info-centro">
            <h2>Seja mais Você!</h2>
            <p>Acreditamos que em nossa loja você pode encontrar roupas e acessórios para todos os tipos de pessoas, sim PESSOAS, pois aqui não existe cor, gênero e nem padrão, aqui você faz o seu padrão!</p>
            <a href="#">Femininos</a>
        </div>
    </div>
    <div class="fem-img">
        <img src="assets/repense/feminino.png" alt="Imagem Feminino">
    </div>
</section>

<section class="neutro-bg">
    <img src="assets/repense/neutro.png" alt="Imagem Neutro">
    <div class="neutro-info">
        <div class="info-centro">
            <h2>Seja mais Você!</h2>
            <p>Acreditamos que em nossa loja você pode encontrar roupas e acessórios para todos os tipos de pessoas, sim PESSOAS, pois aqui não existe cor, gênero e nem padrão, aqui você faz o seu padrão!</p>
            <a href="#">Neutro</a>
        </div>
    </div>
</section>

@endsection
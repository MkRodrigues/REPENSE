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
    <img src="{{asset('assets/repense/masculino.png')}}" alt="Imagem masculino">
    <div class="masc-info">
        <div class="info-centro">
            <h2>Seja mais Você!</h2>
            <p>O respeito não vê cor, religião e muito menos orientação sexual. Ele é universal e cabe a nós mesmos lutar pelo direito de todos.</p>
            <a href="{{route('masculino')}}">Masculinos</a>
        </div>
    </div>
</section>

<section class="fem-bg">
    <div class="fem-info">
        <div class="info-centro">
            <h2>Seja mais Você!</h2>
            <p>É muito comum ouvirmos as pessoas dizerem que se amam, que mantêm sua autoestima em alta, mas o amor-próprio é muito mais profundo do que imaginamos.</p>
            <a href="{{route('feminino')}}">Femininos</a>
        </div>
    </div>
    <div class="fem-img">
        <img src="{{asset('assets/repense/feminino.png')}}" alt="Imagem Feminino">
    </div>
</section>

<section class="neutro-bg">
    <img src="{{asset('assets/repense/neutro.png')}}" alt="Imagem Neutro">
    <div class="neutro-info">
        <div class="info-centro">
            <h2>Seja mais Você!</h2>
            <p>Eu acho que a escolha entre homens e mulheres é como escolher entre bolo e gelado. Você seria tolo de não provar muitos, quando há muitos sabores diferentes.</p>
            <a href="{{route('neutro')}}">Neutro</a>
        </div>
    </div>
</section>

@endsection
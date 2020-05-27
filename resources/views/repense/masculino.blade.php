@extends('repense.templates.main')

@section('content')
<div class="header">
    <img class="acessorio-img" src="assets/repense/masculinos.png" alt="Homem de óculos">
    <h2>Masculino</h2>
</div>

<div class="main-acessorios">
    <div class="col1">

        <section>
            <div class="categoria-head">
                <span>Categorias</span>
            </div>
            <div class="categoria-body">
                <ul>
                    <li>Calças</li>
                    <li>Camisetas</li>
                </ul>
            </div>
        </section>

        <section>
            <div class="cor-head">
                <span>Cor</span>
            </div>
            <form class="cor-body" action="">
                <div class="cor-container">
                    <label class="cor-item" style="">
                        <input type="checkbox" checked="checked">
                        <span class="checkbox"></span>
                    </label>

                    <label class="cor-item">
                        <input type="checkbox" checked="checked">
                        <span class="checkbox"></span>
                    </label>

                    <label class="cor-item">
                        <input type="checkbox" checked="checked">
                        <span class="checkbox"></span>
                    </label>
                </div>
            </form>
        </section>

        <section>
            <div class="tamanho-head">
                <span>Tamanho</span>
            </div>

            <div class="tamanho-body">
                <table class="tabela">
                    <tr>
                        <td>PP</td>
                        <td>P</td>
                        <td>M</td>
                    </tr>
                    <tr>
                        <td>G</td>
                        <td>GG</td>
                    </tr>
                </table>
            </div>

        </section>
    </div>
    <div class="col2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur porro iusto officia magni, rem cum natus suscipit odit consequuntur velit.</p>
        <section class="produtos">

            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>
            <div class="prod-item">
                <img src="assets/repense/calca.png" alt="">
                <span class="prod-titulo">Nome do Produto</span>
                <span>R$: 0,00</span>
            </div>

        </section>
    </div>
</div>

@endsection
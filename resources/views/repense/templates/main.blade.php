<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/repense/style.css") }}">
    <title>@yield('title')Repense</title>
</head>
<header class="menu">
    <div class="bg-container">
        <div class="menu-container">
            <div class="imagens">
                <img src="" alt="">
                <a href="">Logo</a>
            </div>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <span>Nome do Cliente</span>
            <a class="btn-menu" href="#">Sair</a>
        </div>
    </div>
    <div class="bg-link">
        <div class="menu-link">
            <nav class="nav-link">
                <ul>
                    <li><a href="#">Feminino</a></li>
                    <li><a href="#">Masculino</a></li>
                    <li><a href="#">Neutro</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<body>
    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer-bg">
            <div class="footer-container">
                <div class="footer-info">
                    <h3>Quando seu conceito sobre algo, impede o outro de ser feliz,</h3>
                    <img class="teste" src="" alt="">
                </div>
                <nav class="footer-nav">
                    <h3>Mapa do Site</h3>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Feminino</a></li>
                            <li><a href="#">Masculino</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Neutro</a></li>
                            <li><a href="#">Acessórios</a></li>
                            <li><a href="#">Administrativo</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="copyright-bg">
            <div class="copyright-container">
                <div class="copyright-info">
                    <p>Repense! Todos os direitos reservados - Este é um projeto de conclusão de curso, todas imagens pertencem à seus respectivos copyrights</p>
                </div>
                <div class="footer-icons">
                    <img src="#" alt="instagram">
                    <img src="#" alt="twitter">
                    <img src="#" alt="facebook">
                </div>
                <div class="up">
                    <a><img src="#" alt="botao up"></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
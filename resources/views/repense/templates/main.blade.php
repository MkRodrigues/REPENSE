<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/repense/style.css") }}">
    <script src="https://kit.fontawesome.com/61f35be86b.js" crossorigin="anonymous"></script>
    <title>@yield('title')Repense</title>
</head>

<header class="menu" id="up">
    <div class="bg-container">
        <div class="menu-container">
            <div class="menu-logo">
                <img src="{{asset('assets/repense/punho.png')}}" alt="">
                <a href="{{ url('/') }}" alt="Logo"><img src="{{asset('assets/repense/repense.png')}}" alt=""></a>
            </div>

            <div class="menu-icones">
                <div class="icones-container">
                    <form class="pesquisa" action="{{route('search-product')}}">
                        <input type="text" placeholder="Insira o nome do Produto" name="s">
                        <button class="icone" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="">
                        <a class="icone" href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"></i></a>
                    </div>
                    <div class="">
                        <a class="icone" href="{{ route('login') }}"><i class="fas fa-user-circle"></i></a>
                    </div>
                </div>

                @auth
                <div class="nome-container">
                    <span>{{ Auth::user()->name }}</span>
                    <div class="acessos-container">
                        <a href="{{ route('perfil.usuario') }}">Meu Perfil</a>
                        <a href="#">Histórico</a>
                        <a class="ac-sair" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Sair') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <div class="bg-link">
        <div class="menu-link">
            <nav class="nav-link">
                <ul>
                    <li><a href="{{route('feminino')}}">Feminino</a></li>
                    <li><a href="{{route('masculino')}}">Masculino</a></li>
                    <li><a href="{{route('neutro')}}">Neutro</a></li>
                    <li><a href="{{route('acessorios')}}">Acessórios</a></li>
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
                    <img class="teste" src="{{ asset('assets/repense/repense.png') }}" alt="">
                </div>
                <nav class="footer-nav">
                    <h3>Mapa do Site</h3>
                    <div class="footer-list">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{route('feminino')}}">Feminino</a></li>
                            <li><a href="{{route('masculino')}}">Masculino</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{route('neutro')}}">Neutro</a></li>
                            <li><a href="{{route('acessorios')}}">Acessórios</a></li>
                            <li><a href="#">Administrativo</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="copyright-bg">
            <div class="copyright-container">
                <p class="copyright-p">Repense! Todos os direitos reservados - Este é um projeto de conclusão de curso,
                    todas imagens pertencem à seus respectivos copyrights</p>
                <div class="copyright-social">
                    <div class="copyright-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                    <div class="up">
                        <a><i class="fas fa-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @yield('scripts')
</body>

</html>
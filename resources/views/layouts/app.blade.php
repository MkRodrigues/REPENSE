<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')Repense</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @if(auth()->user()->isAdmin())
    <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/bootstrap/bootstrap.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset("css/repense/style.css") }}">
    @endif



</head>


@auth
@if(auth()->user()->isAdmin())

<body class="bg-body">
    <div class="body-container">
        <img class="logo" src="{{ asset('assets/admin/repense.png') }}" alt="logo">
        <header class="menu">
            <div class="menu-container">

                <div class="indicador">
                    <a class="menu-item" href="{{ route('admin.index') }}">
                        <img class="menu-icon" src="{{ asset('assets/admin/home.svg') }}" alt="Administrador"></a>
                    <span class="indicador-texto">Administrador</span>
                </div>

                <div class="indicador">
                    <a class="menu-item" href="{{ route('categories.index') }}"><img class="menu-icon"
                            src="{{ asset('assets/admin/category.svg') }}" alt="Categorias"></a>
                    <span class="indicador-texto">Categoria</span>
                </div>

                <div class="indicador">
                    <a class="menu-item" href="{{ route('products.index') }}"><img class="menu-icon"
                            src="{{ asset('assets/admin/product.svg') }}" alt="Produtos"></a>
                    <span class="indicador-texto">Produtos</span>
                </div>

                <div class="indicador">
                    <a class="menu-item" href="{{ route('report.index') }}"><img class="menu-icon"
                            src="{{ asset('assets/admin/report.svg') }}" alt="Relatórios"></a>
                    <span class="indicador-texto">Relatórios</span>
                </div>
                <div class="indicador">
                    <a class="menu-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <img class="menu-icon" src="{{ asset('assets/admin/exit.svg') }}" alt="Sair">

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <p class="indicador-texto">Sair</p>
                </div>
            </div>
        </header>
        <main class="conteudo-container">
            @yield('content')
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif
        </main>
    </div>
    <script src="{{ asset('assets/admin/bootstrap/jquery.js') }}"></script>
    <script src="{{ asset('assets/admin/bootstrap/bootstrap.js') }}"></script>
    @else
    <header class="menu" id="up">
        <div class="bg-container">
            <div class="menu-container">
                <div class="menu-logo">
                    <img src="assets/repense/punho.png" alt="">
                    <a href="{{ url('/') }}" alt="Logo"><img src="assets/repense/repense.png" alt=""></a>
                </div>
                <div class="menu-icons"><a href="#"><img src="assets/repense/glass.png" alt="Pesquisar"></a>
                    <a href="#"><img src="assets/repense/kart.png" alt="Carrinho de Compras"></a>
                    <a href="{{ route('login') }}"><img src="assets/repense/profile.png" alt="Perfil"></a>
                    <div class="menu-auth">
                        <span>{{ Auth::user()->name }}</span>


                        <a class="dropdown-item btn-menu" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>

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
                        <img class="teste" src="assets/repense/repense.png" alt="">
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
                    <p class="copyright-p">Repense! Todos os direitos reservados - Este é um projeto de conclusão de
                        curso,
                        todas imagens pertencem à seus respectivos copyrights</p>
                    <div class="copyright-social">
                        <div class="copyright-icons">
                            <a href=""><img src="assets/repense/insta.png" alt="instagram"></a>
                            <a href=""><img src="assets/repense/twitter.png" alt="twitter"></a>
                            <a href=""><img src="assets/repense/face.png" alt="facebook"></a>
                        </div>
                        <div class="up">
                            <a><img href="#up" src="assets/repense/up2.png" alt="botao up"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        @yield('scripts')
        @endif
        @else
        @yield('content')
        @endauth
    </body>

</html>

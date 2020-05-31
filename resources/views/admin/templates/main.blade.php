<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/admin/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/bootstrap/bootstrap.css') }}">
    <title>@yield('title')Painel Administrador</title>
</head>

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
                    <a class="menu-item" href="{{ route('categories.index') }}"><img class="menu-icon" src="{{ asset('assets/admin/category.svg') }}" alt="Categorias"></a>
                    <span class="indicador-texto">Categoria</span>
                </div>

                <div class="indicador">
                    <a class="menu-item" href="{{ route('products.index') }}"><img class="menu-icon" src="{{ asset('assets/admin/product.svg') }}" alt="Produtos"></a>
                    <span class="indicador-texto">Produtos</span>
                </div>

                <div class="indicador">
                    <a class="menu-item" href="{{ route('report.index') }}"><img class="menu-icon" src="{{ asset('assets/admin/report.svg') }}" alt="Relatórios"></a>
                    <span class="indicador-texto">Relatórios</span>
                </div>

                <div class="indicador">
                    <a class="menu-item" href="">
                        <img class="menu-icon" src="{{ asset('assets/admin/exit.svg') }}" alt="Sair">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </a>
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
</body>

</html>

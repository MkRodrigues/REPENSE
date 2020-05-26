<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/admin/style.css") }}">
    <title>@yield('title')Painel Administrador</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>

<body class="bg-body">
    <div class="body-container">
        <img class="logo" src="../assets/admin/repense.png" alt="logo">
        <header class="menu">
            <div class="menu-container">
                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="../assets/admin/home.svg"
                            alt="Categorias"></a>
                    <span class="tooltiptext">Administrador</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href="{{route('categories.index')}}"><img class="menu-icon" src="../assets/admin/category.svg"
                            alt="Categorias"></a>
                    <span class="tooltiptext">Categoria</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="../assets/admin/product.svg"
                            alt="Produtos"></a>
                    <span class="tooltiptext">Produtos</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="../assets/admin/report.svg"
                            alt="Relatórios"></a>
                    <span class="tooltiptext">Relatórios</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href="">
                        <img class="menu-icon" src="../assets/admin/exit.svg" alt="Sair">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </a>
                    <p class="tooltiptext">Sair</p>
                </div>
            </div>
        </header>
        <main class="conteudo-container">
            <div class="container">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
                @endif
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
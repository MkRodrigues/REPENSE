<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/admin/style.css") }}">
    <title>@yield('title')Painel Administrador</title>
</head>



<body>
    <img class="logo" src="" alt="Logo">
    <header class="menu">
        <div class="menu-container">
            <div class="">
                <a class="" href=""><img src="#" alt="Home"></a>
                <span class=""></span>
            </div>

            <div>
                <a class="" href=""><img src="#" alt="Categorias"></a>
                <span class=""></span>
            </div>

            <div>
                <a class="" href=""><img src="#" alt="Produtos"></a>
                <span class=""></span>
            </div>

            <div>
                <a class="" href=""><img src="#" alt="Relatórios"></a>
                <span class=""></span>
            </div>

            <div class="item">
                <a class="" href=""><img src="#" alt="Sair"></a>
                <span class=""></span>
            </div>
        </div>
    </header>

    <main class="conteudo-container">
        @yield('content')
    </main>
</body>

</html>
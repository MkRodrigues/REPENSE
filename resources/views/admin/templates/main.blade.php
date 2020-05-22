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

<body class="bg-body">
    <div class="body-container">
        <img class="logo" src="assets/admin/repense.png" alt="logo">
        <header class="menu">
            <div class="menu-container">
                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="assets/admin/home.svg" alt="Categorias"></a>
                    <span class="tooltiptext">Administrador</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="assets/admin/category.svg" alt="Categorias"></a>
                    <span class="tooltiptext">Categoria</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="assets/admin/product.svg" alt="Produtos"></a>
                    <span class="tooltiptext">Produtos</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="assets/admin/report.svg" alt="Relatórios"></a>
                    <span class="tooltiptext">Relatórios</span>
                </div>

                <div class="tooltip">
                    <a class="menu-item" href=""><img class="menu-icon" src="assets/admin/exit.svg" alt="Sair"></a>
                    <p class="tooltiptext">Sair</p>
                </div>
            </div>
        </header>
        <main class="conteudo-container">
            @yield('content')
        </main>
    </div>
</body>

</html>
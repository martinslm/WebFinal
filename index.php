<html>
<!DOCTYPE html>

<html lang="pt-br">

</html>

<head>
    <meta charset="utf8">
    <title>Biblioteca Online</title>
    <!-- ISSO É DECLARADO PARA O BOOTSTRAP RODAR-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="estilos/main.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- FIM | ISSO É DECLARADO PARA O BOOTSTRAP RODAR-->
</head>

<body>
    <!-- MENU -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Biblioteca Online</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/cadastro_usuario.php" target="_self">Cadastro de usuário</a></li>
                        <li><a href="pages/listar_usuario.php">Listar Usuário</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Filiais<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/cadastro_filial.php">Cadastro de Filial</a></li>
                        <li><a href="pages/listar_filial.php">Listar Filiais</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/cadastro_categoria.php">Cadastro de Categoria</a></li>
                        <li><a href="pages/listar_categoria.php">Listar Categorias</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Autores<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/cadastro_autor.php">Cadastro de Autor</a></li>
                        <li><a href="pages/listar_autor.php">Listar Autores</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Livros<span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="pages/cadastro_livro.php">Cadastro de Livro</a></li>
                        <li><a href="pages/listar_livro.php">Listar Livros</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Sair</a>
                </li>

            </ul>
        </div>

    </nav>

    <!-- FIM MENU -->
    <div class="biblio">
        <br />>
        <center>
            <h1>Bem-Vindo a sua Biblioteca</h1>
        </center>
    </div>
</body>

</html>
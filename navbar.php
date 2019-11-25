<!--
    <ul>
        <li><a href="index.php"> Home</a> </li>

        <li><a href="#"> Usuários</a>

            <ul>
                <li><a href="pages/cadastro_usuario.html" target="_self">Cadastro de usuário</a></li>
                <li><a href="views/listar_usuario.php">Listar Usuário</a></li>
            </ul>
        </li>

        <li><a href="#"> Filiais</a>

            <ul>
                <li><a href="pages/cadastro_filial.html">Cadastro de Filial</a></li>
                <li><a href="views/listar_filial.php">Listar Filiais</a></li>
            </ul>
        </li>

        <li><a href="#"> Categoria</a>

            <ul>
                <li><a href="pages/cadastro_categoria.html">Cadastro de Categoria</a></li>
                <li><a href="views/listar_categoria.php">Listar Categorias</a></li>
            </ul>
        </li>

        <li><a href="#"> Autores</a>

            <ul>
                <li><a href="pages/cadastro_autor.html">Cadastro de Autor</a></li>
                <li><a href="views/listar_autor.php">Listar Autores</a></li>
            </ul>
        </li>

        <li><a href="#"> Livros</a>

            <ul>
                <li><a href="pages/cadastro_livro.php">Cadastro de Livro</a></li>
                <li><a href="views/listar_livro.php">Listar Livros</a></li>
            </ul>
        </li>
    </ul>

    <div class="sair">
        <a href="login.php">
            <img src="imagens/sair.png" width="50px" height="50px" />
        </a>
    </div>
-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Biblioteca Online</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuários<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="cadastro_usuario.php" target="_self">Cadastro de usuário</a></li>
            <li><a href="views/listar_usuario.php">Listar Usuário</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Filiais<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="cadastro_filial.php">Cadastro de Filial</a></li>
            <li><a href="views/listar_filial.php">Listar Filiais</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="cadastro_categoria.php">Cadastro de Categoria</a></li>
            <li><a href="views/listar_categoria.php">Listar Categorias</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Autores<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="cadastro_autor.php">Cadastro de Autor</a></li>
            <li><a href="views/listar_autor.php">Listar Autores</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Livros<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="cadastro_livro.php">Cadastro de Livro</a></li>
            <li><a href="views/listar_livro.php">Listar Livros</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>
<html>
  <!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf8">
                <title>Login</title>
        <link rel="icon" href="../imagem/favicon.png" type="imagem/x-png">
        <link href="estilos/bootstrap.css" rel="stylesheet" />
            </head>

<body>

<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo "<h1><center>MENU GERAL</center> </h1> 

      <center><h2> Usuários </h2></center>
       <center>  <a href= \"Usuarios/cadastro_usuario.html\"    >Cadastrar usuário     </a></center><br />
       <center>  <a href=\"Usuarios/listar_usuario.php\"    >Listar Usuários     </a></center><br />
 <br />
 <br />
      <center><h2> Categoria </h2></center>
       <center>  <a href= \"Categoria/cadastro_categoria.html\"    >Cadastrar Categoria     </a></center><br />
       <center>  <a href=\"Categoria/listar_categoria.php\"    >Listar Categorias     </a></center><br />
 <br />
 <br />
       <center><h2> Autores </h2></center>
       <center>  <a href= \"Autor/cadastro_autor.html\"    >Cadastrar Autor     </a></center><br />
       <center>  <a href=\"Autor/listar_autor.php\"    >Listar Autores     </a></center><br />
 <br />
 <br />
      <center><h2> Filial </h2></center>
       <center>  <a href= \"Filial/cadastro_filial.html\"    >Cadastrar Filial     </a></center><br />
       <center>  <a href=\"Filial/listar_filial.php\"    >Listar Filiais     </a></center><br />
 <br />
 <br />
      <center><h2> Livros </h2></center>
       <center>  <a href= \"Livros/cadastro_livro.html\"    >Cadastrar Livro     </a></center><br />
       <center>  <a href=\"Livros/listar_livro.php\"    >Listar Livros     </a></center><br />
 <br />
 <br />
      Usuário logado: $login_cookie";
    }else{
      echo"<h1>Atenção</h1><br>Para acessar essa página é necessário realizar o <a href='login.html'>login</a>.";
    }
?>
</body>
</html>
<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>alterar</title>
    <link href="estilos/main.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/signin.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->
        
</head>

<body>

    <?php
        include("../includes/conexao.php");
        $sql = "select * from usuario where idUsuario='$_GET[CodUsuario]'";
        $query = mysqli_query($serv, $sql);
        $linha = mysqli_fetch_array($query);
        ?>

    <div class="container-cadastros">
        <form id="form-group col-md-4" name="form1" method="post" action="alterar_autor.php">
            <br />
            <legend>
                <center>
                    <h2>Alterar dados do Usuário</h2>
                </center>
            </legend>
            <input class="form-control" name="IdUsuario" id="IdUsuario" value="<?php echo $linha['idUsuario']; ?>"
                type="hidden" />
            <input class="form-control" type="text" name="Nome" id="Nome" value="<?php echo $linha['nome']; ?>" /><br />
            <input class="form-control" type="text" name="Login" id="Login"
                value="<?php echo $linha['login']; ?>" /><br />
            <input class="form-control" type="password" name="Senha" id="Senha"
                value="<?php echo $linha['senha']; ?>" /><br />
            <button class="btn btn-lg btn-danger btn block" type="submit" name="enviar">Alterar</button>
        </form>
    </div>

</body>

</html>
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
            </head>

<body>

        <?php
        include("../includes/conexao.php");
        $sql = "select * from autor where idAutor='$_GET[CodAutor]'";
        $query = mysqli_query($serv, $sql);
        $linha = mysqli_fetch_array($query);
        ?>

        <div class="container-cadastros">
                <form id="form-group col-md-4" name="form1" method="post" action="alterar_autor.php">
                        <legend>
                                <h1>Alterar Autor</h1>
                        </legend>
                        <h1>Dados Autor</h1>
                        <input name="IdAutor" id="IdAutor" value="<?php echo $linha['idAutor']; ?>" type="hidden" />
                        <input type="text" name="Razao" id="Razao" class="form-control" placeholder="Descrição Autor" required />
                        <input type="text" name="Descricao" id="Descricao" value="<?php echo $linha['NomeAutor']; ?>" /><br />
                        <button class="btn btn-lg btn-danger btn block" type="submit" name="enviar">Alterar</button>
                </form>
        </div>
</body>

</html>
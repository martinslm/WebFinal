<!DOCTYPE html>
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
<?php include "../navbar.php";?>


    <?php
    include("includes/conexao.php");
    $sql = "select * from livro where idLivro='$_GET[idLivro]'";
    $query = mysqli_query($serv, $sql);
    $linha = mysqli_fetch_array($query);
    ?>

    <form id="form1" name="form1" method="post" action="alterar_livro.php">
        <div class="container-cadastros">
            <form id="form-group col-md-4" name="form1" method="post" action="alterar_autor.php">
                <br />
                <legend>
                    <center>
                        <h2>Alterar dados do Livro</h2>
                    </center>
                </legend>
                <input class="form-control" name="IdLivro" id="IdLivro" value="<?php echo $linha['idLivro']; ?>"
                    type="hidden" />
                <input class="form-control" type="text" name="Nome" id="Nome"
                    value="<?php echo $linha['Descricao']; ?>" /><br />
                <button class="btn btn-lg btn-danger btn block" type="submit" name="enviar">Alterar</button>
            </form>
        </div>
    </form>
</body>

</html>
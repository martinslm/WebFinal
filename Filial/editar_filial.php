<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>alterar</title>
    <link href="../estilos/main.css" rel="stylesheet" type="text/css" />
        </head>

<body>



    <?php
    include("../includes/conexao.php");
    $sql = "select * from filial where idFilial='$_GET[CodFilial]'";
    $query = mysqli_query($serv, $sql);
    $linha = mysqli_fetch_array($query);
    ?>

    <form id="form1" name="form1" method="post" action="alterar_filial.php">
        <div class="container-cadastros">
            <form id="form-group col-md-4" name="form1" method="post" action="alterar_autor.php">
                <br />
                <legend>
                    <center>
                        <h2>Alterar dados da Filial</h2>
                    </center>
                </legend>
                <input class="form-control" name="IdFilial" id="IdFilial" value="<?php echo $linha['idFilial']; ?>"
                    type="hidden" />
                <input class="form-control" type="text" name="Descricao" id="Descricao"
                    value="<?php echo $linha['DescricaoFilial']; ?>" /><br />
                <button class="btn btn-lg btn-danger btn block" type="submit" name="enviar">Alterar</button>
            </form>
        </div>
    </form>
</body>

</html>
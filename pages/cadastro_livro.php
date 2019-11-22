<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>Cadastro de Livro</title>
    <link href="../estilos/bootstrap.css" rel="stylesheet" />
    <link href="../estilos/signin.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <form id="form-biblio" name="form1" method="post" action="../views/cadastro_livro.php">
            <br />
            <legend>
                <center>
                    <h2>Cadastro de Livro</h2>
                </center>
            </legend>
            <input type="text" name="Descricao" id="Descricao" class="form-control" placeholder="Descrição do livro"
                maxlength="20" required />
            <br />

            <select type="select" class="form-control" name="autor" required>
                <?php
                include "../views/selectautor.php";

                ?>
            </select>
            <br />
            <select class="form-control" name="caregoria" required>
                <?php
                include "../views/selectcategoria.php";

                ?>
            </select>
            <br />
            <center>
                <button class="btn btn-lg btn-danger btn block" type="submit" name="enviar">Cadastrar</button>
            </center>
            <span>
                <center><a href="../index.php">Voltar</a></center>
            </span>

        </form>
    </div>
</body>

</html>
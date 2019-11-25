<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>Cadastro de Livro</title>
    <link href="../estilos/bootstrap.css" rel="stylesheet" />
    <link href="../estilos/signin.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
        <!-- ISSO ADICIONA O MENU NA PÁGINA -->
    <?php include "../navbar.php";?>
    <!-- FIM | ISSO ADICIONA O MENU NA PÁGINA -->

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
            <select type="select" class="form-control" name="filial" required>
                <?php
                include "../views/selectfilial.php";

                ?>
            </select>
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
        </form>
    </div>
</body>

</html>
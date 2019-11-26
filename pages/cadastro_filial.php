<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>Cadastro de Filial</title>
    <link href="../estilos/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/signin.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
</head>

<body>
    <!-- ISSO ADICIONA O MENU NA PÁGINA -->
    <?php include "../navbar.php"; ?>
    <!-- FIM | ISSO ADICIONA O MENU NA PÁGINA -->
    <div class="container-cadastros">
        <form id="form-biblio" name="form1" method="post" action="../views/cadastro_filial.php">
            <br />

            <legend>
                <center>
                    <h2>Cadastro de Filial</h2>
                </center>
            </legend>
            <input type="text" name="Nome" id="Nome" class="form-control" placeholder="Nome da filial" maxlength="50"
                required />
            <br />

            </center><button class="btn btn-lg btn-danger btn block" type="submit" name="enviar">Cadastrar</button>
            </center>
        </form>
    </div>
</body>


</html>
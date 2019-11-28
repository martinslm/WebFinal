<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="utf8">
    <title>Cadastro de Usuário</title>
    <link href="../estilos/bootstrap.css" rel="stylesheet" />
    <link href="../estilos/signin.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- ISSO ADICIONA O MENU NA PÁGINA -->
    <!-- FIM | ISSO ADICIONA O MENU NA PÁGINA -->
    <div class=" container-user">
        <form id="form-biblio" name="form1" method="post" action="../views/cadastro_usuario.php">
            <br />
            <legend>
                <center>
                    <h2>Cadastro de usuário</h2>
                </center>
            </legend>
            <input type="text" name="Nome" id="Nome" class="form-control" placeholder="Nome" maxlength="50" title="Preencha o campo Nome" required />
            <br />
            <input type="text" name="Login" id="Login" class="form-control" placeholder="Login (Usuário)" maxlength="20" required />
            <br />
            <input type="password" name="Senha" id="Senha" class="form-control" placeholder="Senha" minlength="8" maxlength="50" required />
            <br />
            <center><button class="btn btn-lg btn-danger btn block" type="submit" name="enviar" value="Cadastrar">Cadastrar</button></center>
            <span>
                <center><a href="../login.php">Voltar</a></center>
            </span>

        </form>
    </div>
</body>

</html>
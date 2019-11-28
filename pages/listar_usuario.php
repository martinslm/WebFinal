<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <?php include "../navbar.php"; ?>
    <meta charset="utf8">
            <title>Listagem de Usuários</title>
    <link href="estilos/main.css" rel="stylesheet" type="text/css" />
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link href="../estilos/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../estilos/signin.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    function confirmarExclusao(id) {
        var resposta = confirm(
            "Tem certeza que quer excluir o registro? Se o usuário a ser excluído estiver logado, a conexão será derrubada."
        );
        if (resposta == false) {
            window.location = "listar_usuario.php";
        } else
            window.location = "../views/deletar_usuario.php?CodUsuario=" + id;
    }
    </script>

        
</head>


<body>
    </div>
    <div class="container text-center">
        </br>

        <table class="table">
            <h2>Listagem de Usuarios</h2>
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Nome</th>
                    <th scope="col">Login</th>
                    <th scope="col">Excluir</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("../includes/conexao.php");
                $sql = "select * from usuario";
                $query = mysqli_query($serv, $sql);

                while ($linha = mysqli_fetch_array($query)) {
                    echo "<tr class='text-center'>";
                    echo "<td>$linha[nome]</td>";
                    echo "<td>$linha[login]</td>";
                    echo "<td>";

                    echo "<a href='javascript:confirmarExclusao(" . $linha['idUsuario'] . ");'>
		        <img src='../imagens/deletar.png' border='0' width='16' height='16' /></a>";
                    echo "</td>";

                    echo "<td>";
                    echo "<a href='editar_usuario.php?CodUsuario=" . $linha['idUsuario'] . "'>";
                    echo "<img src='../imagens/editar.png' border='0' width='16' height='16' /></a>";
                    echo "</td>";
                    echo "</tr>\n";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html> 
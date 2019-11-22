<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>Listagem de Categorias</title>
    <link href="../estilos/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="../estilos/home.css" rel="stylesheet" />

    <script type="text/javascript">
    function confirmarExclusao(id) {
        var resposta = confirm("Tem certeza que quer excluir o registro?");
        if (resposta == false) {
            window.location = "listar_cateogoria.php";
        } else
            window.location = "deletar_categoria.php?CodCategoria=" + id;
    }
    </script>
        
</head>

<body>
    <span>
        <center><a href="../index.php">Voltar</a></center>
    </span>
    <div class="container text-center">
        </br>

        <table class="table">
            <h2>Listagem de Categorias</h2>
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Descrição da categoria</th>
                    <th scope="col">Excluir</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include("../includes/conexao.php");
                $sql = "select * from categoria";
                $query = mysqli_query($serv, $sql);

                while ($linha = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>$linha[DescricaoCategoria]      </td>";
                    echo "<td style='text-align:center'>";
                    echo "<a href='javascript:confirmarExclusao(" . $linha['idCategoria'] . ");'>
		        <img src='../imagens/deletar.png' border='0' width='16' height='16' /></a>";
                    echo "</td>";
                    echo "<td style='text-align:center'>";
                    echo "<a href='editar_categoria.php?CodCategoria=" . $linha['idCategoria'] . "'>";
                    echo "<img src='../imagens/editar.png' border='0' width='16' height='16' /></a>";
                    echo "</td>";
                    echo "</tr>\n";
                }
                ?>
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </div>
</body>

</html> 
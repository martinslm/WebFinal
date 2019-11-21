<html lang="pt-br">
    

<head>
    <meta charset="utf8">
            <title>Listagem</title>
    <link href="estilos/main.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="../estilos/home.css" rel="stylesheet" />

    <script type="text/javascript">
    function confirmarExclusao(id) {
        var resposta = confirm("Tem certeza que quer excluir o registro?");
        if (resposta == false) {
            window.location = "listar_fornecedores.php";
        } else
            window.location = "deletar_fornecedor.php?CodFornecedor=" + id;
    }
    </script>

        
</head>

<body>
    <div class="container">
        <?php include "../navbar.php" ?>
    </div>
    <div class="container text-center">
        </br>
        <table id="data">
            <table class="table">
                <h2>Listagem de Usuarios</h2>
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">CodFornecedor</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Excluir</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
					include("includes/conexao.php");
					$sql = "select * from livro";
					$query = mysqli_query($serv, $sql);

					while ($linha = mysqli_fetch_array($query)) {
						echo "<tr>";
						echo "<td>$linha[Nome]      </td>";
						# inclui uma imagem que se clicada executa o javascript confirmarExclusao 
						echo "<td style='text-align:center'>";
						echo "<a href='javascript:confirmarExclusao(" . $linha['CodFornecedor'] . ");'>
		        <img src='imagens/deletar.png' border='0' width='16' height='16' /></a>";
						echo "</td>";
						# inclui uma imagem que se clicada executa a pagina editar_fornecedor.php
						echo "<td style='text-align:center'>";
						echo "<a href='editar_fornecedor.php?CodFornecedor=" . $linha['CodFornecedor'] . "'>";
						echo "<img src='imagens/editar.png' border='0' width='16' height='16' /></a>";
						echo "</td>";
						echo "</tr>\n";
					}
					?>
                </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html> 
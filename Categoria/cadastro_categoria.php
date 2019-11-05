<?php 
        include("includes/conexao.php"); 
        $sql = "INSERT INTO fornecedor VALUES ( null, 
                                               '$_POST[Descricao]'
                                                )"; 
        $query = mysqli_query($serv,$sql); 
        if ($query) 
                header("Location: listar_categoria.php"); 
        else 
                echo "Erro ao inserir registro"; 
?>  
<?php 
        include("includes/conexao.php"); 
        $sql = "INSERT INTO fornecedor VALUES ( null, 
                                               '$_POST[Razao]', 
                                               '$_POST[Fantasia]',
                                               '$_POST[Endereco]',
                                               '$_POST[Complemento]',
                                               '$_POST[Bairro]',
                                               '$_POST[Cidade]',
                                               '$_POST[CEP]',
                                               '$_POST[UF]',
                                               '$_POST[Fone]',
                                               '$_POST[Fax]',
                                               '$_POST[Email]',
                                               '$_POST[www]',
                                               '$_POST[cnpj]',
                                               '$_POST[InscricaoEstadual]'
                                                )"; 
        $query = mysqli_query($serv,$sql); 
        if ($query) 
                header("Location: listar_fornecedores.php"); 
        else 
                echo "Erro ao inserir registro"; 
?>  
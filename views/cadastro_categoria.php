<?php 
    include("../includes/conexao.php"); 

    $nome = $_POST[Descricao];

    $sqlValid  = "SELECT * FROM categoria WHERE DescricaoCategoria = '$nome'";

    $queryValid = mysqli_query($serv,$sqlValid); 

      if (mysqli_num_rows($queryValid)>0){

        echo"<script language='javascript' type='text/javascript'>
        alert('Já existe uma categoria cadastrada com esse nome!');window.location
        .href='listar_categoria.php';</script>";
        die(); 
      }
      else
      {
        $sql = "INSERT INTO categoria VALUES ( null, 
                                               '$nome')"; 

        $query = mysqli_query($serv,$sql); 
        if ($query) 
                header("Location: ../index.php"); 
        else 
                echo "<script language='javascript' type='text/javascript'>
        alert('Erro ao inserir registro');window.location
        .href='cadastro_categoria.php';</script>"; 
      }
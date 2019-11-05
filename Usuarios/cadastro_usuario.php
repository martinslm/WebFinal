<?php 
        include("../includes/conexao.php"); 

        $login = $_POST[Login];

$sqlValid  = "SELECT * FROM usuario WHERE login = '$login'";

$queryValid = mysqli_query($serv,$sqlValid); 

      if (mysqli_num_rows($queryValid)>0){

        echo"<script language='javascript' type='text/javascript'>
        alert('Já existe um usuário cadastrado para este login! Por favor informe um outro login.');window.location
        .href='cadastro_usuario.html';</script>";
        die(); 
      }
      else
      {
        $sql = "INSERT INTO usuario VALUES ( null, 
                                               '$login', 
                                               '$_POST[Nome]',
                                               '$_POST[Senha]'
                                                )"; 
        $query = mysqli_query($serv,$sql); 
        if ($query) 
                header("Location: listar_usuario.php"); 
        else 
                echo "<script language='javascript' type='text/javascript'>
        alert('Erro ao inserir registro');window.location
        .href='cadastro_usuario.html';</script>"; 
      }
?>  


<?php 
 include("../includes/conexao.php"); 

    $idFilial = $_GET[CodFilial];

    $sqlValid  = "SELECT * FROM livro WHERE IdFilial = '$idFilial'";

    $queryValid = mysqli_query($serv,$sqlValid); 

      if (mysqli_num_rows($queryValid)>0){

        echo"<script language='javascript' type='text/javascript'>
        alert('Já existem livros cadastrados para esta filial, portanto não será possível excluí-lo!');window.location
        .href='listar_filial.php';</script>";
        die(); 
      }
      else
      {      
		$sql = "delete from filial where idFilial='$idFilial' limit 1"; 
		$query = mysqli_query($serv,$sql); header("Location:listar_Filial.php");
      }
 ?>   
<?php
include("../includes/conexao.php");

$nome = $_POST[Nome];

$sqlValid  = "SELECT * FROM autor WHERE NomeAutor = '$nome'";

$queryValid = mysqli_query($serv, $sqlValid);

if (mysqli_num_rows($queryValid) > 0) {

  echo "<script language='javascript' type='text/javascript'>
        alert('Já existe um autor cadastrado com esse nome!');window.location
        .href='../pages/cadastro_autor.php';</script>";
  die();
} else {
  $sql = "INSERT INTO autor VALUES ( null, 
                                               '$nome')";

  $query = mysqli_query($serv, $sql);
  if ($query)
    header("Location:../pages/listar_autor.php");
  else
    echo "<script language='javascript' type='text/javascript'>
        alert('Erro ao inserir registro');window.location
        .href='cadastro_autor.php';</script>";
}
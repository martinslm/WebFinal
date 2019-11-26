<?php
include("../includes/conexao.php");

$nome = $_POST[Nome];

$sqlValid  = "SELECT * FROM filial WHERE DescricaoFilial = '$nome'";

$queryValid = mysqli_query($serv, $sqlValid);

if (mysqli_num_rows($queryValid) > 0) {

  echo "<script language='javascript' type='text/javascript'>
        alert('Já existe uma filial cadastrada com esse nome!');window.location
        .href='../pages/cadastro_filial.php';</script>";
  die();
} else {
  $sql = "INSERT INTO filial VALUES ( null, 
                                               '$nome')";

  $query = mysqli_query($serv, $sql);
  if ($query)
    header("Location: ../pages/listar_filial.php");
  else
    echo "<script language='javascript' type='text/javascript'>
        alert('Erro ao inserir registro');window.location
        .href='cadastro_filial.html';</script>";
}
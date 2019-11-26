<?php
include("../includes/conexao.php");

$idCategoria = $_GET[CodCategoria];

$sqlValid  = "SELECT * FROM livro WHERE IdCategoria = '$idCategoria'";

$queryValid = mysqli_query($serv, $sqlValid);

if (mysqli_num_rows($queryValid) > 0) {

  echo "<script language='javascript' type='text/javascript'>
        alert('Já existem livros cadastrados para esta categoria, portanto não será possível excluí-lo!');window.location
        .href='../pages/listar_categoria.php';</script>";
  die();
} else {
  $sql = "delete from categoria where idCategoria='$idCategoria' limit 1";
  $query = mysqli_query($serv, $sql);
  header("Location:../pages/listar_categoria.php");
}
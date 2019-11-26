<?php
include("../includes/conexao.php");

$idAutor = $_GET[CodAutor];

$sqlValid  = "SELECT * FROM livro WHERE IdAutor = '$idAutor'";

$queryValid = mysqli_query($serv, $sqlValid);

if (mysqli_num_rows($queryValid) > 0) {

  echo "<script language='javascript' type='text/javascript'>
        alert('Já existem livros cadastrados para este autor, portanto não será possível excluí-lo!');window.location
        .href='../pages/listar_autor.php';</script>";
  die();
} else {
  $sql = "delete from autor where IdAutor='$idAutor' limit 1";
  $query = mysqli_query($serv, $sql);
  header("Location:../pages/listar_autor.php");
}
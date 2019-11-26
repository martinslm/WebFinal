<?php
include("../includes/conexao.php");

$nome = $_POST['Descricao'];
$filial = $_POST['Filial'];
$autor = $_POST['Autor'];
$categoria = $_POST['Categoria'];

$sqlValid  = "SELECT * FROM livro WHERE Descricao = '$nome'";

$queryValid = mysqli_query($serv, $sqlValid);

if (mysqli_num_rows($queryValid) > 0) {

        echo "<script language='javascript' type='text/javascript'>
        alert('Já existe um livro cadastrado com esse nome!');window.location
        .href='../pages/listar_livro.php';</script>";
        die();
} else {
        $sql = "INSERT INTO livro VALUES ( null, 
                                               '$nome',
                                               $filial,
                                               $autor,
                                               $categoria)";

        $query = mysqli_query($serv, $sql);
        if ($query)
                header("Location: ../pages/listar_livro.php");
        else
              echo "<script language='javascript' type='text/javascript'>
        alert('Erro ao inserir registro');window.location
        .href='cadastro_livro.php';</script>";
}
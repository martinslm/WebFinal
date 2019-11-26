<?php

include("../includes/conexao.php");

$sql = "select IdCategoria,DescricaoCategoria from categoria";
$query = mysqli_query($serv, $sql);

while ($linha = mysqli_fetch_array($query)) {

    echo "<option value=$linha[IdCategoria]>$linha[DescricaoCategoria]</option>";

}
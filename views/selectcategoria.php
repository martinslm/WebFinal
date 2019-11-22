<?php

include("../includes/conexao.php");

$sql = "select IdCategoria,DescricaoCategoria from categoria";
$query = mysqli_query($serv, $sql);

while ($linha = mysqli_fetch_array($query)) {

    echo "<option>$linha[DescricaoCategoria]</option>";

}
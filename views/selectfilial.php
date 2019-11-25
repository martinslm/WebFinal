<?php

include("../includes/conexao.php");

$sql = "select IdFilial,DescricaoFilial from filial";
$query = mysqli_query($serv, $sql);

while ($linha = mysqli_fetch_array($query)) {

    echo "<option>$linha[DescricaoFilial]</option>";

}
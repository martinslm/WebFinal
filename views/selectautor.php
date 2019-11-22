<?php

include("../includes/conexao.php"); 

$sql = "select IdAutor,NomeAutor from autor";
$query = mysqli_query($serv, $sql);

while ($linha = mysqli_fetch_array($query)) {
    
    echo "<option>$linha[NomeAutor]</option>";

}
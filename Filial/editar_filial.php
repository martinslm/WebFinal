<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>alterar</title>
        <link href="../estilos/main.css" rel="stylesheet" type="text/css" /> 
    </head>
<body>



<?php 
    include("../includes/conexao.php"); 
    $sql="select * from filial where idFilial='$_GET[CodFilial]'"; 
    $query = mysqli_query($serv,$sql); 
    $linha = mysqli_fetch_array($query); 
?>  
 
<h1><center>Alterar Filial</center></h1> 
<form id="form1" name="form1" method="post" action="alterar_filial.php"> 

<fieldset> 
    <legend>Dados Filial</legend> 
    <input name="IdFilial" id="IdFilial" value="<?php echo $linha['idFilial'];?>" type="hidden"/>
    <label for="Descricao">Descrição Filial: </label> 
    <input type="text"  name="Descricao" id="Descricao" value="<?php echo $linha['DescricaoFilial'];?>" /><br /> 
    <input name="enviar" type="submit" class="btn btn-light" value="Alterar" /></fieldset> 
</form>  



</body>
</html> 


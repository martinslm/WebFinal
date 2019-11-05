<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>alterar</title>
        <link href="estilos/main.css" rel="stylesheet" type="text/css" /> 
    </head>
<body>



<?php 
	include("includes/conexao.php"); 
	$sql="select * from fornecedor where CodFornecedor='$_GET[CodFornecedor]'"; 
	$query = mysqli_query($serv,$sql); 
	$linha = mysqli_fetch_array($query); 
?>  
 
<h1><center>Alterar Fornecedor</center></h1> 
<form id="form1" name="form1" method="post" action="alterar_fornecedor.php"> 

<fieldset> 
	<legend>Ficha</legend> 
	<label for="CodFornecedor">CodFornecedor: </label> <input type="text"  name="CodFornecedor" readonly="readonly" id="CodFornecedor" value="<?php echo $linha['CodFornecedor'];?>" /><br /> 
	<label for="Razao">        Razao:         </label> <input type="text"  name="Razao"             id="Razao"            value="<?php echo $linha['Razao'];?>"        /><br /> 
	<label for="Fantasia">     Fantasia:      </label> <input type="text"  name="Fantasia"          id="Fantasia"         value="<?php echo $linha['Fantasia'];?>"     /><br /> 
	<label for="Endereço">     Endereço:      </label> <input type="text"  name="Endereco"          id="Endereco"         value="<?php echo $linha['Endereco'];?>"     /><br />
    <label for="Complemento">  Complemento:   </label> <input type="text"  name="Complemento"       id="Complemento"      value="<?php echo $linha['Complemento'];?>"  /><br />
    <label for="Bairro">       Bairro:        </label> <input type="text"  name="Bairro"            id="Bairro"           value="<?php echo $linha['Bairro'];?>"       /><br />
    <label for="Cidade">       Cidade:        </label> <input type="text"  name="Cidade"            id="Cidade"           value="<?php echo $linha['Cidade'];?>"       /><br />
    <label for="CEP">          CEP:           </label> <input type="text"  name="CEP"               id="CEP"              value="<?php echo $linha['CEP'];?>"          /><br />
    <label for="UF">           UF:            </label> <input type="text"  name="UF"                id="UF"               value="<?php echo $linha['UF'];?>"           /><br />
    <label for="Fone">         Fone:          </label> <input type="tel"   name="Fone"              id="Fone"             value="<?php echo $linha['Fone'];?>"         /><br />
    <label for="Fax">          Fax:           </label> <input type="tel"   name="Fax"               id="Fax"              value="<?php echo $linha['Fax'];?>"          /><br />
    <label for="Email">        Email:         </label> <input type="E-mail"name="Email"             id="Email"            value="<?php echo $linha['Email'];?>"        /><br />
    <label for="www">          www:           </label> <input type="Url"   name="www"               id="www"              value="<?php echo $linha['www'];?>"          /><br />
    <label for="cnpj">         cnpj:          </label> <input type="text"  name="cnpj"              id="cnpj"             value="<?php echo $linha['cnpj'];?>"         /><br />
    <label for="InscricaoEstadual">Inscr.Est: </label> <input type="text"  name="InscricaoEstadual" id="InscricaoEstadual" value="<?php echo $linha['InscricaoEstadual'];?>" />   <br />











	<label></label> <input name="enviar" type="submit" value="Alterar" /> 
</fieldset> 
</form>  



</body>
</html> 


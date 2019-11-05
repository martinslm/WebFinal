<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$banco = "biblioteca"; 
$serv = mysqli_connect($host, $user, $pass,$banco) 
        or 
		die("Impossível conectar-se ao servidor :".$host); 
?> 
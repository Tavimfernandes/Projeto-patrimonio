<?php
// arquivo de conexão

$host = "localhost";
$user = "root";
$pass = "";
$banco = "dashboard";

$link = mysqli_connect($host, $user, $pass, $banco);
if(mysqli_errno($link)){
//echo "Erro de conexão";
}else{
//echo "Conexão ok!";
}

?>

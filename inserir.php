<?php
include "formulario.php";

$link = mysqli_connect($host, $user, $pass, $banco);
if(mysqli_errno($link)){
//echo "Erro de conexão";
}else{
//echo "Conexão ok!";
}

$descricao = $_POST['descricao'];
$data = $_POST['data-aquisicao'];
$ativo = $_POST['ativo'];
$patrimonio = $_POST['patrimonio'];
$fornecedor = $_POST['fornecedor'];
$filial = $_POST['filial'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];

if($descricao !=""){
    mysqli_query($link,"INSERT INTO tb_cadastros(categoria, data_aquisicao, ativo, descricao, patrimonio, filial, fornecedor, marca, modelo)VALUES
    ('$categoria','$data', '$ativo','$descricao','$patrimonio','$filial', '$fornecedor', '$marca', '$modelo')");
    header("Location: http://localhost/db/cadastros.php");
    die();
}else{
    echo "Não foi possível cadastrar o patrimônio!";
}

?>
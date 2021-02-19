<?php 
$servidor="localhost";
$dbname="estudo";
$dbusuario="admin";
$dbsenha="admin";
$conn = mysqli_connect($servidor,$dbusuario, $dbsenha, $dbname);

if(!$conn){
    die("conexao falhou". mysgli_connect_error());
}

?>
<?php

session_start();

$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "csv";


//conexao como banco de dados//

$conecta = mysqli_connect($localhost, $user, $pass, $banco);
mysqli_set_charset($conecta, 'utf8');

?>
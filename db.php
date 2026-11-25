<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "enderecos";

$conexao = mysqli_connect($hostname, $username, $password, $database);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!";
?>

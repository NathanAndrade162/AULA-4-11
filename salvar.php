<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo $_POST['cep'];
    $cep = $_POST['cep'];
    $endereco = buscarCep($cep);
}
?>
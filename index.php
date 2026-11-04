<?php 
include "./api.php";
// $endereco = buscarCep(69902690);
// echo "<pre>";
// print_r($endereco);
// echo "</pre>";

if(isset($_GET['cep'])){
$cep = $_GET['cep'];
$endereco = buscarCep($cep);
}
?>
<form method="GET">
    <input 
        type="text"
        placeholder="Buscar CEP..."
        name="cep"
        maxlength="8"
    >
    <button type="submit">Buscar</button>
</form>
<?php if(isset($endereco['cep'])) ?>
<div>
    <h2>CEP encontrado</h2>
    <ul>
        <?php 
        foreach($endereco as $data => $valor){
            if(strlen($valor)> 0){
            echo "$data:$valor <br>";
        }
        }
        ?>

    </ul>
</div>
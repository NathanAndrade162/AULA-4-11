<?php 
include "acoes.php";
$enderecos = (buscarTabela("enderecos"));
$VERIFICAR_LINHAS = $enderecos->num_rows > 0;
?>
<?php if($VERIFICAR_LINHAS): ?>
    <?php foreach ($enderecos as $enderecos): ?>
        <ul>
            <h2>DADOS</h2>
            <li><?php echo $endereco['cep']?></li>
<li><?php echo $endereco['logradouro']?></li>
<li><?php echo $endereco['bairro']?></li>
<li><?php echo $endereco['localidade']?></li>
<li><?php echo $endereco['uf']?></li>
<li><?php echo $endereco['estado']?></li>
<li><?php echo $endereco['regiao']?></li>
<li><?php echo $endereco['ddd']?></li>
        </ul>
        <ul>
            
        </ul>
        <?php endforeach?>
        <?php else: ?>
            <p>NENHUM <b>CEP</b>em nosso sistema!</p>
            <?php endif?>
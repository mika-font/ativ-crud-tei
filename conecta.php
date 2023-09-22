<?php
$bdserv="localhost";
$bdusu = "root";
$bdsenha= "";
$bd="livrostore";

$conexao= mysqli_connect($bdserv, $bdusu, $bdsenha, $bd);
    if(mysqli_connect_errno($conexao)){
        echo "Problemas para conectar no banco";
        echo mysqli_connect_error();
        die();
    }
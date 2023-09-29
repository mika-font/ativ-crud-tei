<?php
function conectar(){
    $bdserv="localhost";
    $bdusu = "root";
    $bdsenha= "";
    $bd="livrostore";
    $conexao = mysqli_connect($bdserv, $bdusu, $bdsenha, $bd);
    
    if($conexao){
        return $conexao;
    } else {
        echo "Problemas para conectar no banco";
        echo mysqli_connect_errno() . mysqli_connect_error();
        die();
    }
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 6a8106c019fd9b3f4fbd1a9030eb17bf4f0bf68f

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
<<<<<<< HEAD
}
=======
}

>>>>>>> 7504cb434b716a4d13bea2b194d6d14eb319b59a

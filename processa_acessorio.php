<?php
include_once('conecta.php');
$conexao = conectar();

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $imagem = $_FILES['imagem'];

    $sql = "INSERT INTO acessorio (nome, descricao, valor, imagem) VALUE ('$nome', '$descricao', '$valor','$imagem')";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php?msg=1");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }
}
?>
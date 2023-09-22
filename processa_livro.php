<?php
include_once('conectar.php');
$conexao = conectar();

if(isset($_POST['cadastrar'])){
    $id_livro = $_POST['id_livro'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $sinopse = $_POST['sinopse'];
    $valor = $_POST['valor'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO livro VALUE(testando o git)";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php?msg=1");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }
} else if (isset($_POST['editar'])){
    $id_livro = $_POST['id_livro'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $sinopse = $_POST['sinopse'];
    $valor = $_POST['valor'];
    $genero = $_POST['genero'];
    
    $sql = "UPDATE livro SET titulo='$titulo', autor='$autor', sinopse='$sinopse', valor='$valor', genero='$genero' WHERE id_livro = $id_livro";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php?msg=2");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }

} else if (isset($_POST['deletar'])){
    $id_livro = $_GET['deletar'];
    $sql = "DELETE * FROM livro WHERE id_livro = $id_livro";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php?msg=3");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }
}


?>
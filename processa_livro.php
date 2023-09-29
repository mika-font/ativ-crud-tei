<?php
include_once('conecta.php');
$conexao = conectar();

if(isset($_POST['cadastrar'])){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $sinopse = $_POST['sinopse'];
    $valor = $_POST['valor'];
    $genero = $_POST['genero'];

    $imagem = $_FILES['imagem'];
    $name_imagem = $imagem['name'];
    $tmp_name_imagem = $imagem['tmp_name'];
    $diretorio = "capa_book/";

    $extension_imagem = strtolower(pathinfo($name_imagem, PATHINFO_EXTENSION));
    $newname_img = uniqid() . '.' . $extension_imagem;
    move_uploaded_file($tmp_name_imagem, $diretorio . $newname_img);
    $arquivo = $diretorio . $newname_img;

    $sql = "INSERT INTO livro (titulo, autor, sinopse, valor, genero, imagem) VALUE ('$titulo', '$autor', '$sinopse', '$valor', '$genero', '$arquivo')";
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

    $sql = "SELECT (imagem) FROM livro WHERE id_livro = $id_livro";
    $consulta = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($consulta);
    unlink($dados['imagem']);

    $imagem = $_FILES['imagem'];
    $name_imagem = $imagem['name'];
    $tmp_name_imagem = $imagem['tmp_name'];
    $diretorio = "capa_book/";

    $extension_imagem = strtolower(pathinfo($name_imagem, PATHINFO_EXTENSION));
    $newname_img = uniqid() . '.' . $extension_imagem;
    move_uploaded_file($tmp_name_imagem, $diretorio . $newname_img);
    $arquivo = $diretorio . $newname_img;
    
    $sql = "UPDATE livro SET titulo='$titulo', autor='$autor', sinopse='$sinopse', valor='$valor', genero='$genero', imagem='$arquivo' WHERE id_livro = $id_livro";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php?msg=2");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }

} else if (isset($_GET['deletar'])){
    $id_livro = $_GET['deletar'];
    $sql1 = "SELECT imagem FROM livro WHERE id_livro = $id_livro";
    $result = mysqli_query($conexao, $sql1);
    $dados = mysqli_fetch_assoc($result);
    
    unlink($dados['imagem']);
    
    $sql = "DELETE FROM livro WHERE id_livro = $id_livro";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }
}
?>
<?php
include_once('conecta.php');
$conexao = conectar();

if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $imagem = $_FILES['imagem'];
    $name_imagem = $imagem['name'];
    $tmp_name_imagem = $imagem['tmp_name'];
    $diretorio = "acessorios/";

    $extension_imagem = strtolower(pathinfo($name_imagem, PATHINFO_EXTENSION));
    $newname_img = uniqid() . '.' . $extension_imagem;
    move_uploaded_file($tmp_name_imagem, $diretorio . $newname_img);
    $arquivo = $diretorio . $newname_img;

    $sql = "INSERT INTO acessorio (nome, descricao, valor, imagem) VALUE ('$nome', '$descricao', '$valor','$arquivo')";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }
} else if (isset($_POST['editar'])){
    $id_acessorio = $_POST['id_acessorio'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $sql = "SELECT (imagem) FROM acessorio WHERE id_acessorio = $id_acessorio";
    $consulta = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($consulta);
    unlink($dados['imagem']);

    $imagem = $_FILES['imagem'];
    $name_imagem = $imagem['name'];
    $tmp_name_imagem = $imagem['tmp_name'];
    $diretorio = "acessorios/";

    $extension_imagem = strtolower(pathinfo($name_imagem, PATHINFO_EXTENSION));
    $newname_img = uniqid() . '.' . $extension_imagem;
    move_uploaded_file($tmp_name_imagem, $diretorio . $newname_img);
    $arquivo = $diretorio . $newname_img;
    
    $sql = "UPDATE acessorio SET nome='$nome', descricao='$descricao', valor='$valor', imagem='$arquivo' WHERE id_acessorio = $id_acessorio";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }
} else if (isset($_GET['deletar'])){
    $id_acessorio = $_GET['deletar'];
    $sql1 = "SELECT imagem FROM acessorio WHERE id_acessorio = $id_acessorio";
    $result = mysqli_query($conexao, $sql1);
    $dados = mysqli_fetch_assoc($result);
    
    unlink($dados['imagem']);
    
    $sql = "DELETE FROM acessorio WHERE id_acessorio = $id_acessorio";
    $resultado = mysqli_query($conexao, $sql);
    if($resultado == true){
        header("Location: index.php");
    } else {
        echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    }
}
?>
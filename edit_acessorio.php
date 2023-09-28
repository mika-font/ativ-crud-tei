<?php
include_once("conecta.php");
$id = $_GET['editar'];
$sql = "SELECT * FROM acessorios WHERE id=" . $id;
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar</title>
</head>

<body>
    <div class="container">
        <h1> Editar Acessorios </h1>
        <hr>
        <div class="row">
            <form action="processa_acessorio.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />

                <div class="form-group">
                    <label> Nome </label>
                    <input class="form-control" type="text" name="nome" value="<?php echo $dados['nome']; ?>" required="required" />
                </div>

                <div class="form-group">
                    <label>Descrição </label>
                    <input class="form-control" type="text" name="descricao" placeholder="descricao do produto" value="<?php echo $dados['telefone']; ?>" required="required" />
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="editar"> Editar </button>
                </div>

            </form>
        </div>

        <hr>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="processa_acessorio.php">Acessorios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar</li>
                <li class="breadcrumb-item"><a href="index.php">Página Inícial</a></li>
            </ol>
        </nav>

    </div>
</body>

</html>
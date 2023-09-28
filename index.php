<?php
include("conecta.php");
$conexao = conectar();
$sql = "SELECT * FROM livro";
$res = mysqli_query($conexao, $sql);

$sql2 = "SELECT * FROM acessorio";
$resultado = mysqli_query($conexao, $sql2);
$acessorio = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Livros</title>
</head>

<body>
    <header>
        <a href="cad_livro.php">Cadastrar Livros</a>
        <a href="cad_acessorio.php">Cadastrar Acessórios</a>
    </header>
    <main class="container pt-3">
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center">
                    <h1>Catálogo da MilkShakespeare</h1>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center">
                    <h3>Livros</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $limit = 4;
            $count = 0;
            while ($livros = mysqli_fetch_assoc($res)) :
                $count++
            ?>
                <div class="col-xl-3">
                    <div class="card h-100">
                        <img src="<?php echo $livros['imagem']; ?>" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <p></p>
                        </div>
                    </div>
                </div>
                <? if ($count == $limit) : ?>
        </div>
        <div class="pb-2"></div>
        <div class="row">
    <?php endif;
            endwhile; ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="text-center">
                <h3>Acessórios</h3>
            </div>
        </div>
    </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
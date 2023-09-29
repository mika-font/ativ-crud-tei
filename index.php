<?php
include("conecta.php");
$conexao = conectar();
$sql = "SELECT * FROM livro";
$res = mysqli_query($conexao, $sql);

$sql2 = "SELECT * FROM acessorio";
$resultado = mysqli_query($conexao, $sql2);

function recortarText($texto)
{
    $palavras = explode(' ', $texto);
    $recorte = array_slice($palavras, 0, 15);
    $sinopse = implode(' ', $recorte);
    return $sinopse;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Livros</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark pb-2">
            <div class="container border-bottom p-1 mb-2">
                <img src="./assets/logo.png" class="navbar-brand me-3" width="50" height="auto">
                <ul class="navbar-nav text-end">
                    <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-light" href="index.php">Lista de Produtos</a></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-light" href="cad_livro.php">Cadastrar Livro</a></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-light" href="cad_acessorios.php">Cadastrar Acessório</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>

    </main>
    <footer class="py-3 my-3 bg-dark text-light">
        <div class="container">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-light" href="index.php">Lista de Produtos</a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-light" href="cad_livro.php">Cadastrar Livro</a></li>
                <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-light" href="cad_acessorios.php">Cadastrar Acessório</a></li>
            </ul>
            <p class="text-center text-light">Claudia Kussuma, Mikael Fontoura e Valentina Zuliani</p>
            <p class="text-center text-light">Instituto Federal Farroupilha - Campus Avançado Uruguaiana</p>
        </div>
    </footer>
    <h1>Nossos Livros</h1>
    <a href="livros.php">Livros disponiveis</a>
    <a href="autores.php">Autores recomendados</a>
    <a href="cad_livro.php">Cadastrar</a>
<<<<<<< HEAD

    <h2>Acessorios da nossa loja<h2>
        <a href="acessorios.php">Acessorios disponiveis</a>
=======
>>>>>>> 7504cb434b716a4d13bea2b194d6d14eb319b59a
    <table>
        <tr>
            <th>Livros</th>
            <th>Autor</th>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
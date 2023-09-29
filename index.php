<?php
include("conecta.php");
$conexao = conectar();
$sql= "SELECT * FROM livro";
$res = mysqli_query($conexao, $sql);

$sql2 = "SELECT * FROM acessorio";
$resultado = mysqli_query($conexao, $sql2);

function recortarText($texto){
    $palavras = explode(' ', $texto);
    $recorte = array_slice($palavras, 0, 15);
    $sinopse = implode(' ', $recorte);
    return $sinopse;
}

function mascaraDinheiro($valor) {
    $valor = number_format($valor, 2, ',', '.');
    return $valor;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Livraria MilkShakespeare</title>
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
                $texto = $livros['sinopse'];
                $sinopse = recortarText($texto);
                $valor = $livros['valor'];
                $valorFormatado = mascaraDinheiro($valor);
                $count++;
            ?>
                <div class="col-xl-3">
                    <div class="card me-2 bg-dark text-bg-dark h-100 w-100">
                        <img src="<?php echo $livros['imagem']; ?>" class="card-img object-fit-cover" height="100%">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $livros['titulo']; ?></h5>
                            <h6 class="card-text"><?php echo $livros['autor']; ?></h6>
                            <p class="card-text"><?php echo $sinopse . '...'; ?></p>
                            <p class="card-text"><?php echo "R$ " . $valorFormatado; ?></p>
                        </div>
                        <div class="card-footer text-center p-2">
                            <button type="button" class="card-link btn btn-outline-info text-light" data-bs-toggle="modal" data-bs-target="#visualizar<?php echo $livros['id_livro']?>">Visualizar</button>
                            <a href="edit_livro.php?id_livro=<?php echo $livros['id_livro']; ?>" class="card-link btn btn-outline-success text-light">Editar</a>
                            <button type="button" class="card-link btn btn-outline-danger text-light" data-bs-toggle="modal" data-bs-target="#confirmarLivro<?php echo $livros['id_livro']; ?>">Excluir</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="visualizar<?php echo $livros['id_livro']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $livros['titulo'] ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><b><?php echo $livros['autor']; ?></b></p>
                                <p><?php echo $livros['sinopse']; ?></p>
                                <img src="<?php echo $livros['imagem']; ?>" class="card-img object-fit-cover" height="100%">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="confirmarLivro<?php echo $livros['id_livro']; ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Deseja mesmo excluir?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Ao confirmar esta ação seu livro deixará de existir em seu banco de dados.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                                <a href="processa_livro.php?deletar=<?php echo $livros['id_livro']; ?>" class="card-link btn btn-danger text-light">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($count == $limit) {
                    echo '<div class="py-3"></div>' . '</div>' . '<div class="row">';
                    $count = 0;
                } ?>
            <?php endwhile; ?>
        </div>
        <hr>
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center">
                    <h3>Acessórios</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $limit = 4;
            $count = 0;
            while ($acessorios = mysqli_fetch_assoc($resultado)) :
                $texto = $acessorios['descricao'];
                $descricao = recortarText($texto);
                $valor = $acessorios['valor'];
                $valorFormatado = mascaraDinheiro($valor);
                $count++;
            ?>
                <div class="col-xl-3">
                    <div class="card me-2 bg-dark text-bg-dark h-100">
                        <img src="<?php echo $acessorios['imagem']; ?>" class="card-img object-fit-cover" height="100%">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $acessorios['nome']; ?></h5>
                            <p class="card-text"><?php echo $descricao . '...'; ?></p>
                            <p class="card-text"><?php echo "R$ " . $valorFormatado; ?></p>
                        </div>
                        <div class="card-footer text-center p-2">
                            <button type="button" class="card-link btn btn-outline-info text-light" data-bs-toggle="modal" data-bs-target="#visualizar_acessorio<?php echo $acessorios['id_acessorio']?>">Visualizar</button>
                            <a href="edit_acessorio.php?id_acessorio=<?php echo $acessorios['id_acessorio']; ?>" class="card-link btn btn-outline-success text-light">Editar</a>
                            <button type="button" class="card-link btn btn-outline-danger text-light" data-bs-toggle="modal" data-bs-target="#confirmarAcessorio<?php echo $acessorios['id_acessorio']; ?>">Excluir</button>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="visualizar_acessorio<?php echo $acessorios['id_acessorio']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $acessorios['nome'] ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><?php echo $acessorios['descricao']; ?></p>
                                <img src="<?php echo $acessorios['imagem']; ?>" class="card-img object-fit-cover" height="100%">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Comprar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal" id="confirmarAcessorio<?php echo $acessorios['id_acessorio']; ?>" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Deseja mesmo excluir?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Ao confirmar esta ação seu acessório deixará de existir em seu banco de dados.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <a href="processa_acessorio.php?deletar=<?php echo $acessorios['id_acessorio']; ?>" class="card-link btn btn-success text-light">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($count == $limit) {
                    echo '<div class="py-3"></div>' . '</div>' . '<div class="row">';
                    $count = 0;
                } ?>
            <?php endwhile; ?>
        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
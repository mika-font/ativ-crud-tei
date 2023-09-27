<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Cadastrar Livro</title>
</head>
<body>
    <header>

    </header>
    <main class="container">
        <form action="processa_livro.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-6">
                    <label class="form-label">Título</label>
                    <input class="form-control" type="text" name="titulo" required>
                </div>
                <div class="col-xl-6">
                    <label class="form-label">Autor(es)</label>
                    <input class="form-control" type="text" name="autor" required>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <label class="form-label">Sinopse</label>
                    <textarea class="form-control" name="sinopse" id="texto" cols="100" rows="30" required></textarea>
                </div>  
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <label class="form-label">Valor</label>
                    <input class="form-control" type="number" name="valor" required>
                </div>
                <div class="col-xl-6">
                    <label class="form-label">Gênero</label>
                    <input class="form-control" type="text" name="genero" required>
                </div>
            </div>
            <div class="row">   
                <div class="col-xl-12">
                    <label class="form-label">Imagem</label>
                    <input class="form-control" type="file" name="imagem" required>
                </div>
            </div>
            <div class="row">
                <div class="p-2">
                    <button class="btn btn-primary" type="submit" name="cadastrar">Cadastrar</button>
                </div>
            </div>
        </form>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <title>Cadastrar Acessorios</title>
</head>
<body>
    <header>

    </header>
    <main class="container">
        <form action="processa_acessorio.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-6">
                    <label class="form-label">Nome</label>
                    <input class="form-control" type="text" name="nome" required>
                </div>
                <div class="col-xl-6">
                    <label class="form-label">Descrição</label>
                    <input class="form-control" type="text" name="descricao" required>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <label class="form-label">Valor</label>
                    <input class="form-control" type="number" name="valor" required>
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
</body>
</html>
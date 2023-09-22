<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <h1>Nossos Livros</h1>
    <a href="livros.php">Livros disponiveis</a>
    <a href="autores.php">Autores recomendados</a>
<?php
    include("conecta.php");
    $sql= "SELECT * FROM livros";
    $res = mysqli_query($conexao, $sql);
     echo '<table border=1>';
    echo '<tr>'
            '<th>Livros</th>'
            '<th>Autor</th>'
        '</tr>';

?>
</body>
</html>
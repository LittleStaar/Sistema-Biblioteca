<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <form action="config.php" method="post">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include "config.php";
if (!$conn){
    die("Falha na conexão". mysqli_connect_error());
}

//Recebe os dados do formulário
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editora = $_POST["editora"];
$sinopse = $_POST["sinopse"];
$anopublicacao = $_POST["anopublicacao"];
$genero = $_POST["genero"];
$paginas = $_POST["paginas"];

//Cria variável para inserir o registro 
$sql = "INSERT INTO `livros`
(`Titulo`, `Autor`, `Editora`, `Sinopse`, `AnoPublicacao`, `Genero`, `Paginas`) VALUES 
('$titulo', '$autor', '$editora', '$sinopse', '$anopublicacao','$genero', '$paginas')";

//Executa a consulta SQL. Se falhar, exibe o erro do banco de dados
$query = mysqli_query(mysql: $conn,query: $sql) or
die(mysqli_error(mysql: $db));

if($query){
    echo "<center>";
    echo "Cadastro realizado com sucesso! <br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}
else{
    echo "<center>";
    echo "Erro ao cadastrar! <br>";
    echo "<a href='index.html'><button title='Home page'>Voltar</button></a>";
    echo "</center>";
}

?>
</body>
</html>
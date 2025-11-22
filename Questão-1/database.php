<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "livraria";

$conexao = new mysql($host, $usuario, $senha, $banco);

$sql = "CREATE TABLE IF NOT EXISTS livros (
    ID INT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    data_publicacao DATE NOT NULL
)";

$conexao -> query($sql);
$resultado = $conexao -> query("SELECT * FROM livros ORDER BY ID ASC");
?>

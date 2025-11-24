<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "livraria";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_errno) {
    die("Falha na conexão: (" . $conexao->connect_errno . ") " . $conexao->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS livros (
    ID INT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    data_publicacao DATE NOT NULL
)";

$conexao->query($sql);
$resultado = $conexao->query("SELECT * FROM livros ORDER BY ID ASC");
?>

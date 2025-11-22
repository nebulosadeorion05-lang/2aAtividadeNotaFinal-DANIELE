<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "tarefas";

$conexao = new mysqli($host, $usuario, $senha, $banco);

$sql = "CREATE TABLE IF NOT EXISTS tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao TEXT NOT NULL,
    data_vencimento DATE NOT NULL,
    concluida TINYINT(1) DEFAULT 0
)";

$conexao -> query($sql);
?>

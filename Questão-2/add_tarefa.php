<?php
include 'database.php';

if (isset($_POST["descricao"], $_POST["vencimento"])) {
    $descricao = $_POST["descricao"];
    $data_vencimento = $_POST["data_vencimento"];

    $sql = "INSERT INTO tarefas (descricao, vencimento) VALUES (?, ?)";

    $stmt = $conexao -> prepare($sql);
    $stmt -> bind_param("ss", $descricao, $data_vencimento);

    if ($stmt -> execute()) {
        header("Location: index.php");
        exit;
    } 
}
?>

<?php
require_once "database.php";

if(isset($_POST["add_book"])) {

    $titulo = $_POST["titulo"] ?? '';
    $autor = $_POST["autor"] ?? '';
    $ID = isset($_POST["ID"]) ? (int)$_POST["ID"] : null;
    $data_publicacao = $_POST["data_publicacao"] ?? null;

    $stmt = $conexao->prepare("INSERT INTO livros (ID, titulo, autor, data_publicacao) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        header("Location: index.php");
        exit;
    }
    $stmt->bind_param("isss", $ID, $titulo, $autor, $data_publicacao);

    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit;
}
?>

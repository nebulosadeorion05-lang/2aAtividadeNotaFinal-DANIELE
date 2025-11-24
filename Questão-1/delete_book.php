<?php
require_once "database.php";

if(isset($_POST["delete_book"])) {

    $ID = isset($_POST["ID"]) ? (int)$_POST["ID"] : null;

    $stmt = $conexao->prepare("DELETE FROM livros WHERE ID = ?");
    if ($stmt === false) {
        header("Location: index.php");
        exit;
    }
    $stmt->bind_param("i", $ID);

    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
    exit;
}
?>

<?php
include 'database.php';

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $sql = "UPDATE tarefas SET concluida = 1 WHERE id = ?";
    $stmt = $conexao -> prepare($sql);
    $stmt -> bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } 
}
?>

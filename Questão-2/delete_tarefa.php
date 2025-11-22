<?php
include 'database.php';

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM tarefas WHERE id = ?";
    $stmt = $conexao -> prepare($sql);
    $stmt -> bind_param("i", $id);

    if ($stmt -> execute()) {
        header("Location: index.php");
        exit;
    } 
}
?>

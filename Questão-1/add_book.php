<?php
require_once "database.php";

if(isset($_POST["add_book"])) {

    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $ID = $_POST["ID"];
    $data_publicacao = $_POST["data_publicacao"];

    $stmt = $conexao -> prepare("INSERT INTO livros (ID, titulo, autor, data_publicacao) VALUES (?, ?, ?, ?)");
    $stmt -> bind_param("isss", $ID, $titulo, $autor, $data_publicacao);

    if($stmt -> execute()) {
        echo "<p> Cadastro feito com sucesso! </p>"
    } else {
        echo "<p> Erro ao efeturar cadastro. Tente novamente! </p>"
    }
    header("Location: index.php");
    exit;
}
?>

<?php
require_once "database.php";

if(isset($_POST["delete_book"])) {

    $ID = $_POST["ID"];

    $stmt = $conexao -> prepare("DELETE FROM livros WHERE ID =  ?");
    $stmt -> bind_param("i", $ID);

    if($stmt -> execute()) {
        echo "<p> Exclusão feita com sucesso! </p>"
    } else {
        echo "<p> Erro ao efeturar exclusão do livro. Tente novamente! </p>"
    }
    header("location: index.php");
    exit;
}
?>

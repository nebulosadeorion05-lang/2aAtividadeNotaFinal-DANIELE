<DOCTYPE! html>
<html lang = "pt-BR">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width = device-width, inicial-scale = 1.0">
  <title> Banco de Dados Livraria </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
      margin: 0,5 rem;
      padding: 0,5 rem;
    }
    h1, h2 {
      color: #4B0082; 
    }
    h1 {
      text-align: center;
    }
    .form-container {
      width: 80%;
      margin: auto;
    }
    .form label {
      font-weight:bold;
    }
    button {
      background-color: #4B0082;
      border: none;
      padding: 8px 12px;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1> Cadastro de Livros </h1>
  <div class = "form-container">
  <form method = "post" action = "add_book.php">
    <label for = "id"> ID: </label><br>
    <input type = "number" id = "id" name = "id" required><br><br>
    <label for = "title"> Título: </label><br>
    <input type = "text" id = "title" name = "título"><br><br>
    <label for = "author"> Autor: </label><br>
    <input type = "text" id = "author" name = "autor"><br><br>
    <label for = "year"> Ano de Publicação: </label><br>
    <input type = "number" id = "year" name = "ano"><br><br>
    <button type = "submit" name = "add_book"> Cadastrar </button>
    <button type = "reset"> Limpar </button>
  </form>
  </div>
  <h2> Pesquisar Livro </h2>
  <?php
  require_once 'database.php';

  if($resultado -> num_rows > 0) {
    echo "<ul>";
    while($livro = $resultado -> fetch_assoc()) {
      echo "<li> ID: {$livro ['ID']} : {$livro ['titulo']}, escrito por {$livro ['autor']}, publicado em {$livro ['data_publicacao']} <li>"
    }
    echo "<ul>";
  } else {
    echo "<p> Nenhum livro encontrado </p>";
  }
  ?>
  <h2> Excluir Livro </h2>
  <div class = "form-container">
  <form method = "post" action = "delete_book.php">
    <label for = "id"> ID: </label><br>
    <input type = "number" id = "id" name = "id" required><br><br>
    <label for = "title"> Título: </label><br>
    <input type = "text" id = "title" name = "título"><br><br>
    <label for = "author"> Autor: </label><br>
    <input type = "text" id = "author" name = "autor"><br><br>
    <label for = "year"> Ano de Publicação: </label><br>
    <input type = "number" id = "year" name = "ano"><br><br>
    <button type = "submit" name = "delete_book.php"> Excluir </button>
    <button type = "reset"> Limpar </button>
  </form>
  </div>
</body>
</html>

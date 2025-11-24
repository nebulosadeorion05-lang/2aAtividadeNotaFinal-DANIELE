<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banco de Dados Livraria</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
      margin: 0.5rem;
      padding: 0.5rem;
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
      font-weight: bold;
    }
    button {
      background-color: #4B0082;
      border: none;
      padding: 8px 12px;
      color: white;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <h1>Cadastro de Livros</h1>
  <div class="form-container">
  <form method="post" action="add_book.php">
    <label for="ID">ID:</label><br>
    <input type="number" id="ID" name="ID" required><br><br>
    <label for="titulo">Título:</label><br>
    <input type="text" id="titulo" name="titulo"><br><br>
    <label for="autor">Autor:</label><br>
    <input type="text" id="autor" name="autor"><br><br>
    <label for="data_publicacao">Ano de Publicação:</label><br>
    <!-- input type date para compatibilizar com coluna DATE no banco -->
    <input type="date" id="data_publicacao" name="data_publicacao"><br><br>
    <button type="submit" name="add_book">Cadastrar</button>
    <button type="reset">Limpar</button>
  </form>
  </div>
  <h2>Pesquisar Livro</h2>
  <?php
  require_once 'database.php';

  if($resultado && $resultado->num_rows > 0) {
    echo "<ul>";
    while($livro = $resultado->fetch_assoc()) {
      echo "<li>ID: {$livro['ID']} : {$livro['titulo']}, escrito por {$livro['autor']}, publicado em {$livro['data_publicacao']}</li>";
    }
    echo "</ul>";
  } else {
    echo "<p>Nenhum livro encontrado</p>";
  }
  ?>
  <h2>Excluir Livro</h2>
  <div class="form-container">
  <form method="post" action="delete_book.php">
    <label for="ID">ID:</label><br>
    <input type="number" id="ID" name="ID" required><br><br>
    <label for="titulo">Título:</label><br>
    <input type="text" id="titulo" name="titulo"><br><br>
    <label for="autor">Autor:</label><br>
    <input type="text" id="autor" name="autor"><br><br>
    <label for="data_publicacao">Ano de Publicação:</label><br>
    <input type="date" id="data_publicacao" name="data_publicacao"><br><br>
    <button type="submit" name="delete_book">Excluir</button>
    <button type="reset">Limpar</button>
  </form>
  </div>
</body>
</html>

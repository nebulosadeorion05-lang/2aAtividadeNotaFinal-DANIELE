<?php
include 'database.php';

$sql = "SELECT * FROM tarefas ORDER BY vencimento";
$resultado = $conexao -> query($sql);
?>

<DOCTYPE! html>
<html lang = "pt-BR">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width = device-width, inicial-scale = 1.0">
  <title> Gerenciador de Tarefas </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: white;
      margin: 0,5 rem;
      padding: 0,5 rem;
    }
    h1 {
      text-align: center;
      color: #4B0082; 
    }
    . {
      width: 80%;
      margin: 20px;
      background: white;
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
  <h1> Gerenciador de Tarefas </h1>
    
  <form method = "post" action = "add_tarefa.php">
    <label for = "descricao"> Descrição: </label><br>
    <input type = "text" id = "descricao" name = "descricao" required><br><br>
    <label for = "data_vencimento"> Data de Vencimento: </label>
    <input type = "date" id = "data_vencimento" name = "data_vencimento"><br><br>
    <button type = "submit"> Adicionar </button>
    <button type = "reset"> Limpar </button>

  <h2> Tarefas Pendentes </h2>
  <?php
  $pendentes  = $conexao -> query("SELECT * FROM tarefas WHERE concluida = 0 ORDER BY data_vencimento");

  if($pendentes -> num_rows > 0) {
    echo "<ul>";
    while($t = $pendentes -> fetch_assoc()) {
      echo "<li>
        {$t['$decricao']} - Vence em: {$t['data_vencimento']}
        <form method = "POST" action = "update_tarefa.php">
          <label for = "pendentes"> Tarefa Pendente: </label><br>
          <input type = "hidden" name = "id" value = '{$t['id']}'><br><br>
          <button type = "submit"> Marcar Como Concluída </button>
          <button type = "reset"> Limpar </button>
        </form>
        <form method = "POST" action = "delete_tarefa.php">
          <label for = "pendentes"> Tarefa Pendente: </label><br>
          <input type = "hidden" name = "id" value = '{$t['id']}'><br><br>
          <button type = "submit"> Excluir </button>
          <button type = "reset"> Limpar </button>
        </form>
      <li>"
    }
    echo "</ul>";
  } else {
    echo "<p> Não há tarefas pendentes! </p>";
  }
  ?>
  <h2> Tarefas Concluídas </h2>
  
</body>
</html>

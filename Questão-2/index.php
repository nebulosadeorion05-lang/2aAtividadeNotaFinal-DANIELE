<DOCTYPE! html>
<html lang = "pt-BR">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width = device-width, inicial-scale = 1.0">
  <title> Gerenciador de Tarefas </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: ;
      margin: 0,5 rem;
      padding: 0,5 rem;
    }
    h1 {
      text-align: center;
      color: #8A2BE2; 
    }
    .tarefa {
      width: 80%;
      margin: 20px;
      background: white;
    }
    th, td {
      padding: 12px;
      text-align: center;
    }
    th {
      background-color: #EE82EE;
    }
    button {
      background-color: #EE82EE;
      border: none;
      padding: 8px 12px;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>  </h1>
    
  <form method = "post">
    <label for = "título">  </label>
    <input type = "text" id = "título" name = "título" required><br><br>
    <label for = "autor">  </label>
    <input type = "text" id = "autor" name = "autor"><br><br>
    <label for = "">  </label>
    <input type = "number" id = "ano" name = "ano"><br><br>
    <button type = "submit" name = "pesquisar"> Pesquisar </button>
    <button type = "submit" name = "limpar"> Limpar </button>
</body>
</html>

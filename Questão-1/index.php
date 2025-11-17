<DOCTYPE! html>
<html lang = "pt-BR">
<head>
  <meta charset = "UTF-8">
  <meta name = "viewport" content = "width = device-width, inicial-scale = 1.0">
  <title> index.php </title>
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
    table {
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
  <h1> Banco de Dados Livraria </h1>
    <table border = "1" cellpadding = "8">
      <tr>
        <th> ID </th>
        <th> Título </th>
        <th> Autor </th>
        <th> Ano de Publicação </th>
      </tr>
      <tr>
        <td> 01 </td>
        <td> Dom Quixote </td>
        <td> Miguel de Cervantes </td>
        <td> 1605 </td>
      </tr>
      <tr> 
        <td> 02 </td>
        <td> O Pequeno Príncipe </td>
        <td> Antoine de Saint-Exupéry </td>
        <td> 1943 </td>
      </tr>
      <tr>
        <td> 03 </td>
        <td> Moby Dick </td>
        <td> Herman Melville </td>
        <td> 1851 </td>
      </tr>
      <tr>
        <td> 04 </td>
        <td> Orgulho e Preconceito </td>
        <td> Jane Austen </td>
        <td> 1813 </td>
      </tr>
      <tr>
        <td> 05 </td>
        <td> Frankestein </td>
        <td> Mary Shelley </td>
        <td> 1818 </td>
      </tr>
      <tr>
        <td> 06 </td>
        <td> Os Miseráveis </td>
        <td> Victor Hugo </td>
        <td> 1862 </td>
      </tr>
      <tr>
        <td> 07 </td>
        <td> Madame Bovary </td>
        <td> Gustave Flaubert </td>
        <td> 1857 </td>
      </tr>
      <tr>
        <td> 08 </td>
        <td> 1984 </td>
        <td> George Orwell </td>
        <td> 1949 </td>
      </tr>
      <tr>
        <td> 09 </td>
        <td> A Metamorfose </td>
        <td> Franz Kafka </td>
        <td> 1915 </td>
      </tr>
      <tr>
        <td> 10 </td>
        <td> O Alquimista </td>
        <td> Paulo Coelho </td>
        <td> 1988 </td>
      </tr>
    </table>
  <form method = "post">
    <label for = "título"> Título: </label>
    <input type = "text" id = "título" name = "título" required><br><br>
    <label for = "autor"> Autor: </label>
    <input type = "text" id = "autor" name = "autor"><br><br>
    <label for = "ano"> Ano de Publicação: </label>
    <input type = "number" id = "ano" name = "ano"><br><br>
    <button type = "submit" name = "pesquisar"> Pesquisar </button>
    <button type = "submit" name = "limpar"> Limpar </button>
</body>
</html>


<?php
include_once('bd/config.php');

$sql = "SELECT * FROM pelicula ORDER BY id DESC";
$result = mysqli_query($conexao, $sql);

if (!$result) {
  die("Erro na consulta: " . mysqli_error($conexao));
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: "Source Sans Pro", sans-serif;
    }
    .banner .navigation a {
      font-weight: bold;
      font-size: 20px;
      text-shadow: none;
    }
    .container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 20px;
    }
    .banner {
      background-color: #ffffff;
      padding: 20px;
    }
    .op-logo img {
      width: 10rem;
    }
    .navigation {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      margin-top: 10px;
    }
    .navigation ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .navigation li {
      display: inline-block;
      margin-right: 10px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    .search-dropdown {
      margin-top: 20px;
    }
    .search-dropdown select {
      padding: 8px;
      font-size: 16px;
    }
    .buttons {
      margin-top: 20px;
    }

    a:hover {
    background-color: #ea00ff;
  }
    
    .buttons a:hover {
      background-color: #ea00ff;
    }
  </style>
</head>
<body>
  <div class="container main-content">
    <div class="banner include-nav">
      <div class="fixed-width cf">
        <div class="eight columns">
          <div class="op-logo">
            <a href="140,00.png" title="Película Compatível" rel="home">
              <img src="140,00.png" alt="Película Compatível">
            </a>
          </div>
        </div>
        <div class="sixteen columns">
          <nav class="navigation fly-to-left">
            <ul id="navigation-alongside">
              <!--<li id="menu-item-179" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-179">
                <a href="https://www.peliculacompativel.com.br/compatibilidade-e-adaptacao-de-peliculas-da-xiaomi/">Xiaomi</a>
              </li>
              <li id="menu-item-197" class="menu-item">
                <a href="">Apple</a>
              </li>
              <li id="menu-item-205" class="menu-item">
                <a href="" aria-current="page">Samsung</a>
              </li>
              <li id="menu-item-234" class="menu-item">
                <a href="">Motorola</a>
              </li>
              <li id="menu-item-215" class="menu-item">
                <a href="">LG</a>
              </li>
              <li id="menu-item-220" class="menu-item">
                <a href="">Asus</a>
              </li>
              <li id="menu-item-233" class="menu-item">
                <a href="">Lenovo</a>
              </li>
              <li id="menu-item-214" class="menu-item">
                <a href="">Huawei</a>
              </li>
              <li id="menu-item-248" class="menu-item">
                <a href="">Como Aplicar uma Película</a>
              </li>
              <li id="menu-item-263" class="menu-item">
                <a href="">Atacado de Películas</a>
              </li>-->
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <div class="search-dropdown">
      <select id="marcaDropdown" onchange="filtrarPorMarca()">
        <option value="">Selecionar</option>
        <option value="xiaomi">Xiaomi</option>
        <option value="apple">Apple</option>
        <option value="samsung">Samsung</option>
        <option value="motorola">Motorola</option>
        <option value="lg">LG</option>
        <option value="asus">Asus</option>
        <option value="lenovo">Lenovo</option>
        <option value="huawei">Huawei</option>
      </select>
    </div>

    <table>
      <thead>
        <tr>
          <th scope="col">Marca</th>
          <th scope="col">Modelo</th>
          <th scope="col">Compatibilidade</th>
        </tr>
      </thead>
      <tbody>
      <?php
        // Verifica se foi selecionada uma marca específica
        if (isset($_GET['marca'])) {
          $marca = $_GET['marca'];

          // Modifique a consulta SQL para filtrar pela marca selecionada
          $sql = "SELECT * FROM pelicula WHERE marca = '$marca' ORDER BY id DESC";
        } else {
          // Consulta SQL para exibir todos os registros
          $sql = "SELECT * FROM pelicula ORDER BY id DESC";
        }

        $result = $conexao->query($sql);

        while ($user_data = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . $user_data['marca'] . "</td>";
          echo "<td>" . $user_data['modelo'] . "</td>";
          echo "<td>" . $user_data['compatibilidade'] . "</td>";
          echo "</tr>";
        }
        ?>
        
      </tbody>
    </table>

    <div class="buttons">
      <a href='cadastro.php' onclick="cadastroProduto()" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px; border: none; cursor: pointer;">Cadastrar Produto</a>
    </div>

    <!--<script>
      function cadastroProduto() {
        // Lógica para cadastrar um produto
        alert("Cadastro de produto realizado com sucesso!");
      }

      function atualizarEstoque() {
        // Lógica para atualizar o estoque
        alert("Estoque atualizado com sucesso!");
      }
    </script>-->

    <script>
      function filtrarPorMarca() {
        var marcaSelecionada = document.getElementById("marcaDropdown").value;
        window.location.href = "index.php?marca=" + marcaSelecionada;
      }
    </script>

  

    
  </div>
</body>
</html>

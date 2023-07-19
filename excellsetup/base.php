<!DOCTYPE html>
<html>
<head>
  <title>Excellsetup</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #096800;
      padding: 10px;
      text-align: center;
    }
    
    .logo {
      width: 100px;
    }
    
    nav {
      background-color: #141414;
      padding: 10px 0;
      text-align: center;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    
    nav ul li {
      display: inline-block;
    }
    
    nav ul li a {
      color: #fff;
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    
    nav ul li a:hover {
      background-color: #1f1f1f;
    }

    .active{
        color: rgb(25, 151, 0);
    }
    
    section {
      padding: 20px;
      text-align: center;
      color: #fff;
    }
    
    .jumbotron {
      background-image: url('img/ellie.jpg');
      background-size: cover;
      background-position: center;
      padding: 100px 0;
    }
    
    .jumbotron h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }
    
    .jumbotron p {
      font-size: 24px;
      margin-bottom: 40px;
    }
    
    .cta-button {
      background-color: #003791;
      color: #fff;
      padding: 10px 20px;
      font-size: 18px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    
    .cta-button:hover {
      background-color: #002366;
    }
    
    .dashboard-section {
      background-color: #0f0f0f;
    }
    
    .dashboard-section h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    
    .dashboard {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }
    
    .dashboard-item {
      width: 300px;
      height: 200px;
      background-color: #141414;
      margin: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: transform 0.3s;
    }
    
    .dashboard-item:hover {
      transform: scale(1.05);
    }
    
    .dashboard-item img {
      max-width: 100%;
      max-height: 100%;
    }
    
    footer {
      background-color: #0f0f0f;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
  <script>
    window.addEventListener("DOMContentLoaded", function() {
      var dashboardItems = document.querySelectorAll(".dashboard-item");
      
      dashboardItems.forEach(function(item) {
        item.addEventListener("click", function() {
          var gameTitle = this.getAttribute("data-title");
          alert("Você clicou no jogo: " + gameTitle);
        });
      });
    });
  </script>
</head>
<body>
  <header>
    <img class="logo" src="img/excelllogo.png" alt="PlayStation Logo">
  </header>
  
  <nav>
    <ul>
      <li><a href="base.php" class="active">Início</a></li>
      <li><a href="#">Comunidade</a></li>
      <li><a href="acessórios.php">Acessórios</a></li>
      <li><a href="financeiro.php">Financeiro</a></li>
      <li><a href="kangu.php">Kangu</a></li>
      <li><a href="#">Suporte</a></li>
    </ul>
  </nav>
  
  <section>
    <div class="jumbotron">
      <h1>Bem-vindo a EXCELL</h1>
      <p>Explore uma nova dimensão.</p>
      <a class="cta-button" href="#">Saiba Mais</a>
    </div>
  </section>
  
  <section class="dashboard-section">
    <h2>Destaques</h2>
    <div class="dashboard">
      <div class="dashboard-item" data-title="destaque1">
        <img src="caminho/para/imagem1.jpg" alt="desdaque">
      </div>
    <div class="dashboard">
      <div class="dashboard-item" data-title="destaque1">
        <img src="caminho/para/imagem1.jpg" alt="desdaque">
      </div>
    <div class="dashboard">
      <div class="dashboard-item" data-title="destaque1">
        <img src="caminho/para/imagem1.jpg" alt="desdaque">
      </div>
      
  </section>
  
  <footer>
    <p>&copy; 2023 PlayStation. Todos os direitos reservados.</p>
  </footer>
</body>
</html>

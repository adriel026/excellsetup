<!DOCTYPE html>
<html>
<head>
  <title>Excellsetup</title>
  <style>
    body {
      font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            /* Definindo o gradiente sobrepondo a imagem de background */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/ellie.jpg');
            /* Ajustando a posição e repetição da imagem de background */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            /* Define uma altura mínima para a imagem ocupar a tela inteira */
            min-height: 100vh;
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
      border-radius: 5px;
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
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
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

    .section1 {
            padding: 10px;
            margin:1px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    
    .game-window-larguer {
            width: 350px;
            height: 350px;
            background-color: #FF6B15;
            border: 2px solid #fff;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .game-window-larguer img {
            max-width: 350px;
            max-height: 350px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .game-window {
            width: 150px;
            height: 150px;
            background-color: #161616;
            border: 2px solid #fff;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-self: flex-end;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .game-window img {
            max-width: 150px;
            max-height: 150px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .game-window-larguer:hover {
         transform: scale(1.05);
    }

    .game-window:hover {
         transform: scale(1.30);
    }
    
    footer {
      background-color: #0f0f0f;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
  <!--<script>
    window.addEventListener("DOMContentLoaded", function() {
      var dashboardItems = document.querySelectorAll(".dashboard-item");
      
      dashboardItems.forEach(function(item) {
        item.addEventListener("click", function() {
          var gameTitle = this.getAttribute("data-title");
          alert("Você clicou no jogo: " + gameTitle);
        });
      });
    });
  </script>-->
</head>
<body>
  <header>
    <img class="logo" src="img/excelllogo.png" alt="PlayStation Logo">
  </header>
  
  <nav>
    <ul>
      <li><a href="base.php" class="active">Início</a></li>
      <li><a href="acessórios.php">Acessórios</a></li>
      <li><a href="financeiro.php">Financeiro</a></li>
      <li><a href="kangu.php">Kangu</a></li>
      <li><a href="index.php">Sair</a></li>
    </ul>
  </nav>
  
  <section>
    <div class="jumbotron">
      <h1>Bem-vindo a EXCELL</h1>
      <p>Explore uma nova dimensão.</p>
      <a class="cta-button" href="#">Comunidade</a>
    </div>
  </section>
  
  <section class="section1"> 
  <a href="kangu.php"> <div class="game-window-larguer">
            <a href="kangu.php"> <img src="img/kgn.jpg" alt="Nome do Jogo 1"></a>
        </div> </a>

        <div class="game-window">
            <img src="img/5.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/2.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/5.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/7.jpg" alt="Nome do Jogo 2">
        </div>
        </section>
  
  <footer>
    <p>&copy; 2023 PlayStation. Todos os direitos reservados.</p>
  </footer>
</body>
</html>

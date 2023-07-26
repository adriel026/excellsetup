<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Inspirado no PS4</title>
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
    background-color: #820000;
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

        .section1 {
            padding: 10px;
            margin:1px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .section2 {
            padding: 10px;
            margin:1px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .game-window-larguer {
            width: 350px;
            height: 350px;
            background-color: #161616;
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


        .game-window-larguer-2 {
            width: 350px;
            height: 150px;
            background-color: #161616;
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

        .game-window-larguer-2 img {
            max-width: 350px;
            max-height: 150px;
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
        .game-window-2 {
            width: 300px;
            height: 150px;
            background-color: #161616;
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

        .game-window-2 img {
            max-width: 300px;
            max-height: 150px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .game-window-larguer:hover {
         transform: scale(1.05);
    }
        .game-window-larguer-2:hover {
         transform: scale(1.05);
    }
        .game-window:hover {
         transform: scale(1.30);
    }
        .game-window-2:hover {
         transform: scale(1.30);
    }
    </style>
</head>

<body>
    <header>
        <img class="logo" src="img/excelllogo.png" alt="Logo">
      </header>
      
      <nav>
        <ul>
          <li><a href="academy.php">Início</a></li>
          <li><a href="cursos.php" class="active">Courses</a></li>
          <li><a href="materiais.php">Materiais</a></li>
          <li><a href="#">Search</a></li>
        </ul>
      </nav>

    
        <section class="section1">
        <div class="game-window-larguer">
            <img src="img/1.jpg" alt="Nome do Jogo 1">
        </div>

        <div class="game-window">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        </section>

        <!-- Adicione mais janelas de jogos aqui -->
        <section class="section2">
        <div class="game-window-larguer-2">
           
            <h3>Meus Livros</h3>
        </div>

        <div class="game-window-2">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window-2">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
        <div class="game-window-2">
            <img src="img/3.jpg" alt="Nome do Jogo 2">
        </div>
       
        </section>

        <!-- Adicione mais janelas de jogos aqui -->

   

   

    <footer>
        &copy; 2023 PlayStation. Todos os direitos reservados.
    </footer>
</body>

</html>

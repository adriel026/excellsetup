<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução à Computação</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #000; /* Cor de fundo preta */
    color: #fff; /* Texto branco */
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



    .header-container h1 {
    font-size: 32px;
    margin: 0;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 40px;
}

section {
      padding: 20px;
      text-align: left;
      color: #fff;
    }
    
    .jumbotron {
  position: relative; /* Certifique-se de que a posição seja relativa */
  background-image: url('img/comput.jpg');
  background-size: cover;
  background-position: center;
  padding: 100px 0;
  height: 200px;
}



.computer {
    position: relative; /* Certifique-se de que a posição seja relativa */
  background-size: cover;
  background-position: center;
  padding: 50px 0;

}
    
    .h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }
    
    .p {
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

ul {
    list-style-type: none;
    padding-left: 0;
}
.topic {
    background-color: #1a1a1a; /* Fundo cinza escuro */
    border-radius: 8px;
    padding: 20px;
    margin-bottom:20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.topic h3 {
    font-size: 20px;
    color: #fff; /* Título branco */
    margin-bottom: 10px;
}

.topic p {
    color: #ccc; /* Texto cinza claro */
}

.button {
    background-color: #3c8aef;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin-top: 10px;
}

.button:hover {
    background-color: #2f6fcf;
}

footer {
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 10px;
}

.expand-button{
    background-color: #3c8aef;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin-top: 10px;
}

.expand-button:hover{
    background-color: #2f6fcf;
}





    </style>
</head>

<body>
<header>
    <img class="logo" src="excelllogo.png" alt="PlayStation Logo">
  </header>
  
  <nav>
    <ul>
      <li><a href="academy.php">Início</a></li>
      <li><a href="cursos.php" class="active">Courses</a></li>
      <li><a href="#">Materiais</a></li>
      <li><a href="#">Search</a></li>
    </ul>
  </nav>

    <main>
    <section>
    <div class="jumbotron">
    </div>
  </section>

  <div class="computer">
  <h1 class="h1">O que é Computação?</h1>
      <p class="p">A computação é a ciência que lida com o estudo e desenvolvimento de algoritmos e programas de computador para processar, armazenar e transmitir informações. Ela abrange diversas áreas, como programação, algoritmos, estruturas de dados e sistemas operacionais.</p>
  </div>
       

        <section>
        <h2>Principais Tópicos</h2>
        <ul>
            <li>
            <div class="topic">
                        <h3>História da Computação</h3>
                        <p class="p expandable-paragraph" data-full-text="Material PDF: História da Computação - Raul-Sidnei-Wazlawick.">Material PDF: História da Computação - Raul-Sidnei-Wazlawick.</p>
                        <p class="p expanded-paragraph" data-full-text="A computação é a ciência que lida com o estudo e desenvolvimento de algoritmos e programas de computador para processar, armazenar e transmitir informações. Ela abrange diversas áreas, como programação, algoritmos, estruturas de dados e sistemas operacionais. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin hendrerit augue nec elit scelerisque, quis blandit metus consectetur. Sed ac sagittis quam. Nulla vel felis turpis." data-preview-text="A computação é a ciência que lida com o estudo e desenvolvimento de algoritmos e programas de computador...">A computação é a ciência que lida com o estudo e desenvolvimento de algoritmos e programas de computador para processar, armazenar e transmitir informações...</p>
                        <a href="computacao.pdf" target="_blank" class="expand-button">Leia Mais</a>
                    </div>
            </li>
                <li>
                    <div class="topic">
                        <h3>Introdução à Linguagem de Programação</h3>
                        <p>Aprenda os conceitos básicos de linguagens de programação e escreva seus primeiros programas.</p>
                        <a href="#" class="button">Ver Mais</a>
                    </div>
                </li>
                <li>
                    <div class="topic">
                        <h3>Introdução à Linguagem de Programação</h3>
                        <p>Aprenda os conceitos básicos de linguagens de programação e escreva seus primeiros programas.</p>
                        <a href="#" class="button">Ver Mais</a>
                    </div>
                </li>
                <li>
                    <div class="topic">
                        <h3>Estruturas de Dados</h3>
                        <p>Explore as diferentes estruturas de dados usadas para armazenar e organizar informações em computadores.</p>
                        <a href="#" class="button">Ver Mais</a>
                    </div>
                </li>
                <!-- Adicione outros tópicos com botões aqui -->
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Introdução à Computação. Todos os direitos reservados.</p>
    </footer>
    
</body>

</html>

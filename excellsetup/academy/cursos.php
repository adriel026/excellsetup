<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos de Programação</title>
    <link rel="stylesheet" href="style.css">
    <style>
     body {
    font-family: Arial, sans-serif;
    background-color: #1c1c1c; /* Cor escura semelhante ao PS4 */
    margin: 0;
    padding: 0;
    color: #fff;
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

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #282828; /* Cor escura semelhante ao PS4 */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #00a0de; /* Cor azul semelhante ao PS4 */
}

p {
    text-align: justify;
    margin-bottom: 20px;
}

.courses {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.course {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
    border-radius: 5px;
}

.course img {
    width: 100px;
    margin-bottom: 10px;
}

.course h2 {
    margin: 0;
    color: #107c10;
}

.course p {
    color: #666;
    margin-bottom: 10px;
}

.course a {
    display: inline-block;
    padding: 8px 20px;
    background-color: #107c10;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.course a:hover {
    background-color: #0a6b0a;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #333; /* Cor escura semelhante ao PS4 */
    color: #fff;
}

thead th {
    padding: 12px;
    text-align: left;
}

tbody tr:nth-child(even) {
    background-color: #444; /* Cor escura semelhante ao PS4 */
}

tbody td {
    padding: 12px;
    color: #fff;
}

tbody td:last-child {
    text-align: right;
}

tbody td[data-type="saida"] {
    color: #ff4444;
}

/* Estilo do menu suspenso */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>

/* Media query para

    </style>
</head>

<body>
<header>
    <img class="logo" src="img/excelllogo.png" alt="PlayStation Logo">
  </header>
  
  <nav>
    <ul>
      <li><a href="academy.php">Início</a></li>
      <li><a href="cursos.php"  class="active">Courses</a></li>
      <li><a href="#">Materiais</a></li>
      <li><a href="#">Search</a></li>
    </ul>
  </nav>

  
</section>
    </nav>

    <div class="container">
        <h1>Escola de Computação</h1>
        <p>
            Bem-vindo à página de estudos EXCELL!
        </p>

        <div class="courses">
            <div class="course">
                <img src="img/html-couser.jpg" alt="HTML Icon">
                <h2>Introdução a computação</h2>
                <p>Aprenda os conceitos básicos da computação, origens e tecnologias.</p>
                <a href="computacao.php">Abrir aula</a>
            </div>

            <div class="course">
                <img src="img/css-couser.jpg" alt="CSS Icon">
                <h2>Programação e desenvolvimento</h2>
                <p>Domine linguagens de programação e desenvolva sistemas e jogos de alta performace.</p>
                <a href="#">Abrir aula</a>
            </div>

            <div class="course">
                <img src="img/js-couser.png" alt="JavaScript Icon">
                <h2>Informática aplicada a emprsas</h2>
                <p>Desenvolva habilidades em offices e crie um difrencial no mercado tecnológico!</p>
                <a href="#">Abrir aula</a>
            </div>
           
        </div>
    </div>
</body>

</html>

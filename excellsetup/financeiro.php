<div style="display:none;">
  <?php
    include_once('bd/config.php');
    $sql = "SELECT * FROM caixa ORDER BY id DESC";
    $result = $conexao->query($sql);
    print_r($result);
  ?>
</div>
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
  <meta charset="utf-8">
  <title>Controle Financeiro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Adicione aqui as suas folhas de estilo -->
  <link rel="stylesheet" href="">
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

  /* Estilo do saldo */
  .balance {
    background-color:  #23232e;
    color: #ffff;
    padding-top: 2rem;
    text-align: center;
    border-radius: 2px;
  }

  .balance h1 {
    margin-top: 0;
    font-size: 2rem;
  }

  .balance-value {
    font-size: 3rem;
    font-weight: bold;
  }

  /* Estilo da tabela de lançamentos */
  .entries {
    margin-top: 0,05rem;
    padding-top: -10rem;
    background-color: #ffff;
    color: #ffff;
  }

  .entries h2 {
    margin-top: 0;
    font-size: 1.5rem;
  }

  .entries table {
    width: 100%;
    border-collapse: collapse;
  }

  .entries th {
    border-bottom: 2px solid #ccc;
  }

  

  .entries a {
    display: inline-block;
    margin-top: 1rem;
    color: #fff;
    padding: 0.5rem 1rem;
    text-decoration: none;
    border-radius: 0.3rem;
    transition: background-color 0.3s;
    }

  .entries a:hover {
    background-color: #0077b5;
    }


  .table-bg{
    background: rgb(0,0,0,0.5);
    border-radius: 15px 15px 0 0;
    }

  


  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </head>

  <body>

  <header>

  
    <!-- Navbar
    <div class="navbar" id="myNavbar">
    <a href="index.php"><img class="logo" <a href="index.php" src="img/logo2.png" alt=""></a>
    <div class="mobile-menu">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
    </div>-->


    <nav>
    <ul>
      <li><a href="base.html" class="active">Início</a></li>
      <li><a href="#">Comunidade</a></li>
      <li><a href="acessórios.html">Acessórios</a></li>
      <li><a href="#">Financeiro</a></li>
      <li><a href="#">Kangu</a></li>
      <li><a href="#">Suporte</a></li>
    </ul>
  </nav>
   

  <main>
    <section class="balance">
      <h1>VENDAS</h1>
      <p class="balance-value" id="balance-value">R$ 0,00</p>
    </section>

    <div>
    <nav class="navbar-search">
		<input type="text" class="search-bar" id="search-input" placeholder="Pesquisar">
		<button class="search-button" id="search-button">Buscar</button>
    </div>
                
    <section class="entries">
      <div class="m-5">
        <h2>Lançamentos</h2>
        <div class="table-responsive">
  <table class="table text-white table-bg table-sm" id="tabela-lancamentos">
    <thead class="thead-light">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Data</th>
        <th scope="col">nome</th>
        <th scope="col">modelo</th>
        <th scope="col">quantidade</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $total = 0;

      while($user_data = mysqli_fetch_assoc($result))
      {
        
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['data']."</td>";
        echo "<td>".$user_data['nome']."</td>";
        echo "<td>".$user_data['modelo']."</td>";
        echo "<td>".$user_data['quantidade']."</td>";

        if (is_numeric($user_data['quantidade']) && is_numeric($user_data['valor'])) {
          $subtotal = $user_data['quantidade'] * $user_data['valor'];
          echo "<td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>";
          $total += $subtotal;
      } else {
          echo "<td>Valor inválido</td>";
      }
        
        echo "<td>
              <a class='btn btn-dark' href='editnovocaixa.php?id=$user_data[id]'  id='new-entry-btn'>Editar</a>
              <a class='btn btn-dark'  href='delete.php?id=$user_data[id]'  id='new-entry-btn'>Excluir</a>
              </td>";
        echo "</tr>";
        $total += $user_data['valor'];
      }
       // exibir o valor total na seção "Saldo Total" do dashboard
  
        echo "<script>
        document.getElementById('balance-value').innerHTML = 'R$ " . number_format($total, 2, ',', '.') . "';
        </script>";
        ?>

      <?php

      echo "<tr>";
      echo "<td></td>";
      echo "<td></td>";
      echo "<td></td>";
      echo "<td></td>";
      echo "<td><strong>R$ ".number_format($total, 2, ',', '.')."</strong></td>";
      echo "</tr>";
      ?>
    </tbody>
    </table>
    </div>
    
    <a class='btn btn-secondary' href="btnnovocaixa.php" id="new-entry-btn">Novo lançamento</a>
    </div>
    </section>

    <script>
    var total = <?php echo $total; ?>;
    var balanceValue = document.getElementById('balance-value');
    balanceValue.innerHTML = 'R$ ' + total.toFixed(2).replace('.', ',');
    </script>

    <script>
    var totalRevenue = <?php echo $total_revenue; ?>;
    var revenueValue = document.getElementById('revenue-value');
    revenueValue.innerHTML = 'R$ ' + totalRevenue.toFixed(2).replace('.', ',');
    </script>  

    </main>
    <footer>
    <p>&copy; 2023 Controle Financeiro/EXCELL</p>
    </footer>

    <!-- Adicione aqui os seus scripts -->
    <script>
      class MobileNavbar {
          constructor(mobileMenu, navList, navLinks) {
          this.mobileMenu = document.querySelector(mobileMenu);
          this.navList = document.querySelector(navList);
          this.navLinks = document.querySelectorAll(navLinks);
          this.activeClass = "active";

          this.handleClick = this.handleClick.bind(this);
          }

          handleClick() {
          this.navList.classList.toggle(this.activeClass);
          this.mobileMenu.classList.toggle(this.activeClass);
          this.animateLinks();
          }
      
          addClickEvent() {
          this.mobileMenu.addEventListener("click", this.handleClick);
          }
      
          init() {
          if (this.mobileMenu) {
          this.addClickEvent();
          }
          return this;
          }
        }
      
        const mobileNavbar = new MobileNavbar(
        ".mobile-menu",
        ".nav-list",
        ".nav-list li"
        );
      
        mobileNavbar.init();
    </script>
    </body>
    </html>
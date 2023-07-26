<?php
include_once('bd/config.php');
$sql = "SELECT * FROM caixa ORDER BY id DESC";
$result = $conexao->query($sql);
$total = 0;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimento de Caixa</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #1c1c1c;
    color: #fff;
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
      border-radius: 5px;
    }

    .active{
        color: rgb(25, 151, 0);
    }

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #2b2b2b;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #107c10;
}

.new-entry {
    text-align: center;
    margin-bottom: 20px;
}

.button {
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    background-color: #107c10;
    color: #fff;
    cursor: pointer;
    text-decoration: none;
    border-radius: 5px;
}

.button:hover {
    background-color: #0a6b0a;
}

.form {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.form label {
    flex: 1;
    color: #bfbfbf;
}

.form input {
    flex: 2;
    padding: 8px;
    background-color: #3a3a3a;
    border: none;
    color: #fff;
}

.form button {
    flex: 1;
    padding: 8px;
    background-color: #107c10;
    color: #fff;
    border: none;
    cursor: pointer;
}

.form button:hover {
    background-color: #0a6b0a;
}

.dashboards {
    display: flex;
    justify-content: space-between;
    background-color: #107c10;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.dashboard {
    flex: 1;
    text-align: center;
}

.dashboard p {
    margin: 0;
    color: #fff;
}

.dashboard span {
    font-size: 24px;
    color: #fff;
}

/* Estilos para a tabela de registro */
table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background-color: #107c10;
    color: #fff;
}

thead th {
    padding: 12px;
    text-align: left;
}

tbody tr:nth-child(even) {
    background-color: #3a3a3a;
}

tbody td {
    padding: 12px;
}

tbody td:last-child {
    text-align: right;
}

tbody td[data-type="saida"] {
    color: #ff4444;
}
    </style>
</head>

<body>

    <header>
        <img class="logo" src="img/excelllogo.png" alt="PlayStation Logo">
      </header>
      
      <nav>
        <ul>
          <li><a href="base.php" class="active">Início</a></li>
          <li><a href="comunidade.php">Comunidade</a></li>
          <li><a href="acessórios.php">Acessórios</a></li>
          <li><a href="financeiro.php">Financeiro</a></li>
          <li><a href="kangu.php">Kangu</a></li>
          <li><a href="#">Suporte</a></li>
        </ul>
      </nav>
    <div class="container">
        <h1>Movimento de Caixa</h1>

        <div class="new-entry">
            <a class="button" href="lancamentocaixa.php">Novo Lançamento</a>
            <a class="button" href="lancamentocaixa.php">Fechar Caixa</a>
        </div>

        <div class="dashboards">
            <div class="dashboard saldo-anterior">
                <p>Saldo Anterior</p>
                <span id="saldo-anterior">0.00</span>
            </div>
            <!--<div class="dashboard saldo-atual">
                <p>Saldo Atual</p>
                <span id="saldo-atual">R$ <?php echo number_format($total, 2, ',', '.'); ?></span>
            </div>-->
            <div class="dashboard saldo-atual">
              <p>Saldo Atual</p>
            <span id="saldo-atual-value">0.00</span>
            </div>
            <div class="dashboard saida-total">
                <p>Saída</p>
                <span id="saida-total">0.00</span>
            </div>
        </div>

        <table id="entry-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['data'] . "</td>";
                    echo "<td>" . $user_data['descrição'] . "</td>";
                    echo "<td>" . $user_data['tipo'] . "</td>";
                    echo "<td>" . $user_data['quantidade'] . "</td>";
                    echo "<td>" . $user_data['valor'] . "</td>";

                    if (is_numeric($user_data['quantidade']) && is_numeric($user_data['valor'])) {
                        $subtotal = $user_data['quantidade'] * $user_data['valor'];
                        echo "<td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>";
                        $total += $subtotal;
                    } else {
                        echo "<td>Valor inválido</td>";
                    }

                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5"><strong>Total</strong></td>
                    <td><strong>R$ <?php echo number_format($total, 2, ',', '.'); ?></strong></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
     var total = <?php echo $total; ?>;
     var saldoValue = document.getElementById('saldo-atual-value');
     saldoValue.innerHTML = 'R$ ' + total.toFixed(2).replace('.', ',');
     </script>
</body>

</html>

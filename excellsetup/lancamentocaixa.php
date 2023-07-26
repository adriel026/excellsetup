

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

.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #2b2b2b;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    border-radius: 5px;
}

.button{
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    background-color: #107c10;
    color: #fff;
    cursor: pointer;
    border-radius: 5px;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #107c10;
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

.saldo {
    display: flex;
    justify-content: space-between;
    background-color: #2b2b2b;
    padding: 10px;
    margin-top: 20px;
    border-radius: 5px;
}

.saldo p {
    margin: 0;
    font-weight: bold;
    color: #bfbfbf;
}

.saldo span {
    font-size: 18px;
    color: #107c10;
}

/* Estilos adicionais para a tabela de registro */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
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
    <div class="container">
        <h1>Movimento de Caixa</h1>
        <div class="form">
            <label for="entrada">Data:</label>
            <input type="date" id="entrada" >
        </div>
        <div class="form">
            <label for="saida">Descrição:</label>
            <input type="text" id="saida" placeholder="Descrição...">
        </div>
        <div class="form">
            <label for="saida">Tipo:</label>
            <input type="text" id="saida" placeholder="Tipo...">
        </div>
        <div class="form">
            <label for="saida">Quantidade:</label>
            <input type="number" id="saida" placeholder="0.00">
        </div>
        <div class="form">
            <label for="saida">Valor:</label>
            <input type="number" id="saida" placeholder="0.00">
        </div>
        <a class="button"">Adicionar</a>
        <div class="saldo">
            <div class="saldo-anterior">
                <p>Saldo Anterior:</p>
                <span id="saldo-anterior">0.00</span>
            </div>
            <div class="saldo-atual">
                <p>Saldo Atual:</p>
                <span id="saldo-atual">0.00</span>
            </div>
        </div>
    </div>

  

    <script src="script.js"></script>
</body>

</html>

<?php

          if(isset($_POST['submit']))
            {

                include_once('bd/config.php');

                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $compatibilidade = $_POST['compatibilidade'];
                

                $result = mysqli_query($conexao, "INSERT INTO pelicula(marca,modelo,compatibilidade) VALUES('$marca','$modelo','$compatibilidade')");
            }

      ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuário</title>
	<style>
		body {
			background-color: #b3d9ff;
			color: #fff;
			font-family: Arial, sans-serif;
			text-align: center;
			margin: 0;
			padding: 0;
		}

        .login-box {
			position: relative;
			max-width: 400px;
			background-color: #ffffff;
			border: 1px solid #cccccc;
			border-radius: 10px;
			box-shadow: 5px 5px 10px #888888;
			padding: 20px;
			margin-top: 30px;
		}

		.logo {
			position: absolute;
			top: -150px;
			left: 50%;
			transform: translateX(-50%);
			height: 150px;
			width: auto;
		}

		h1 {
			margin-top: 30px;
		}

		form {
			background-color: #fff;
			color: #5F4B8B;
			border-radius: 5px;
			padding: 20px;
			width: 400px;
			margin: 50px auto 0;
			text-align: left;
		}

		label {
			display: block;
			margin-bottom: 10px;
            color: #888888;
		}

		input[type="text"],
		input[type="password"] {
			padding: 02px;
			font-family: 'Courier New', Courier, monospace;
			font-size: 18px;
			border: 1px solid #cccccc;
			border-radius: 5px;
			background-color: #ffffff;
			color: #333333;
			width: 100%;
			margin-bottom: 20px;
		}

		input[type="submit"] {
			padding: 10px;
            width: 100%;
			font-family: 'Courier New', Courier, monospace;
			font-size: 18px;
			border: none;
			border-radius: 5px;
			background-color: #cccccc;
			color: #ffffff;
			cursor: pointer;
			transition: background-color 0.2s;
		}

		input[type="submit"]:hover {
			background-color: #b3d9ff;
		}
	</style>
</head>
<body>
	


        
	<h1>Cadastro de Usuário</h1>

	<form  method="POST">
		<label for="username">Marca:</label>
		<input type="text" id="marca" name="marca" required>
		<label for="username">Modelo:</label>
		<input type="text" id="modelo" name="modelo" required>
		<label for="username">Compatibilidade:</label>
		<input type="text" id="compatibilidade" name="compatibilidade" required>
		
		<input type="submit" name="submit" id="submit" value="Salvar">
	</form>

</body>
</html>
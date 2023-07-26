<!DOCTYPE html>
<html>
<head>
  <title>Xbox Layout</title>
  <style>
    body {
      background-color: #0f0f0f;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }
    
    .xbox {
      width: 400px;
      background-color: #107c10;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      margin-right: 20px; /* Added margin to create space between boxes */
    }
    
    .dashboard-box {
      width: 400px; /* Adjust width as per your requirements */
      background-color: #820000; /* Change the background color for the new box */
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }
    
    .logo {
      width: 100px;
      margin-bottom: 20px;
    }
    
    h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    p {
      font-size: 16px;
      margin-bottom: 20px;
    }
    
    .button {
      display: inline-block;
      background-color: #0f0f0f;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    
    .button:hover {
      background-color: #666;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="xbox">
      <img class="logo" src="img/excelllogo.png" alt="Xbox Logo">
      <h1>Excell Setup</h1>
      <p>Conecte-se!</p>
      <a class="button" href="login.php">Começar</a>
    </div>
    <!-- New dashboard box -->
    <div class="dashboard-box">
    <img class="logo" src="img/excelllogo.png" alt="Xbox Logo">
      <!-- Add content for the new dashboard box here -->
      <h1>Excell Academy</h1>
      <p>Conecte-se!</p>
      <a class="button" href="academy/academy.php">Começar</a>
    </div>
  </div>
</body>
</html>

<?php
    session_start();
    // print_r($_SESSION);
    if((!isset ($_SESSION['email']) == true) and (!isset($_SESSION['senha'])== true ))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
 body {
            background: linear-gradient(to bottom, #ADD8E6, #87CEFA); 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        </style>
</head>
<body>
<a href="index.html" class="back-button">Voltar</a>
<div class="form-container">
    <?php
    echo "<h1>Email enviado com sucesso, Aguarde resposta. <u>$logado</u></h1>"
    ?>
</body>
</html>

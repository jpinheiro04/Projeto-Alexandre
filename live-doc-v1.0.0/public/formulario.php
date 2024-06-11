<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Senha: ' . $_POST['senha']);
        //print_r('<br>');
        //print_r('telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('sexo: ' . $_POST['sexo']);
        //print_r('<br>');
        //print_r('data_nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('endereco: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES('$nome','$email','$senha','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
   
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Clientes</title>
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
        .form-container {
            background-color: #001f3f;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            color: white;
        }
        .form-container h2 {
            background-color: #007bff;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: black;
        }
        .inputSubmit {
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .inputSubmit:hover {
            background: linear-gradient(to right, #6610f2, #007bff);
        }
        .form-group input[type="radio"] {
            width: auto;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<form action="formulario.php" method="POST">
<a href="index.html" class="back-button">Voltar</a>
    <div class="form-container">
        <h2>Formulário de Clientes</h2>
            <div class="form-group">
                <label for="nome" class="labelInput">Nome completo:</label>
                <input type="text" id="nome" name="nome" class="inputUser" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="feminino">Feminino</label>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <input class="inputSubmit" type="submit" name="submit" id="submit">
            </div>
        </form>
    </div>
</body>
</html>

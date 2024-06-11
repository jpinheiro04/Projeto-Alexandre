<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .form-group input {
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
    </style>
</head>
<body>
    <a href="index.html" class="back-button">Voltar</a>
    <div class="form-container">
        <h2>Login</h2>
        <form action="testLogin.php" method="POST">
            <div class="form-group">
            <input type="text" name="email" placeholder="Email">
            </div>     
            <div class="form-group">
            <input type="password" name="senha" placeholder="Senha">
            </div>
            <div class="form-group">
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>

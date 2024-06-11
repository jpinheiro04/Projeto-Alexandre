<?php
if(!empty($_GET['id'])) {
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0) {
        while($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $senha = $user_data['senha'];
            $telefone = $user_data['telefone'];
            $sexo = $user_data['sexo'];
            $data_nasc = $user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
    } else {
        header('Location: sistema.php');
    }
} else {
    header('Location: sistema.php');
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
        #update {
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        #update:hover {
            background: linear-gradient(to right, #6610f2, #007bff);
        }
        .form-group input[type="radio"] {
            width: auto;
            margin-right: 5px;
        }
    </style>
</head>
<body>
<form action="saveEdit.php" method="POST">
<a href="sistema.php" class="back-button">Voltar</a>
    <div class="form-container">
        <h2>Formulário de Clientes</h2>
            <div class="form-group">
                <label for="nome" class="labelInput">Nome completo:</label>
                <input type="text" id="nome" name="nome" class="inputUser" value="<?php echo htmlspecialchars($nome); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="text" id="senha" name="senha" value="<?php echo htmlspecialchars($senha); ?>" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" value="<?php echo htmlspecialchars($telefone); ?>" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <label for="feminino">Feminino</label>
                <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo $sexo == 'feminino' ? 'checked' : ''; ?>>
                <label for="masculino">Masculino</label>
                <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo $sexo == 'masculino' ? 'checked' : ''; ?>>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo htmlspecialchars($data_nasc); ?>" required>
            </div>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" value="<?php echo htmlspecialchars($cidade); ?>" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="<?php echo htmlspecialchars($estado); ?>" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" value="<?php echo htmlspecialchars($endereco); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <input type="submit" name="update" id="update" value="Atualizar">
            </div>
        </form>
    </div>
</body>
</html>

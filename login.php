<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    } else {
        $error = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imgs/favicon.png">
    <title>Minhas Férias - Login</title>
    <style>
        /* CSS Inline para Exemplo (use styles.css para melhor manutenção) */
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://wallpaper.forfun.com/fetch/0d/0d22df44b7dc3dae9171dea9909ac029.jpeg);
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Organiza elementos em coluna */
            height: 100vh;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 1.5rem; /* Dá espaço abaixo do título */
        }

        #form-login {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            width: 100%;
            max-width: 400px;
        }

        #login h2 {
            margin-bottom: 10px;
            font-size: 1rem;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .sessao-login-btn {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .sessao-login-btn:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            font-size: 0.9rem;
            color: red;
        }
    </style>
</head>
<body>
    <!-- Título principal da página -->
    <h1>Login de Usuários</h1>
    
    <!-- Formulário de Login -->
    <form id="form-login" method="POST">
        <div id="login">
            <h2 class="login-texto">Usuário</h2>
            <input type="text" name="usuario" placeholder="E-mail ou Número" required>
            
            <h2 class="login-texto">Senha</h2>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            
            <button type="submit" class="sessao-login-btn">Entrar</button>

            <!-- Exibir erro, se existir -->
            <?php if (!empty($error)): ?>
                <p><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>
        </div>
    </form>
</body>
</html>

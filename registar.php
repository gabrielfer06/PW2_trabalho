<?php
session_start();

// 1. Configuração da ligação
$host = "localhost";
$user_db = "u506280443_gabfer"; 
$pass_db = "oEfr0cI6;Eq"; // Substitua pela sua senha real
$db_name = "u506280443_gabferDB";

$conn = new mysqli($host, $user_db, $pass_db, $db_name);

if ($conn->connect_error) {
    die("Erro na ligação: " . $conn->connect_error);
}

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // Criptografia da senha por segurança
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // 2. Verificar se o email já existe
    $checkEmail = "SELECT email FROM utilizadores WHERE email = '$email'";
    $res = $conn->query($checkEmail);

    if ($res->num_rows > 0) {
        $erro = "Este e-mail já está registado!";
    } else {
        // 3. Inserir no Banco de Dados
        $sql = "INSERT INTO utilizadores (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        
        if ($conn->query($sql)) {
            // Registo feito com sucesso, redireciona para o login
            header("Location: login.php?sucesso=1");
            exit();
        } else {
            $erro = "Erro ao registar: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Registar - Gabs Tech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="profile-container">
  <form class="profile-card" method="post">
    <h2>Criar Conta</h2>
    
    <?php if($erro) echo "<p style='color:red;'>$erro</p>"; ?>

    <input type="text" name="nome" placeholder="Nome Completo" required>
    <input type="email" name="email" placeholder="Seu melhor E-mail" required>
    <input type="password" name="senha" placeholder="Crie uma Senha" required>

    <button class="profile-btn" type="submit">Registar</button>
    <p>Já tem conta? <a href="login.php">Faça Login</a></p>
  </form>
</section>

</body>
</html>
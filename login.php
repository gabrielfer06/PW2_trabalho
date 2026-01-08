<?php
session_start();

// 1. Configurações da Base de Dados
$host = "localhost";
$user_db = "u506280443_gabfer"; // Verifique se o seu utilizador do MySQL é este
$pass_db = "SUA_SENHA_AQUI";    // Coloque a senha do seu banco de dados
$db_name = "u506280443_gabferDB";

// 2. Criar a conexão
$conn = new mysqli($host, $user_db, $pass_db, $db_name);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // 3. Inserir o utilizador na base de dados (Registo e Login simultâneo para teste)
    // Em um sistema real, primeiro você verificaria se ele já existe.
    $sql = "INSERT INTO utilizadores (nome, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nome, $email);
    
    if ($stmt->execute()) {
        // 4. Se gravou com sucesso, guarda na sessão para o perfil.php ler
        $_SESSION['user'] = [
            "nome" => $nome,
            "email" => $email
        ];
        header("Location: perfil.php");
        exit();
    } else {
        echo "Erro ao gravar: " . $conn->error;
    }
}
?>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Simulação de login (SEM BD)
    $_SESSION['user'] = [
        "nome" => $_POST['nome'],
        "email" => $_POST['email']
    ];

    header("Location: perfil.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Login - Gabs Tech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="profile-container">
  <form class="profile-card" method="post">
    <h2>Login</h2>

    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>

    <button class="profile-btn" type="submit">Entrar</button>
  </form>
</section>

</body>
</html>

<?php
session_start();

/* Proteção da página */
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil - Gabs Tech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="logo">
    <a href="index.php">Gabs Tech</a>
  </div>

  <div class="icons">
    <span><a href="index.php">Home</a></span>
    <span><a href="carrinho.php">Carrinho</a></span>
  </div>
</header>

<section class="profile-container">

  <div class="profile-card">
    <img src="imagens/user-interface.png" alt="Avatar" class="profile-avatar">

    <h2><?php echo htmlspecialchars($user['nome']); ?></h2>
    <p class="email"><?php echo htmlspecialchars($user['email']); ?></p>

    <div class="profile-actions">
      <a href="#" class="profile-btn">Editar Perfil</a>
      <a href="#" class="profile-btn">Minhas Encomendas</a>
      <a href="logout.php" class="profile-btn logout">Logout</a>
    </div>
  </div>

</section>

</body>
</html>

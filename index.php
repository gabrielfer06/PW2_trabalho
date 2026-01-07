<?php
session_start();
$carrinhoCount = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gabs Tech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header -->
<header>
  <div class="logo">Gabs Tech</div>

  <div class="search-box">
    <img src="imagens/search.png" class="search-icon">
    <input type="text" placeholder="Search products..." class="search">
  </div>

  <div class="icons">
    <a href="perfil.php">
      <img src="imagens/user-interface.png" alt="Account">
    </a>
       
    <a href="carrinho.php" class="cart-link">
      <img src="imagens/online-shopping (3).png" alt="cart">
      Cart (<?php echo $carrinhoCount; ?>)
    </a>
  </div>
</header>

<!-- Menu -->
<nav>
  <ul>
    <li><a href="laptop.php">Laptop</a></li>
    <li><a href="camera.php">Camera</a></li>
    <li><a href="mobile.php">Mobile & Tablets</a></li>
    <li><a href="headphones.php">Headphones</a></li>
    <li><a href="smartwatch.php">Smartwatches</a></li>
    <li><a href="accessories.php">Accessories</a></li>
    <button class="preorder">Pre-order Now</button>
  </ul>
</nav>

<!-- Banner -->
<section class="banner">
  <div class="main-banner">
    <h1>Tecnologia de Elite para o teu Setup</h1>
    <p>Encontra os componentes e computadores de alta performance que elevam o teu trabalho e o teu jogo a outro nível.</p>
    <button>Shop now</button>
    <img src="imagens/Lightweight-Tablet.png" alt="Tablet">
  </div>

  <div class="side-banners">
    <div class="side-banner">
      <img src="imagens/waterproof-smartwatch-1.png" alt="Smart Watch">
      <p>Smart Watch</p>
      <a href="smartwatch.php" class="btn-explore">Explore</a>
    </div>

    <div class="side-banner">
      <img src="imagens/wireless-headphone.png" alt="Headphone">
      <p>Headphone</p>
      <a href="headphones.php" class="btn-explore">Explore</a>
    </div>
  </div>
</section>

<!-- Produtos -->
<section class="products">
  <h2>New Arrivals</h2>

  <div class="product-grid">

    <!-- Produto 1 -->
    <div class="product">
      <span class="sale">Sale</span>
      <img src="imagens/waterproof-smartwatch-1.png">
      <p class="product-name">Waterproof Smartwatch</p>
      <div class="product-details">
        <span class="price">€129.99</span><br>

        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="nome" value="Waterproof Smartwatch">
          <input type="hidden" name="preco" value="129.99">
          <button type="submit" class="add-cart">Add to cart</button>
        </form>
      </div>
    </div>

    <!-- Produto 2 -->
    <div class="product">
      <span class="sale">Sale</span>
      <img src="imagens/wireless-headphone.png">
      <p class="product-name">Wireless Headphone</p>
      <div class="product-details">
        <span class="price">€89.99</span><br>

        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="id" value="2">
          <input type="hidden" name="nome" value="Wireless Headphone">
          <input type="hidden" name="preco" value="89.99">
          <button type="submit" class="add-cart">Add to cart</button>
        </form>
      </div>
    </div>

    <!-- Produto 3 -->
    <div class="product">
      <img src="imagens/advanced-laptop.png">
      <p class="product-name">Advanced Laptop</p>
      <div class="product-details">
        <span class="price">€999.99</span><br>

        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="id" value="3">
          <input type="hidden" name="nome" value="Advanced Laptop">
          <input type="hidden" name="preco" value="999.99">
          <button type="submit" class="add-cart">Add to cart</button>
        </form>
      </div>
    </div>

    <!-- Produto 4 -->
    <div class="product">
      <span class="sale">Sale</span>
      <img src="imagens/light-drones.png">
      <p class="product-name">Light Drone</p>
      <div class="product-details">
        <span class="price">€249.99</span><br>

        <form action="add_to_cart.php" method="POST">
          <input type="hidden" name="id" value="4">
          <input type="hidden" name="nome" value="Light Drone">
          <input type="hidden" name="preco" value="249.99">
          <button type="submit" class="add-cart">Add to cart</button>
        </form>
      </div>
    </div>

  </div>
</section>

</body>
</html>

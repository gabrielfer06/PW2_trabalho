<?php
session_start();
$cartCount = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Mobile & Tablets - Gabs Tech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="logo">
    <a href="index.php">Gabs Tech</a>
  </div>

  <div class="search-box">
    <img src="imagens/search.png" class="search-icon">
    <input type="text" placeholder="Search products..." class="search">
  </div>

  <div class="icons">
    <span>Offer</span>
    <span>Shop</span>

    <a href="perfil.php">
      <img src="imagens/user-interface.png" alt="Account">
    </a>

    <a href="carrinho.php" class="cart">
      <img src="imagens/online-shopping (3).png" alt="Cart">
      <span class="cart-count"><?= $cartCount ?></span>
    </a>
  </div>
</header>

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

<section class="category-header">
  <h1>Mobile & Tablets</h1>
  <p>Showing all 4 results</p>

  <select>
    <option>Default sorting</option>
    <option>Price: low to high</option>
    <option>Price: high to low</option>
  </select>
</section>

<section class="products">
  <div class="product-grid">

    <!-- Produto 20 -->
    <div class="product">
      <img src="imagens/advanced-smartphone.png">
      <p>Advanced Smartphone</p>
      <span class="price">150,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="20">
        <input type="hidden" name="nome" value="Advanced Smartphone">
        <input type="hidden" name="preco" value="150.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <!-- Produto 21 -->
    <div class="product">
      <img src="imagens/Android-Pro-Smartphone.png">
      <p>Android Pro Smartphone</p>
      <span class="price">139,99€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="21">
        <input type="hidden" name="nome" value="Android Pro Smartphone">
        <input type="hidden" name="preco" value="139.99">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <!-- Produto 22 -->
    <div class="product">
      <img src="imagens/Lightweight-Tablet.png">
      <p>Lightweight Tablet</p>
      <span class="price">120,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="22">
        <input type="hidden" name="nome" value="Lightweight Tablet">
        <input type="hidden" name="preco" value="120.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <!-- Produto 23 -->
    <div class="product">
      <img src="imagens/Triple-camera-Smartphone.png">
      <p>Triple Camera Smartphone</p>
      <span class="price">180,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="23">
        <input type="hidden" name="nome" value="Triple Camera Smartphone">
        <input type="hidden" name="preco" value="180.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

  </div>
</section>

<script src="script.js"></script>
</body>
</html>

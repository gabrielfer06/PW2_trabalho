<?php
session_start();
$cartCount = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Headphones - Gabs Tech</title>
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
  <h1>Headphones</h1>
  <p>Showing all 5 results</p>

  <select>
    <option>Default sorting</option>
    <option>Price: low to high</option>
    <option>Price: high to low</option>
  </select>
</section>

<section class="products">
  <div class="product-grid">

    <!-- Produto 30 -->
    <div class="product">
      <img src="imagens/bluetooth-airpods.png">
      <p>Bluetooth Airpods</p>
      <span class="price">70,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="30">
        <input type="hidden" name="nome" value="Bluetooth Airpods">
        <input type="hidden" name="preco" value="70.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <!-- Produto 31 -->
    <div class="product">
      <img src="imagens/case-airpods.png">
      <p>Case Airpods</p>
      <span class="price">85,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="31">
        <input type="hidden" name="nome" value="Case Airpods">
        <input type="hidden" name="preco" value="85.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <!-- Produto 32 -->
    <div class="product">
      <img src="imagens/waterproof-headphones.png">
      <p>Waterproof Headphones</p>
      <span class="price">100,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="32">
        <input type="hidden" name="nome" value="Waterproof Headphones">
        <input type="hidden" name="preco" value="100.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <!-- Produto 33 -->
    <div class="product">
      <img src="imagens/wired-headphones.png">
      <p>Wired Headphones</p>
      <span class="price">50,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="33">
        <input type="hidden" name="nome" value="Wired Headphones">
        <input type="hidden" name="preco" value="50.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <!-- Produto 34 -->
    <div class="product">
      <img src="imagens/wireless-headphone (1).png">
      <p>Wireless Headphones</p>
      <span class="price">150,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="34">
        <input type="hidden" name="nome" value="Wireless Headphones">
        <input type="hidden" name="preco" value="150.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

  </div>
</section>

<script src="script.js"></script>
</body>
</html>

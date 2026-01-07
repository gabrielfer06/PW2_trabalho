<?php
session_start();
$cartCount = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Smartwatches - Gabs Tech</title>
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
  <h1>Smartwatches</h1>
  <p>Showing all 4 results</p>

  <select>
    <option>Default sorting</option>
    <option>Price: low to high</option>
    <option>Price: high to low</option>
  </select>
</section>

<section class="products">
  <div class="product-grid"> <div class="product">
      <a href="detalhes_produto.php?id=30">
        <img src="imagens/smartwatch-gallery.png" alt="Smartwatch Series">
      </a>
      <p>Smartwatch Series</p>
      <span class="price">50,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="30">
        <input type="hidden" name="nome" value="Smartwatch Series">
        <input type="hidden" name="preco" value="50.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=31">
        <img src="imagens/smartwatch-running.png" alt="Smartwatch Running">
      </a>
      <p>Smartwatch Running</p>
      <span class="price">90,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="31">
        <input type="hidden" name="nome" value="Smartwatch Running">
        <input type="hidden" name="preco" value="90.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=32">
        <img src="imagens/touchscreen_smartwatch.png" alt="Touchscreen Smartwatch">
      </a>
      <p>Touchscreen Smartwatch</p>
      <span class="price">60,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="32">
        <input type="hidden" name="nome" value="Touchscreen Smartwatch">
        <input type="hidden" name="preco" value="60.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=33">
        <img src="imagens/waterproof-smartwatch-1 (1).png" alt="Waterproof Smartwatch">
      </a>
      <p>Waterproof Smartwatch</p>
      <span class="price">50,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="33">
        <input type="hidden" name="nome" value="Waterproof Smartwatch">
        <input type="hidden" name="preco" value="50.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

  </div> </section>

<script src="script.js"></script>
</body>
</html>

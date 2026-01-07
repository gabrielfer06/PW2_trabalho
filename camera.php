<?php
session_start();
$cartCount = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Camera - Gabs Tech</title>
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
  <h1>Camera</h1>
  <p>Showing all 4 results</p>

  <select>
    <option>Default sorting</option>
    <option>Price: low to high</option>
    <option>Price: high to low</option>
  </select>
</section>

<section class="products">
  <div class="product-grid">

    <div class="product">
      <a href="detalhes_produto.php?id=60">
        <img src="imagens/compact-camera.png" alt="Compact Camera">
      </a>
      <p>Compact Camera</p>
      <span class="price">139,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="60">
        <input type="hidden" name="nome" value="Compact Camera">
        <input type="hidden" name="preco" value="139.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=61">
        <img src="imagens/digital-camera.png" alt="Digital Camera">
      </a>
      <p>Digital Camera</p>
      <span class="price">500,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="61">
        <input type="hidden" name="nome" value="Digital Camera">
        <input type="hidden" name="preco" value="500.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=62">
        <img src="imagens/Dual-Pixel-camera.png" alt="Dual Pixel Camera">
      </a>
      <p>Dual Pixel Camera</p>
      <span class="price">150,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="62">
        <input type="hidden" name="nome" value="Dual Pixel Camera">
        <input type="hidden" name="preco" value="150.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=63">
        <img src="imagens/light-drones.png" alt="Light Drones">
      </a>
      <p>Light Drones</p>
      <span class="price">200,00€</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="63">
        <input type="hidden" name="nome" value="Light Drones">
        <input type="hidden" name="preco" value="200.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

  </div>
</section>

<script src="script.js"></script>
</body>
</html>

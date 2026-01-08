<?php
session_start();
$cartCount = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Laptop - Gabs Tech</title>
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
  <h1>Laptop</h1>
  <p>Showing all 4 results</p>

  <select>
    <option>Default sorting</option>
    <option>Price: low to high</option>
    <option>Price: high to low</option>
  </select>
</section>

<section class="products">
  <section class="products">
  <div class="product-grid">

    <div class="product">
      <a href="detalhes_produto.php?id=10">
        <img src="imagens/advanced-laptop.png">
      </a>
      <p>Advanced Laptop</p>
      <span class="price">€300.00</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="10">
        <input type="hidden" name="nome" value="Advanced Laptop">
        <input type="hidden" name="preco" value="300.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=11">
        <img src="imagens/foldable-laptops.png">
      </a>
      <p>Foldable Laptop</p>
      <span class="price">€200.00</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="11">
        <input type="hidden" name="nome" value="Foldable Laptop">
        <input type="hidden" name="preco" value="200.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=12">
        <img src="imagens/gaming-laptop.png">
      </a>
      <p>Gaming Laptop</p>
      <span class="price">€500.00</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="12">
        <input type="hidden" name="nome" value="Gaming Laptop">
        <input type="hidden" name="preco" value="500.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=13">
        <img src="imagens/Space-edition-laptop.png">
      </a>
      <p>Space Edition Laptop</p>
      <span class="price">€150.00</span><br>

      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="13">
        <input type="hidden" name="nome" value="Space Edition Laptop">
        <input type="hidden" name="preco" value="150.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

  </div>
</section>


<script src="script.js"></script>
</body>
</html>

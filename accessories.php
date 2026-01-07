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

    <!-- CARRINHO CLICÁVEL -->
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
  <h1>Accessories</h1>
  <p>Showing all 7 results</p>

  <select>
    <option>Default sorting</option>
    <option>Price: low to high</option>
    <option>Price: high to low</option>
  </select>
</section>


  <section class="products">
  <div class="product-grid">

    <div class="product">
      <a href="detalhes_produto.php?id=50">
        <img src="imagens/case-airpods.png">
      </a>
      <p>Case Airpods</p>
      <span class="price">85,00€</span><br>
      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="50">
        <input type="hidden" name="nome" value="Case Airpods">
        <input type="hidden" name="preco" value="85.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=4">
        <img src="imagens/light-drones.png">
      </a>
      <p>Light Drone</p>
      <span class="price">249,99€</span><br>
      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="4">
        <input type="hidden" name="nome" value="Light Drone">
        <input type="hidden" name="preco" value="249.99">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=51">
        <img src="imagens/portable-bluetooth-speaker.png">
      </a>
      <p>Portable Bluetooth Speaker</p>
      <span class="price">59,99€</span><br>
      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="51">
        <input type="hidden" name="nome" value="Portable Bluetooth Speaker">
        <input type="hidden" name="preco" value="59.99">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=52">
        <img src="imagens/smartwatch-gallery.png">
      </a>
      <p>Smartwatch Series</p>
      <span class="price">50,00€</span><br>
      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="52">
        <input type="hidden" name="nome" value="Smartwatch Series">
        <input type="hidden" name="preco" value="50.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=53">
        <img src="imagens/waterproof-headphones.png">
      </a>
      <p>Waterproof Headphones</p>
      <span class="price">100,00€</span><br>
      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="53">
        <input type="hidden" name="nome" value="Waterproof Headphones">
        <input type="hidden" name="preco" value="100.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

    <div class="product">
      <a href="detalhes_produto.php?id=54">
        <img src="imagens/waterproof-smartwatch-1 (1).png">
      </a>
      <p>Waterproof Smartwatch</p>
      <span class="price">50,00€</span><br>
      <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="id" value="54">
        <input type="hidden" name="nome" value="Waterproof Smartwatch">
        <input type="hidden" name="preco" value="50.00">
        <button type="submit" class="add-cart">Add to cart</button>
      </form>
    </div>

  </div>
</section>

<script src="script.js"></script>
</body>
</html>

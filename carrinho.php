<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Carrinho - Gabs Tech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <div class="logo">
    <a href="index.html">Gabs Tech</a>
  </div>
</header>

<section class="products">
  <h2>O meu carrinho</h2>

<?php if (empty($carrinho)) { ?>

  <p>O carrinho está vazio.</p>

<?php } else { ?>

  <table style="width:100%; border-collapse: collapse;">
    <tr>
      <th>Produto</th>
      <th>Preço</th>
      <th>Qtd</th>
      <th>Total</th>
      <th></th>
    </tr>

<?php
$totalGeral = 0;

foreach ($carrinho as $id => $item) {
    $total = $item['preco'] * $item['quantidade'];
    $totalGeral += $total;
?>
    <tr>
      <td><?php echo htmlspecialchars($item['nome']); ?></td>
      <td><?php echo number_format($item['preco'], 2); ?>€</td>
      <td><?php echo $item['quantidade']; ?></td>
      <td><?php echo number_format($total, 2); ?>€</td>
      <td>
        <a href="remove_from_cart.php?id=<?php echo $id; ?>">Remover</a>
      </td>
    </tr>

<?php } ?>

  </table>

  <h3>Total: <?php echo number_format($totalGeral, 2); ?>€</h3>

<?php } ?>

</section>

</body>
</html>

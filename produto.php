<?php
session_start();

/* Simulação de produto (depois podes ligar a BD) */
$produto = [
    "id" => 20,
    "nome" => "Advanced Smartphone",
    "preco_min" => 139.00,
    "preco_max" => 150.00,
    "imagem" => "imagens/advanced-smartphone.png",
    "descricao" => "Libero lectus cubilia nec ullamcorper risus turpis venenatis fringilla. Bibendum dis eros faucibus iaculis convallis viverra malesuada donec orci.",
    "features" => [
        "A potenti magnis eros phasellus ultricies.",
        "Dapibus aliquet penatibus potenti et tempor.",
        "In fringilla natoque penatibus sed dui molestie.",
        "Curae congue vivamus egestas enim fermentum.",
        "Proin est nibh accumsan morbi dignissim."
    ]
];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<title><?= $produto['nome'] ?> - Gabs Tech</title>
<link rel="stylesheet" href="style.css">

<style>
.product-page {
    max-width: 1200px;
    margin: 40px auto;
    display: flex;
    gap: 60px;
}
.product-image {
    width: 50%;
    background: #f5f5f5;
    padding: 40px;
    display: flex;
    justify-content: center;
}
.product-image img {
    max-width: 300px;
}
.product-info {
    width: 50%;
}
.product-info h1 {
    font-size: 36px;
    margin-bottom: 10px;
}
.price {
    font-size: 22px;
    margin-bottom: 20px;
}
.product-info p {
    color: #555;
    line-height: 1.6;
}
.product-info ul {
    margin: 20px 0;
    padding-left: 20px;
}
.product-info ul li {
    margin-bottom: 8px;
}
.select-box {
    margin: 20px 0;
}
.select-box select {
    padding: 8px;
    width: 200px;
}
.cart-actions {
    display: flex;
    gap: 20px;
    align-items: center;
    margin-top: 30px;
}
.quantity {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
}
.quantity button {
    padding: 8px 12px;
    border: none;
    background: #eee;
    cursor: pointer;
}
.quantity input {
    width: 40px;
    text-align: center;
    border: none;
}
.add-cart {
    background: #ff5a2c;
    color: white;
    padding: 14px 40px;
    border: none;
    cursor: pointer;
    font-size: 16px;
}
</style>
</head>

<body>

<section class="product-page">

    <!-- Imagem -->
    <div class="product-image">
        <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>">
    </div>

    <!-- Informação -->
    <div class="product-info">
        <h1><?= $produto['nome'] ?></h1>

        <div class="price">
            €<?= number_format($produto['preco_min'],2) ?> – €<?= number_format($produto['preco_max'],2) ?>
        </div>

        <p><?= $produto['descricao'] ?></p>

        <ul>
            <?php foreach ($produto['features'] as $f) : ?>
                <li><?= $f ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="select-box">
            <label>Color</label><br>
            <select>
                <option>Choose an option</option>
                <option>Black</option>
                <option>Silver</option>
                <option>Purple</option>
            </select>
        </div>

        <form action="add_to_cart.php" method="GET">
            <input type="hidden" name="id" value="<?= $produto['id'] ?>">

            <div class="cart-actions">
                <div class="quantity">
                    <button type="button">-</button>
                    <input type="text" value="1" readonly>
                    <button type="button">+</button>
                </div>

                <button type="submit" class="add-cart">Add to cart</button>
            </div>
        </form>
    </div>

</section>

</body>
</html>

<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];

$totalGeral = 0;
foreach ($carrinho as $item) {
    $totalGeral += $item['preco'] * $item['quantidade'];
}

$compraFinalizada = false;
$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $metodoPagamento = $_POST['metodo_pagamento'] ?? '';
    $morada = trim($_POST['morada'] ?? '');

    if ($metodoPagamento && $morada) {
        $_SESSION['carrinho'] = [];
        $compraFinalizada = true;
        $mensagem = "Obrigado pela sua compra! O pagamento de €" . number_format($totalGeral, 2) . " foi realizado com sucesso.\n";
        $mensagem .= "A encomenda será entregue em: " . htmlspecialchars($morada) . "\n";
        $mensagem .= "Método de pagamento: " . htmlspecialchars($metodoPagamento);
    } else {
        $mensagem = "Por favor, preencha todos os campos para concluir a compra.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Checkout - Gabs Tech</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; margin: 0; padding: 0; }
        header { margin-bottom: 20px; padding: 15px 20px; background-color: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        header .logo a { color: #6a0dad; text-decoration: none; font-weight: bold; font-size: 24px; }
        
        /* Centralização e Container Principal */
        .checkout { 
            max-width: 600px; 
            margin: 40px auto; 
            background-color: #6a0dad; /* Roxo substitui o laranja */
            padding: 30px;
            border-radius: 10px;
            color: white;
            text-align: center;
        }

        .checkout h2 { margin-top: 0; color: white; }
        .total-pagar { font-size: 18px; margin-bottom: 20px; }

        /* Estilo do Formulário */
        .checkout-form-box {
            text-align: left;
        }

        .checkout-form-box label { display: block; margin-top: 15px; font-weight: bold; }
        
        .checkout-form-box select,
        .checkout-form-box textarea { 
            width: 100%; 
            padding: 10px; 
            margin-top: 5px; 
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Garante que o padding não quebre a largura */
        }

        .checkout-form-box button { 
            width: 100%;
            margin-top: 25px; 
            padding: 12px; 
            cursor: pointer; 
            background-color: white; 
            color: #6a0dad; 
            border: none; 
            border-radius: 5px; 
            font-weight: bold;
            font-size: 16px;
            transition: background 0.3s;
        }

        .checkout-form-box button:hover {
            background-color: #e0e0e0;
        }

        .mensagem-sucesso { color: white; font-weight: bold; white-space: pre-line; }
        .mensagem-erro { color: #ffcccc; margin-top: 15px; font-weight: bold; }
        
        .btn-voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: white;
            color: #6a0dad;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <a href="index.php">Gabs Tech</a>
    </div>
</header>

<section class="checkout">
    <?php if ($compraFinalizada) : ?>
        <h2>Sucesso!</h2>
        <p class="mensagem-sucesso"><?php echo $mensagem; ?></p>
        <a href="index.php" class="btn-voltar">Voltar à loja</a>
    <?php else : ?>
        <h2>Checkout</h2>
        <p class="total-pagar">Total a pagar: <strong>€<?php echo number_format($totalGeral, 2); ?></strong></p>

        <div class="checkout-form-box">
            <form method="POST">
                <label for="metodo_pagamento">Método de pagamento:</label>
                <select name="metodo_pagamento" id="metodo_pagamento" required>
                    <option value="">-- Selecione --</option>
                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Multibanco">Multibanco</option>
                    <option value="MB WAY">MB WAY</option>
                </select>

                <label for="morada">Morada de entrega:</label>
                <textarea name="morada" id="morada" rows="4" placeholder="Ex: Rua Exemplo, nº 123, Lisboa" required></textarea>

                <button type="submit">Concluir Compra</button>
            </form>
        </div>

        <?php if ($mensagem) : ?>
            <p class="mensagem-erro"><?php echo $mensagem; ?></p>
        <?php endif; ?>
    <?php endif; ?>
</section>

</body>
</html>
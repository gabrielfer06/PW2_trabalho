<?php
session_start();

$id    = $_POST['id'] ?? null;
$nome  = $_POST['nome'] ?? null;
$preco = $_POST['preco'] ?? null;

if (!$id || !$nome || !$preco) {
    header("Location: index.php");
    exit();
}

/* Criar carrinho se não existir */
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

/* Se o produto já existir, aumenta a quantidade */
if (isset($_SESSION['carrinho'][$id])) {
    $_SESSION['carrinho'][$id]['quantidade']++;
} else {
    $_SESSION['carrinho'][$id] = [
        "nome" => $nome,
        "preco" => (float)$preco,
        "quantidade" => 1
    ];
}

header("Location: carrinho.php");
exit();

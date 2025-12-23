<?php
session_start();

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: index.html");
    exit();
}

/* Produtos simulados */
$produtos = [
    1 => ["nome" => "Waterproof Smartwatch", "preco" => 129.99],
    2 => ["nome" => "Wireless Headphone", "preco" => 89.99],
    3 => ["nome" => "Advanced Laptop", "preco" => 999.99],
    4 => ["nome" => "Light Drone", "preco" => 249.99],
];

if (!isset($produtos[$id])) {
    header("Location: index.html");
    exit();
}

/* Criar carrinho se não existir */
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

/* Se já existir, aumenta quantidade */
if (isset($_SESSION['carrinho'][$id])) {
    $_SESSION['carrinho'][$id]['quantidade']++;
} else {
    $_SESSION['carrinho'][$id] = [
        "nome" => $produtos[$id]['nome'],
        "preco" => $produtos[$id]['preco'],
        "quantidade" => 1
    ];
}

header("Location: carrinho.php");
exit();

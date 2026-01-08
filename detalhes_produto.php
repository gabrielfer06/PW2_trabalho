<?php
session_start();
$cartCount = isset($_SESSION['carrinho']) ? count($_SESSION['carrinho']) : 0;

$produtos = [

    1 => [
        'nome' => 'Waterproof Smartwatch',
        'preco' => '129.99',
        'imagem' => 'imagens/waterproof-smartwatch-1.png',
        'desc' => 'O nosso smartwatch mais vendido. Resistente, elegante e com todas as funções de saúde.'
    ],
    2 => [
        'nome' => 'Wireless Headphone',
        'preco' => '89.99',
        'imagem' => 'imagens/wireless-headphone.png',
        'desc' => 'Experiência sonora premium sem fios. Conforto absoluto para o dia a dia.'
    ],
    3 => [
        'nome' => 'Advanced Laptop',
        'preco' => '999.99',
        'imagem' => 'imagens/advanced-laptop.png',
        'desc' => 'Performance de topo para profissionais exigentes. Ecrã Retina e bateria de longa duração.'
    ],
    
    60 => [
        'nome' => 'Compact Camera',
        'preco' => '139.00',
        'imagem' => 'imagens/compact-camera.png',
        'desc' => 'Perfeita para viagens. Alta qualidade de imagem num corpo leve e fácil de transportar.'
    ],
    61 => [
        'nome' => 'Digital Camera',
        'preco' => '500.00',
        'imagem' => 'imagens/digital-camera.png',
        'desc' => 'Sensor Full Frame para fotógrafos que não abdicam da perfeição e do detalhe em cada clique.'
    ],
    62 => [
        'nome' => 'Dual Pixel Camera',
        'preco' => '150.00',
        'imagem' => 'imagens/Dual-Pixel-camera.png',
        'desc' => 'Foco ultra rápido com tecnologia Dual Pixel. Ideal para capturar objetos em movimento.'
    ],
    63 => [
        'nome' => 'Light Drones',
        'preco' => '200.00',
        'imagem' => 'imagens/light-drones.png',
        'desc' => 'Perspectivas aéreas incríveis. Estável, seguro e com autonomia de voo prolongada.'
    ],
    50 => [
        'nome' => 'Case Airpods',
        'preco' => '85.00',
        'imagem' => 'imagens/case-airpods.png',
        'desc' => 'Estojo de proteção e carregamento com acabamento em silicone premium.'
    ],
    4 => [
        'nome' => 'Light Drone',
        'preco' => '249.99',
        'imagem' => 'imagens/light-drones.png',
        'desc' => 'Drone ultra leve com câmara 4K e estabilização de voo automática.'
    ],
    51 => [
        'nome' => 'Portable Bluetooth Speaker',
        'preco' => '59.99',
        'imagem' => 'imagens/portable-bluetooth-speaker.png',
        'desc' => 'Som potente e graves profundos numa coluna resistente a salpicos.'
    ],
    52 => [
        'nome' => 'Smartwatch Series (Special)',
        'preco' => '50.00',
        'imagem' => 'imagens/smartwatch-gallery.png',
        'desc' => 'Edição especial de acessórios com monitorização básica de saúde.'
    ],
    53 => [
        'nome' => 'Waterproof Headphones (Sport)',
        'preco' => '100.00',
        'imagem' => 'imagens/waterproof-headphones.png',
        'desc' => 'Auscultadores desenhados para desportistas radicais.'
    ],
    54 => [
        'nome' => 'Waterproof Smartwatch (Sport)',
        'preco' => '50.00',
        'imagem' => 'imagens/waterproof-smartwatch-1 (1).png',
        'desc' => 'Relógio inteligente totalmente submersível até 5ATM.'
    ],
    
    10 => [
        'nome' => 'Advanced Laptop',
        'preco' => '300.00',
        'imagem' => 'imagens/advanced-laptop.png',
        'desc' => 'Equipado com o processador mais recente, ideal para multitarefas e software profissional exigente.'
    ],
    11 => [
        'nome' => 'Foldable Laptop',
        'preco' => '200.00',
        'imagem' => 'imagens/foldable-laptops.png',
        'desc' => 'A revolução da produtividade. Ecrã tátil dobrável que se adapta ao teu modo de trabalho.'
    ],
    12 => [
        'nome' => 'Gaming Laptop',
        'preco' => '500.00',
        'imagem' => 'imagens/gaming-laptop.png',
        'desc' => 'Gráficos de última geração e sistema de refrigeração avançado para as tuas maratonas de jogo.'
    ],
    13 => [
        'nome' => 'Space Edition Laptop',
        'preco' => '150.00',
        'imagem' => 'imagens/space-edition-laptop.png',
        'desc' => 'Design futurista inspirado na exploração espacial com acabamentos premium em titânio.'
    ],
    
    40 => [
        'nome' => 'Bluetooth Airpods',
        'preco' => '70.00',
        'imagem' => 'imagens/bluetooth-airpods.png',
        'desc' => 'Liberdade total sem fios com som cristalino e emparelhamento rápido.'
    ],
    41 => [
        'nome' => 'Case Airpods',
        'preco' => '85.00',
        'imagem' => 'imagens/case-airpods.png',
        'desc' => 'Estojo de carregamento inteligente com proteção extra e design premium.'
    ],
    42 => [
        'nome' => 'Waterproof Headphones',
        'preco' => '100.00',
        'imagem' => 'imagens/waterproof-headphones.png',
        'desc' => 'Resistentes ao suor e à chuva. O parceiro ideal para os teus treinos intensos.'
    ],
    43 => [
        'nome' => 'Wired Headphones',
        'preco' => '50.00',
        'imagem' => 'imagens/wired-headphones.png',
        'desc' => 'Som de alta fidelidade sem atrasos. Conforto duradouro para longas sessões.'
    ],
    44 => [
        'nome' => 'Wireless Headphones',
        'preco' => '150.00',
        'imagem' => 'imagens/wireless-headphone (1).png',
        'desc' => 'Cancelamento de ruído ativo e bateria para 40 horas de música ininterrupta.'
    ],
  
    20 => [
        'nome' => 'Advanced Smartphone',
        'preco' => '150.00',
        'imagem' => 'imagens/advanced-smartphone.png',
        'desc' => 'Ecrã infinito e performance incrível para todas as tuas apps.'
    ],
    21 => [
        'nome' => 'Android Pro Smartphone',
        'preco' => '139.99',
        'imagem' => 'imagens/Android-Pro-Smartphone.png',
        'desc' => 'O sistema Android na sua máxima potência com câmaras profissionais.'
    ],
    22 => [
        'nome' => 'Lightweight Tablet',
        'preco' => '120.00',
        'imagem' => 'imagens/Lightweight-Tablet.png',
        'desc' => 'Leve, fino e potente. Ideal para leitura, trabalho e lazer em qualquer lugar.'
    ],
    23 => [
        'nome' => 'Triple Camera Smartphone',
        'preco' => '180.00',
        'imagem' => 'imagens/Triple-camera-Smartphone.png',
        'desc' => 'Captura momentos inesquecíveis com o sistema de tripla câmara de alta resolução.'
    ],
    
    30 => [
        'nome' => 'Smartwatch Series',
        'preco' => '50.00',
        'imagem' => 'imagens/smartwatch-gallery.png',
        'desc' => 'O Smartwatch Series combina elegância com funcionalidade.'
    ],
    31 => [
        'nome' => 'Smartwatch Running',
        'preco' => '90.00',
        'imagem' => 'imagens/smartwatch-running.png',
        'desc' => 'Focado em atletas, com GPS e sensores de alta precisão.'
    ],
    32 => [
        'nome' => 'Touchscreen Smartwatch',
        'preco' => '60.00',
        'imagem' => 'imagens/touchscreen_smartwatch.png',
        'desc' => 'Ecrã AMOLED de alta definição com resposta tátil instantânea.'
    ],
    33 => [
        'nome' => 'Waterproof Smartwatch',
        'preco' => '50.00',
        'imagem' => 'imagens/waterproof-smartwatch-1 (1).png',
        'desc' => 'Resistente à água até 50 metros. Perfeito para natação.'
    ]
    
];


$id = isset($_GET['id']) ? $_GET['id'] : 0;


if (array_key_exists($id, $produtos)) {
    $produto = $produtos[$id];
} else {
    die("Produto não encontrado! <a href='index.php'>Voltar</a>");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title><?php echo $produto['nome']; ?> - Gabs Tech</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .product-detail-container {
            display: flex;
            padding: 50px;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .detail-image img {
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .detail-info {
            flex: 1;
        }
        .detail-info h1 { font-size: 2.5em; margin-bottom: 10px; }
        .detail-price { font-size: 1.5em; color: #2ecc71; font-weight: bold; margin-bottom: 20px; }
        .detail-desc { line-height: 1.6; color: #555; margin-bottom: 30px; }
        .btn-add {
            padding: 15px 30px;
            background: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.1em;
        }
    </style>
</head>
<body>

<header>
    <div class="logo"><a href="index.php">Gabs Tech</a></div>
    <div class="icons">
        <a href="carrinho.php">Cart (<?php echo $cartCount; ?>)</a>
    </div>
</header>

<main class="product-detail-container">
    <div class="detail-image">
        <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
    </div>

    <div class="detail-info">
        <h1><?php echo $produto['nome']; ?></h1>
        <p class="detail-price">€<?php echo $produto['preco']; ?></p>
        <p class="detail-desc"><?php echo $produto['desc']; ?></p>

        <form action="add_to_cart.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="nome" value="<?php echo $produto['nome']; ?>">
            <input type="hidden" name="preco" value="<?php echo $produto['preco']; ?>">
            <button type="submit" class="btn-add">Adicionar ao Carrinho</button>
        </form>
    </div>
</main>

</body>
</html>
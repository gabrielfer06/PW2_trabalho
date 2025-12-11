<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pacote = $_POST['pacote'] ?? '';
    $preco = $_POST['preco'] ?? '';

    if ($pacote && $preco) {
        // Aqui você poderia salvar no banco de dados, enviar e-mail, etc.
        // Por simplicidade, vamos salvar em um arquivo de texto
        $arquivo = 'compras.txt';
        $conteudo = "Pacote: $pacote - Preço: R$ $preco\n";
        file_put_contents($arquivo, $conteudo, FILE_APPEND);

        echo "Compra do pacote '$pacote' realizada com sucesso!";
    } else {
        echo "Dados inválidos!";
    }
} else {
    echo "Método inválido!";
}
?>

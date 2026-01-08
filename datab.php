<?php
$host = "localhost";
$dbname = "u506280443_gabferDB";
$user = "u506280443_gabferdbUser";
$pass = "oEfr0cl6;Eq";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    echo "Erro: " . $conn->connect_error;
} else {
    echo "Conectado com sucesso ao servidor da Hostinger!";
}
?>
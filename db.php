<?php
$host = '18.116.63.100';
$dbname = 'myweb';
$user = 'root';
$password = '';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Habilitar codificación UTF-8 para evitar problemas con caracteres especiales
mysqli_set_charset($conn, 'utf8');
?>

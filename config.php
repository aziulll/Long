<?php

$servername = "localhost"; // nome do servidor (geralmente localhost)
$username = "root"; // usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "usuarios"; // nome do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
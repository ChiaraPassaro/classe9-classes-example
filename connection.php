<?php
require_once 'env.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
  throw new Exception('Errore di connessione ' . $conn->connect_error);
}
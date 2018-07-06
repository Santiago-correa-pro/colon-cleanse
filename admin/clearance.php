<?php include('../config/database.php') ?>

<?php 
session_start();

$username = $_POST['username'];
$pass = $_POST['pass'];

$query = $conn->prepare("SELECT * FROM users WHERE usuario=:usuario");
$query->execute(['usuario' => $username]);
$user = $query->fetch();

if($query->rowCount() > 0) {
    if($username === $user['usuario']) {
            $_SESSION['login'] = '0';
        if($pass === $user['contra']) {
            $_SESSION['login'] = '1';
            echo json_encode('Login');
        } else {
            echo json_encode('Ninguna Coincidencia Encontrada');
            $_SESSION['login'] = '0';
        }
    }
} else {
    echo json_encode('Ninguna Coincidencia Encontrada');
    $_SESSION['login'] = '0';
}
?>
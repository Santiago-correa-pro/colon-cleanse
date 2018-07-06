<?php include('../config/database.php') ?>

<?php 
session_start();

$admin = $_SESSION['user'] = 'admin';
$password = $_SESSION['pass'] = '123';

if(isset($_POST['submit'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == $admin && $pass = $password) {
        $_SESSION['login'] = true;
        header('Location: appointment.php');
    } else {
        $_SESSION['login'] = false;
        header('Location: login.php');
    }
}
?>
<?php 
 session_start();

 if(isset($_POST['submit'])) {
    session_destroy();
    session_unset();
    unset($_SESSION['login']);
    header('Location: login.php');
 }
?>
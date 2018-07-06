<?php 
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);
    $host='localhost';
    $database = 'colon';
    $user = 'santiago';
    $password = 'Rddrl101';


    $conn = new PDO('mysql:host='.$server.';dbname='.$db,$username,$password);
?>


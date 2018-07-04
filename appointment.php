<?php
    include_once("config/database.php");

    $nombre = trim($_POST["nombre"]);
    $celular = trim($_POST["celular"]);
    $fecha = trim($_POST["fecha"]);
    $mensaje = trim($_POST["mensaje"]);

    $sql = $conn->prepare("INSERT INTO appointments(nombre,celular,fecha,mensaje) VALUES(:nombre,:celular,:fecha,:mensaje)");
    $sql->execute(array(
        "nombre" => $nombre,
        "celular" => $celular,
        "fecha" => $fecha,
        "mensaje" => $mensaje
    ));
    
    echo json_encode('Tu cita ha sido recibida y te contactaremos en la siguiente hora');

    $conn = null;
?>



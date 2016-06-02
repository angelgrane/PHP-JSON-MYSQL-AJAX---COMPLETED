<?php
/**
 * Created by PhpStorm.
 * User: LUis Solórzano
 * Date: 06-02-16
 * Time: 01:43 PM
 */
?>

<?php

try {
    include 'conexion.php';

    $response = ["success" => 0, "error" => 0, "error_msg" => ""];
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO notas (nombre, email, password) VALUES (:n, :cr, :ps)";
    $q = $con->prepare($sql);
    $q->execute(['n'=>$nombre, 'cr'=>$correo,'ps'=>$password]);

    if($sql) {
        $response["success"] = 1;
        $_SESSION['user'] = $nombre;
        echo json_encode($response);
    }else{
        $response["error"] = 4;
        $response["error_msg"] = "Ocurrio un error al guardar el dato...";
        echo json_encode($response);
    }

    $con = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>

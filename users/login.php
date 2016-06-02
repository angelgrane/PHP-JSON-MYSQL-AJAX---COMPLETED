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

    $correo = $_POST['email'];
    $clave = $_POST['password'];

    $sql = $con->prepare("SELECT * FROM users WHERE email=:cr AND password =:pw");
    $sql->bindParam(':cr', $correo);
    $sql->bindParam(':pw', md5($clave));
    $sql->execute();

    if($sql) {
        $response["success"] = 1;
        echo json_encode($response);
    }else{
        $response["error"] = 4;
        $response["error_msg"] = "Ocurrio un error al actualizar el dato...";
        echo json_encode($response);
    }

    $con = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>

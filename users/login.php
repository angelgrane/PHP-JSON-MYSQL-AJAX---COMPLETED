<?php
/**
 * Created by PhpStorm.
 * User: LUis Solórzano
 * Date: 06-02-16
 * Time: 01:43 PM
 */
session_start();
?>

<?php

try {
    include '../conexion.php';
    $response = ["success" => 0, "error" => 0, "error_msg" => ""];

    $sql = $con->prepare("SELECT * FROM users WHERE correo=:cr AND clave =:pw");
    $sql->bindParam(':cr', $_POST['email']);
    $sql->bindParam(':pw', md5($_POST['password']));
    $sql->execute();


    while ($item = $sql->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['id'] = $item['id'];
        $_SESSION['users'] = $item['nombre'];
    }

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

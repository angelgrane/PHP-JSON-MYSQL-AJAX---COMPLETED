<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 05-23-16
 * Time: 10:48 PM
 */

try {
    include '../conexion.php';

    $response = ["success" => 0, "error" => 0, "error_msg" => ""];
    $idn = $_POST['id'];

    $sql = $con->prepare("DELETE from notas WHERE id =:id");
    $sql->bindParam(':id', $idn);
    $sql->execute();

    if($sql) {
        $response["success"] = 1;
        echo json_encode($response);
    }else{
        $response["error"] = 4;
        $response["error_msg"] = "Ocurrio un error al eliminar el dato...";
        echo json_encode($response);
    }
    
    $con = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 05-24-16
 * Time: 12:49 AM
 */

try {
    include 'conexion.php';
    $response = ["success" => 0, "error" => 0, "error_msg" => ""];

    $idn = $_POST['id'];
    $nts = $_POST['nota'];

    $sql = $con->prepare("UPDATE notas SET nota =:nt WHERE id =:id");
    $sql->bindParam(':nt', $nts);
    $sql->bindParam(':id', $idn);
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


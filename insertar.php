<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 05-23-16
 * Time: 11:11 PM
 */
if (isset($_POST['nota'])) {
    $nota = $_POST['nota'];

    try {
        include 'conexion.php';

        $response = ["success" => 0, "error" => 0, "error_msg" => ""];

            $sql = "INSERT INTO notas (nota) VALUES (:nota)";
            $q = $con->prepare($sql);
            $q->execute(array('nota'=>$nota));

                if($sql) {
                    $response["success"] = 1;
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


} else {
    echo "no hay nada";
}



?>
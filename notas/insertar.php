<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 05-23-16
 * Time: 10:48 PM
 */
session_start();

if (isset($_POST['nota'])) {
    $nota = $_POST['nota'];

    try {
        include '../conexion.php';

        $response = ["success" => 0, "error" => 0, "error_msg" => ""];

            $sql = "INSERT INTO notas (nota, id_user) VALUES (:nota, :id)";
            $q = $con->prepare($sql);
            $q->execute(['nota'=>$nota, 'id'=>$_SESSION['id']]);

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
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

            $sql = "INSERT INTO notas (nota) VALUES (:nota)" or die('no inserto');
            $q = $con->prepare($sql);
            $q->execute(array('nota'=>$nota));
        
            $con = null;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }


} else {
    echo "no hay nada";
}



?>
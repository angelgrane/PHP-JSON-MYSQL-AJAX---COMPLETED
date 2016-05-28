<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 05-23-16
 * Time: 10:48 PM
 */
?>

<?php

try
{
    include "conexion.php";

    $sql2 = "SELECT * FROM notas";
    $result = $con->query($sql2);
    $datos = [];

    while ($item = $result->fetch(PDO::FETCH_ASSOC)) {
        $datos[] = ["id"=>$item['id'], "nota"=>$item['nota']];
    }

    echo json_encode($datos);
    $con = null;
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>

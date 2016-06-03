<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 05-23-16
 * Time: 10:48 PM
 */
session_start();
?>

<?php

try
{
    include "../conexion.php";

    $sql = $con->prepare("SELECT * FROM notas WHERE id_user=:id ORDER BY id DESC ");
    $sql->bindParam(':id', $_SESSION['id']);
    $sql->execute();

    $datos = [];

    while ($item = $sql->fetch(PDO::FETCH_ASSOC)) {
        $datos[] = ["id"=>$item['id'], "nota"=>$item['nota']];
    }

    echo json_encode($datos);
    $con = null;
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>

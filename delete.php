<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 05-24-16
 * Time: 01:57 AM
 */

try {
    include 'conexion.php';

    $idn = $_POST['id'];

    $sql = $con->prepare("DELETE from notas WHERE id =:id");
    $sql->bindParam(':id', $idn);
    $sql->execute();
    
    $con = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>
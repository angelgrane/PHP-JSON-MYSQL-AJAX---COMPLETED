<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 05-24-16
 * Time: 12:49 AM
 */

try {
    include 'conexion.php';

    $idn = $_POST['id'];
    $nts = $_POST['nota'];

    $sql = $con->prepare("UPDATE notas SET nota =:nt WHERE id =:id");
    $sql->bindParam(':nt', $nts);
    $sql->bindParam(':id', $idn);
    $sql->execute();
    
    $con = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>


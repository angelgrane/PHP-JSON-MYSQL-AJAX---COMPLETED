<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 05-24-16
 * Time: 12:39 AM
 */

try {
    include'conexion.php';

    $sqlwt = "SELECT nota FROM registro";

    $resultst = $con->query($sqlwt);
    while ($rowchat1 = $resultst->fetch(PDO::FETCH_ASSOC)) {

        echo $rowchat1['nota'];
    }
    $con = null;

}catch(PDOException $e) {
    echo $e->getMessage();
}

?>
<?php
/**
 * Created by PhpStorm.
 * User: LUis Solórzano
 * Date: 06-02-16
 * Time: 01:43 PM
 */
?>

<?php
session_start();

try {
    include '../conexion.php';

    $response = ["success" => 0, "error" => 0, "error_msg" => ""];

    $sql3 = $con->prepare("SELECT * FROM users WHERE correo=:correo");
    $sql3->execute([':correo'=>$_POST['correo']]);
    if ($sql3) {
        echo'<script> alert("El correo electronico ya existe..."); </script>';
    }

    while ($item = $sql2->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['id'] = $item['id'];
        $_SESSION['users'] = $item['nombre'];
    }

    $sql = $con->prepare('INSERT INTO users (nombre, correo, clave) VALUES(:nombre, :correo, :clave)');
    $sql->execute([':nombre'=>$_POST['nombre'], ':correo'=>$_POST['correo'], ':clave'=>md5($_POST['passw'])]);

    if($sql) {

        $sql2 = $con->prepare("SELECT * FROM users WHERE correo=:correo");
        $sql2->execute([':correo'=>$_POST['correo']]);

        while ($item = $sql2->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['id'] = $item['id'];
            $_SESSION['users'] = $item['nombre'];
        }

        $response["success"] = 1;
        echo json_encode($response);

    }else{
        echo  "error..";
       $response["error"] = 4;
        $response["error_msg"] = "Ocurrio un error al guardar el dato...";
        echo json_encode($response);
    }

    $con = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}

?>

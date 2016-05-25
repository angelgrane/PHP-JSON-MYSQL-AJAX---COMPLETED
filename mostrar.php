<?php

try
{
    include "conexion.php";

    $sql2 = "SELECT * FROM notas";
    $result = $con->query($sql2);

    while ($item = $result->fetch(PDO::FETCH_ASSOC)) {

        ?>

        <div id="texto<?php echo $item['id'] ?>">
            <?php echo $item['nota'] ?>
            <a href="#" onclick="Edit('<?php echo $item['id'] ?>','<?php echo $item['nota'] ?>')">Editar</a>
            <a href="#" onclick="Delete('<?php echo $item['id'] ?>')">Eliminar</a>
        </div>


<?php

    }
    $con = null;
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>
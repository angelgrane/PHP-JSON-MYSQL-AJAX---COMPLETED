<hr>
<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Publicacion</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    <tbody>

<?php

try
{
    include "conexion.php";

    $sql2 = "SELECT * FROM notas";
    $result = $con->query($sql2);

    while ($item = $result->fetch(PDO::FETCH_ASSOC)) {

        ?>

            <tr id="texto<?php echo $item['id'] ?>">

                <td> <?php echo $item['nota'] ?> </td>
                <td>
                    <button class="btn btn-primary" onclick="Edit('<?php echo $item['id'] ?>','<?php echo $item['nota'] ?>')">Editar</button>
                </td>
                <td>
                    <button class="btn btn-danger" onclick="Delete('<?php echo $item['id'] ?>')">Eliminar</button>
                </td>

            </tr>




      <!--  <div id="texto<?php //echo $item['id'] ?>">
            <?php //echo $item['nota'] ?>
            <a href="#" onclick="Edit('<?php //echo $item['id'] ?>','<?php //echo $item['nota'] ?>')">Editar</a>
            <a href="#" onclick="Delete('<?php //echo $item['id'] ?>')">Eliminar</a>
        </div>-->


<?php

    }
    $con = null;
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>


    </tbody>
</table>

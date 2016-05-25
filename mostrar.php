<?php

try
{
    include "conexion.php";

    $sql2 = "SELECT * FROM notas";
    $result = $con->query($sql2);

    while ($item = $result->fetch(PDO::FETCH_ASSOC)) {

        ?>

   <!--     <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Rocky</td>
                <td>Balboa</td>
                <td>rockybalboa@mail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Peter</td>
                <td>Parker</td>
                <td>peterparker@mail.com</td>
            </tr>
            <tr>
                <td>3</td>
                <td>John</td>
                <td>Rambo</td>
                <td>johnrambo@mail.com</td>
            </tr>
            </tbody>
        </table> -->



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
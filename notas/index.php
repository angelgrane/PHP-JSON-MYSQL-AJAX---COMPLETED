<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 05-23-16
 * Time: 10:48 PM
 */
session_start();

if (!isset($_SESSION['users'])) {
    header('location: ../index.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Practica de PHP + JSON + MYSQL + AJAX">
    <meta name="author" content="Luis Solórzano">
    <title>Practica</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <script src="../js/function.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
</head>

<body onload="Mostrar()">

<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
                <img src="../img/wolf_logo_by_loubatas.png" style="width: 90px; height: 60px;margin-top: -15%;">
            </div>
            <a class="navbar-brand" href="#"><strong>Luis Solórzano</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">
                        <i class="fa fa-home fa-lg"></i>
                        Inicio
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                        <?php echo $_SESSION['users']; ?>
                    </a>
                </li>
                <li>
                    <a href="../users/exit.php">
                        <i class="fa fa-power-off fa-lg" aria-hidden="true"></i>
                        Salir
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">

    <div class="row">
        <div class="col-lg-4 col-md-offset-4">
            <div class="input-group">
                <input type="text" id="nota"  class="form-control" placeholder="Ingrese su nota...">
      <span class="input-group-btn">
        <button id="datos" class="btn btn-success" onclick="AddDatos()">Guardar</button>
      </span>
            </div><!-- /input-group -->

        </div><!-- /.col-lg-6 -->



        <div id="registro" class="col-lg-offset-3 col-lg-6">

            <hr>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Nota</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                    <tbody>

                    </tbody>
            </table>

        </div>

</div> <!-- /container -->

</body>
</html>

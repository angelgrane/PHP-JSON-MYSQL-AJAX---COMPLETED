<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 06-02-16
 * Time: 02:35 PM
 */

session_start();
//$_SESSION['user'] = "luis";

if (isset($_SESSION['users'])) {
    header('location: notas/index.php');
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
                <img src="img/wolf_logo_by_loubatas.png" style="width: 90px; height: 60px;margin-top: -15%;">
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
                <div  class="form-inline"  style="margin-top: 9px;">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Ingrese Correo Electrónico">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Ingrese la Contraseña">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary center-block" onclick="iLogin()">Iniciar Sesión</button>
                    </div>

                </div>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<div class="container">

    <div class="row">

        <div class="col-lg-4 col-md-offset-4">

            <div>
                <h3 class="center-block">Registrarse</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email2" placeholder="Ingrese su Correo Electrónico">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password2" placeholder="Ingrese su Contraseña">
                </div>

                <button type="submit" class="btn btn-primary center-block" onclick="addUser()">Registrarse</button>
            </div>

        </div>

    </div> <!-- /container -->

</body>
</html>



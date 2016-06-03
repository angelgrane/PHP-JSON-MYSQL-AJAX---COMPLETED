<?php
/**
 * Created by PhpStorm.
 * User: luis
 * Date: 06-02-16
 * Time: 04:06 PM
 */
session_start();
session_destroy();
header('location: ../index.php');

?>
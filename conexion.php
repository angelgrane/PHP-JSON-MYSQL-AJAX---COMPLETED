<?php
/**
 * Created by PhpStorm.
 * User: Luis Solorzano
 * Date: 05-23-16
 * Time: 10:48 PM
 */


$hostdb = 'localhost';
$namedb = 'registro';
$userdb = 'root';
$passdb = 'root';

$con = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
$con->exec("SET CHARACTER SET utf8");


?>
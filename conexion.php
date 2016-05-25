<?php
/**
 * Created by PhpStorm.
 * User: Luis Sol�rzano
 * Date: 12/8/2015
 * Time: 8:02 AM
 */

$hostdb = 'localhost';
$namedb = 'registro';
$userdb = 'root';
$passdb = 'root';

$con = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
$con->exec("SET CHARACTER SET utf8");


?>
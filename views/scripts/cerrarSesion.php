<?php
use MyApp\query\Login;
require_once("../../vendor/autoload.php");
$sesion = new Login();
$sesion->cerrarSesion();
?>
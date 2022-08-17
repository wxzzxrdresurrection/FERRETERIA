<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap-grid.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    use MyApp\query\ejecutar;
    require_once("../../vendor/autoload.php");

    $insert = new ejecutar();

    extract($_POST);

    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];
    $placas=$_POST["placas"];
    $licencia=$_POST["licencia"];

    $cadena = "UPDATE repartidores SET NOMBRE='$nombre',APELLIDOS='$apellidos',CORREO='$correo', TELEFONO='$telefono',PLACAS='$placas',NUM_LICENCIA='$licencia' where ID_REPARTIDOR='$id'";

    $insert -> ejecutar($cadena);

    echo "<div class= alert-succes'>Repartidor Actualizado </div>";
    header("refresh:3; ../view_administrador/VerRepartidores.php");

    ?>
    </div>
    
</body>
</html>
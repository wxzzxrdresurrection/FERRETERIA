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
    $Apaterno=$_POST["Apaterno"];
    $Amaterno=$_POST["Amaterno"];
    $direccion=$_POST["direccion"];
    $cp=$_POST["cp"];
    $correo=$_POST["correo"];
    $telefono=$_POST["telefono"];


    $cadena = "UPDATE clientes SET NOMBRE='$nombre',AP_PATERNO='$Apaterno',AP_MATERNO='$Amaterno',DIRECCION='$direccion', CP='$cp',CORREO='$correo',telefono='$telefono' where NO_CLIENTE='$id'";

    $insert -> ejecutar($cadena);

    echo "<div class= alert-succes'>Cliente Actualizado </div>";
    header("refresh:3; ../view_administrador/VerClientes.php");

    ?>
    </div>
    
</body>
</html>
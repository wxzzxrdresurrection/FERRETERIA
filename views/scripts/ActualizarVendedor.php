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
    $sexo=$_POST["sexo"];


    $cadena = "UPDATE vendedores SET NOMBRE='$nombre',APELLIDOS='$apellidos',CORREO='$correo', TELEFONO='$telefono',SEXO='$sexo' where ID_VENDEDOR='$id'";

    $insert -> ejecutar($cadena);

    echo "<div class= alert-succes'>Vendedor Actualizado </div>";
    header("refresh:3; ../view_administrador/VerVendedores.php");

    ?>
    </div>
    
</body>
</html>
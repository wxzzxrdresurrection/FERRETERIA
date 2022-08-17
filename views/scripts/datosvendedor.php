<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    use MyApp\query\select;
    require_once ("../../vendor/autoload.php");
    $id = $_SESSION['ID'];
    $datos = new select();
    $consulta = "SELECT * FROM REPARTIDORES WHERE REPARTIDORES.LOGIN = 1014";
    $vendedor = $datos->seleccionar($consulta);
    foreach($vendedor as $infovendedor)
    {
        $_SESSION['VENDNOMBRE'] = $infovendedor->NOMBRE;
        $_SESSION['VENDAPELLIDOS'] = $infovendedor->APELLIDOS;
        $_SESSION['VENDCORREO'] = $infovendedor->CORREO;
        $_SESSION['VENDTELEFONO'] = $infovendedor->TELEFONO;
    }
    header("Location: ../views_vendedor/vInicio.html");

    ?>
</body>
</html>
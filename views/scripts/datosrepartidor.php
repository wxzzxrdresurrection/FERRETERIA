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
    $consulta = "SELECT ID_REPARTIDOR as ID, NOMBRE AS NOMBRE, APELLIDOS AS APELLIDOS, TELEFONO AS TELEFONO, PLACAS AS PLACAS, NUM_LICENCIA AS LICENCIA FROM REPARTIDORES WHERE REPARTIDORES.LOGIN= '$id'";
    $repartidor = $datos->seleccionar($consulta);
    foreach($repartidor as $inforepartidor)
    {
        $_SESSION['IDREP'] = $inforepartidor->ID;
        $_SESSION['NOMBREREP'] = $inforepartidor->NOMBRE;
        $_SESSION['APELLIDOSREP'] = $inforepartidor->APELLIDOS;
        $_SESSION['TELREP'] = $inforepartidor->TELEFONO;
        $_SESSION['PLACAS'] = $inforepartidor->PLACAS;
        $_SESSION['LICENCIA'] = $inforepartidor->LICENCIA;
        
    }
    header("Location: ../views_repartidor/rInicio.php");

    ?>
</body>
</html>
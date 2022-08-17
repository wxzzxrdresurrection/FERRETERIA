<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizndo</title>
</head>
<body>
    <div class="container">
        <?php
        use MyApp\query\ejecutar;
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");
        extract($_POST);

        $actualizar=new ejecutar();
        $qry="update entrega_domicilio set STATUS='En Camino' where venta='$id_vent';";
        $actualizar->ejecutar($qry);
        echo "<div class='alert alert-success'>";
         echo "<h2 align='center'>VENTA ACTIVADA<h2>";
         echo "</div>";     
        header("refresh:2; ../views_repartidor/rInicio.php");

        ?>

    </div>
</body>
</html>
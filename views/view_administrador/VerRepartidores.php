<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 align="center">Repartidores</h1>
        <?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT login.ID_LOGIN as Login , login.CORREO as CORREO,repartidores.NOMBRE AS NOMBRE,repartidores.APELLIDOS AS APELLIDOS, repartidores.TELEFONO as TELEFONO, repartidores.NUM_LICENCIA, LICENCIA,repartidores.  FROM login JOIN repartidores ON login.ID_LOGIN=repartidores.LOGIN";
        $tabla =$query ->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th><th>Apellidos</th>
        <th>Correo</th><th>Telefono</th><th>Placas</th><th>Licencia</th>
        <th>Edicion</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->NOMBRE </td>";
            echo "<td> $registro->APELLIDOS </td>";
            echo "<td> $registro->CORREO </td>";
            echo "<td> $registro->TELEFONO </td>";
            echo "<td> $registro->PLACAS </td>";
            echo "<td> $registro->NUM_LICENCIA </td>";
            echo "<td><a href='ActualizarRepartidores.php?id=$registro->ID_REPARTIDOR'>EDITAR</a></td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";
        ?>
        <a href="AltaRepartidores.php" class="button">Dar de alta</a>
    </div>
</body>
</html>
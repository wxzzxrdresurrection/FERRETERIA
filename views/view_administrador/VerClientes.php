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
        <h1 align="center">Clientes</h1>
        <?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT * from CLIENTES";
        $tabla =$query ->seleccionar($cadena);

        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th>
        <th>Direccion</th><th>CP</th><th>Correo</th><th>Telefono</th>
        <th>Edicion</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->NOMBRE </td>";
            echo "<td> $registro->AP_PATERNO </td>";
            echo "<td> $registro->AP_MATERNO </td>";
            echo "<td> $registro->DIRECCION </td>";
            echo "<td> $registro->CP</td>";
            echo "<td> $registro->CORREO </td>";
            echo "<td> $registro->TELEFONO </td>";
            echo "<td><a href='ActualizarCliente.php?id=$registro->NO_CLIENTE'> EDITAR</a></td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";
        ?>
    </div>
</body>
</html>
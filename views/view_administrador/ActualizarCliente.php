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
        $id=$_GET["id"];
        $cadena="SELECT * from CLIENTES where NO_CLIENTE='$id'";
        $tabla =$query ->seleccionar($cadena);

        echo "
        <form class='container-table' action='../scripts/ActualizarCliente.php' method='post'>
        <table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th></th>
        <th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th>
        <th>Direccion</th><th>CP</th><th>Correo</th><th>Telefono</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> <input type='hidden' value='$registro->NO_CLIENTE' name='id'></td>";
            echo "<td> <input type='text' value='$registro->NOMBRE' name='nombre'></td>";
            echo "<td> <input type='text' value='$registro->AP_PATERNO' name='Apaterno'> </td>";
            echo "<td> <input type='text' value='$registro->AP_MATERNO' name='Amaterno'> </td>";
            echo "<td> <input type='text' value='$registro->DIRECCION' name='direccion'> </td>";
            echo "<td> <input type='text' value='$registro->CP' name='cp'> </td>";
            echo "<td> <input type='text' value='$registro->CORREO' name='correo'> </td>";
            echo "<td> <input type='text' value='$registro->TELEFONO' name='telefono'> </td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>
        <input type='submit' value='Actualizar'>
    </form>";
        ?>
    </div>
</body>
</html>
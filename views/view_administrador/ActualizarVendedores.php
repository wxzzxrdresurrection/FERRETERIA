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
        <h1 align="center">Vendedores</h1>
        <?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $id=$_GET["id"];
        $cadena="SELECT * from vendedores where ID_VENDEDOR='$id'";
        $tabla =$query ->seleccionar($cadena);

        echo "
        <form class='container-table' action='../scripts/ActualizarVendedor.php' method='post'>
        <table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th></th>
        <th>Nombre</th><th>Apellidos</th>
        <th>Correo</th><th>Telefono</th><th>Sexo</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> <input type='hidden' value='$registro->ID_VENDEDOR' name='id'></td>";
            echo "<td> <input type='text' value='$registro->NOMBRE' name='nombre'></td>";
            echo "<td> <input type='text' value='$registro->APELLIDOS' name='apellidos'> </td>";
            echo "<td> <input type='text' value='$registro->CORREO' name='correo'> </td>";
            echo "<td> <input type='text' value='$registro->TELEFONO' name='telefono'> </td>";
            echo "<td> <input type='text' value='$registro->SEXO' name='sexo'></td>";
             
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
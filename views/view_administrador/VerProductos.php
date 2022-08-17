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
        <h1 align="center">Productos</h1>
        <?php
        use MyApp\query\select;
        require_once("../../vendor/autoload.php");

        $query=new Select();
        $cadena="SELECT productos.CODIGO, categorias.NOMBRE as CATEGORIA, productos.NOMBRE, productos.DESCRIPCION, productos.CANTIDAD_REAL,productos.CANTIDAD_IDEAL,productos.PRECIO_VENTA,productos.PRECIO_COMPRA, 
        productos.MEDIDA FROM productos join categorias on categorias.ID_CATEGORIA=productos.CATEGORIA;";
        $tabla =$query ->seleccionar($cadena);

       echo "<a href='AltaProducto.php'>Dar de Alta</a>";


        echo "<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>Categoria</th><th>Nombre</th><th>Descripcion</th>
        <th>Cantidad Real</th><th>Cantidad Ideal</th><th>Precio Venta</th><th>Precio Compra</th>
        <th>Medida</th>
        <th>Edicion</th>
        </tr>
        </thead>
        </tbody>";

        foreach($tabla as $registro)
        {
            echo "<tr>";
            echo "<td> $registro->CATEGORIA </td>";
            echo "<td> $registro->NOMBRE </td>";
            echo "<td> $registro->DESCRIPCION </td>";
            echo "<td> $registro->CANTIDAD_REAL </td>";
            echo "<td> $registro->CANTIDAD_IDEAL </td>";
            echo "<td> $registro->PRECIO_VENTA </td>";
            echo "<td> $registro->PRECIO_COMPRA </td>";
            echo "<td> $registro->MEDIDA </td>";
            echo "<td><a href='ActualizarRepartidores.php?id=$registro->CODIGO'>EDITAR</a></td>";
            echo "</tr>";
        }

        echo "</tbody>
        </table>";
        
        ?>
    </div>
</body>
</html>
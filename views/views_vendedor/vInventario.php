<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/vInventario.css">
    <title>Inventario - Repartidor</title>
</head>
<body>
  <?php
  use MyApp\query\select;
  require_once("../../vendor/autoload.php");
  session_start();
  ?>
    <div class="row">
        <!--Barra-->
        <nav class="col-2">
            <div class="container d-flex flex-column">

              <!--Repartidores-->
              <div class="text-center titulo">Vendedores</div>
              <div class="text-center">
                <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
              </div>

              <hr class="text-white">

              <!--Botones paginas-->
              <ul class="nav nav-pills row text-center justify-content-center">
                <li class="nav-item">
                  <a class="nav-link    items" aria-current="page" href="../../views/views_vendedor/vVentas.html">Ventas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active    items" href="../../views/views_vendedor/vInventario.html">Inventario</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link    items" href="../../views/views_vendedor/vHistorial.php">Historial de Ventas</a>
                </li>
              </ul>

              <hr class="text-white">

              <!--Configuracion-->
              <div class="text-center">
                <div class="dropdown dropdown-center">
                  <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
                
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li style="margin-bottom: 10px;"><a class="dropdown-item" href="../../views/views_vendedor/vAjustes.html">Ajustes</a></li>
                    <li><hr class="sep_hr"></li>
                    <li style="margin-top: 10px;"><a class="dropdown-item" href="../scripts/cerrarSesion.php">Cerrar Sesion</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </nav>

        <!--Info Pedidos-->
        <main class="col-10 border">
            <div class="container   contenedor">
              <div class="titulo_contenedor"><b>Inventario</b></div>

              <form action="" method="POST">
                <div class="filtros_contenedor"><b>Filtros de Busqueda</b></div>

                <!--Selects-->
                <!--Fila 1-->
                <div class="row mb-2">
                  <!--Buscar por Nombre-->
                  <div class="col">
                    <label class="form-label" for="b_nombre"><b>Buscar por Nombre</b></label>
                    <div class="row">
                      <div class="col-5">
                        <input class="form-control form-control-sm" type="text" id="b_nombre" name="buscar" placeholder="Ingresa el nombre del producto...">
                      </div>

                      <!--Boton-->
                      <div class="col-2 row">
                        <button class="btn btn-sm   boton_buscar" type="submit">
                          Buscar Producto
                        </button>
                      </div>  
                  </div>
                  </div>
                  </form>

                  
                </div>

                <hr>

                <!--Fila 2-->
                <div class="row">
                  <!--Ordenar-->
                  <div class="col-5">
                  <form action="" method="POST">
                    <select name="filtros_de_busqueda" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                      <option value="1">Todos los productos</option>
                      <option value="2">Ordenar de la A a la Z</option>
                      <option value="3">Ordenar de la Z a la A</option>
                      <option value="4">De Mayor a Menor Cantidad</option>
                      <option value="5">De Menor a Mayor Cantidad</option>
                    </select>
                  </div>

                  <!--Categorias-->
                  <div class="col-5">
                    <select name="categorias" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                      <option value="1">Todas las categorias</option>
                      <option value="Herramientas">Herramientas</option>
                      <option value="union">Union</option>
                      <option value="medicion">Medicion</option>
                      <option value="construccion">Construccion</option>
                      <option value="tuberia">Tuberias</option>
                      <option value="alumbrado">Alumbrado</option>
                      <option value="proteccion">Proteccion</option>
                      <option value="limpieza">Limpieza</option>
                      <option value="pintura">Pintura</option>
                      <option value="componentes_diversos">Componentes Diversos</option>
                    </select>
                  </div>

                  <!--Boton-->
                  <div class="col-2 row">
                    <button class="btn btn-sm   boton_buscar" type="submit" name="boton">
                      Filtrar Resultados
                    </button>
                  </div>
                </div>
              </form>

              <hr>

              <!--Tabla Inventario-->
              <table class="table table-bordered">
                <thead>
                  <tr class="table-dark">
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Canitidad</th>
                    <th scope="col">Faltantes</th>
                    <th scope="col">Precio</th>
                  </tr>
                  <?php 
                    
                     if(isset($_POST['buscar']))
                     {
                         extract($_POST);
                         $barra = new select();
                         $consulta = "SELECT PRODUCTOS.CODIGO, PRODUCTOS.NOMBRE AS PRODUCTO, CATEGORIAS.NOMBRE AS CATEGORIA, 
                         PRODUCTOS.PRECIO_VENTA AS PRECIO, PRODUCTOS.FOTO AS FOTO, PRODUCTOS.DESCRIPCION AS DESCRIPCION,
                         PRODUCTOS.CANTIDAD_REAL AS CANTIDAD,(PRODUCTOS.CANTIDAD_IDEAL-PRODUCTOS.CANTIDAD_REAL) AS FALTANTES FROM PRODUCTOS
                         INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CATEGORIA = PRODUCTOS.CATEGORIA WHERE PRODUCTOS.NOMBRE LIKE '%$buscar%'";
                         $resultado = $barra->seleccionar($consulta);
                         ?>
                         <?php 
                         foreach ($resultado as $tabla ) {
                          ?>
                       <tr style="vertical-align: middle;">
                         <td class="text-center" style="padding: 0%;">
                           <img src="<?php echo $tabla->FOTO?>" alt="" style="max-width: 60px;">
                         </td>
                         <td><?php echo $tabla->PRODUCTO?></td>
                         <td><?php echo $tabla->CATEGORIA?></td>
                         <td class="text-center"><?php echo $tabla->CANTIDAD?></td>
                         <td class="text-center"><?php echo $tabla->FALTANTES?></td>
                         <td class="text-center">$<?php echo $tabla->PRECIO?>.00</td>
                       </tr>

                         <?php
                         }
                     }
                     else {
                     
                     $consulta=new select();
                    $cadena="call PRODUCTOS();";
                    if ($_POST) 
                 {
                    $filtros_de_busqueda ="";
                    extract($_POST);     
                    if (isset($categorias)||$categorias=!NULL) 
                    {
                        switch ($filtros_de_busqueda) 
                        {
                            case 1:
                                $cadena= "CALL PPC('$categorias');";
                                break;
                            
                            case 2:
                                $cadena= "CALL ORDEN_PPC_AZ('$categorias');";
                                break;
                            case 3:
                                $cadena= "CALL ORDEN_PPC_ZA('$categorias');";
                                break;
                            case 4:
                                $cadena= "CALL PPC_PRECIO_MAYOR('$categorias');";
                                break;
                            case 5:
                                $cadena= "CALL PPC_PRECIO_MENOR('$categorias');";
                                break; 
                            }
                        }
                    else
                    {
                        switch ($filtros_de_busqueda) 
                            {   
                        case 1:
                            $cadena= "CALL PRODUCTOS();";
                            break;
                        case 2:
                            $cadena= "CALL PRODUCTOS_AZ();";
                            break;
                        case 3:
                            $cadena= "CALL PRODUCTOS_ZA();";
                            break;
                        case 4:
                            $cadena= "CALL PRODUCTOS_PRECIO_MAYOR();";
                            break;
                        case 5:
                            $cadena= "CALL PRODUCTOS_PRECIO_MENOR();";
                            break; 
                        }
                    }
                 }
                
                    $datos=$consulta->seleccionar($cadena);
                    foreach ($datos as $tabla ) {
                     ?>
                  <tr style="vertical-align: middle;">
                    <td class="text-center" style="padding: 0%;">
                      <img src="<?php echo $tabla->FOTO?>" alt="" style="max-width: 60px;">
                    </td>
                    <td><?php echo $tabla->PRODUCTO?></td>
                    <td><?php echo $tabla->CATEGORIA?></td>
                    <td class="text-center"><?php echo $tabla->CANTIDAD?></td>
                    <td class="text-center"><?php echo $tabla->FALTANTES?></td>
                    <td class="text-center">$<?php echo $tabla->PRECIO?>.00</td>
                  </tr>
                  <?php
                    }
                  }
                  ?>
                </thead>
              </table>
            </div>
        </main>
    </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
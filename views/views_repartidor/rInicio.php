<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/rInicio.css">
    <title>Inicio - Repartidor</title>
</head>
<body>
  <?php
  use MyApp\query\select;
  require_once("../../vendor/autoload.php");
  session_start();
  $repartidor=$_SESSION['ID'];
  $datos = new select();
    $consulta = "SELECT * FROM REPARTIDORES WHERE REPARTIDORES.LOGIN = $repartidor";
    $vendedor = $datos->seleccionar($consulta);
    foreach($vendedor as $infovendedor)
    {
       $nombre_re = $infovendedor->NOMBRE;
       $apellidos_re = $infovendedor->APELLIDOS; 
    }
  ?>
    <div class="row">
        <!--Barra-->
        <nav class="col-2">
            <div class="container d-flex flex-column">

              <!--Repartidores-->
              <div class="text-center titulo">Repartidores</div>
              <div class="text-center">
                <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
              </div>

              <hr class="text-white">

              <!--Botones paginas-->
              <ul class="nav nav-pills row text-center justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active    items" aria-current="page" href="../../views/views_repartidor/rInicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link    items" href="../../views/views_repartidor/rPedidos.php">Pedidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link    items" href="../../views/views_repartidor/rHistorial.php">Historial</a>
                </li>
              </ul>

              <hr class="text-white">

              <!--Configuracion-->
              <div class="text-center">
                <div class="dropdown dropdown-center">
                  <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
                
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li style="margin-bottom: 10px;"><a class="dropdown-item" href="../views_repartidor/rAjustes.php">Ajustes</a></li>
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
              <!--Mensaje Bienvenida-->
              <div class="row   mensaje_bienvendia">
                <div class="col   contenedor_imagen_bv">
                  <img src="../../svg/facebook.svg" alt="" class="imagen_bienvenida">
                </div>
                <div class="col" style="margin-top: 5px;">
                  <b class="bv_mensaje">Bienvenido de Vuelta</b>
                  <p class="bv_nombre"> <?php echo $nombre_re ." ".$apellidos_re  ?></p>
                </div>
              </div>
              <?php
              $consulta = new select();
                            $qry="call PEDIDOS_REPARTIDOR_STATUS('En camino', 601);";
                            $datos=$consulta->seleccionar($qry);
                                # code...
                            foreach ($datos as $tabla) 
                            { 
                                $nombre=$tabla->NOMBRE;
                                $dire=$tabla->DIRECCION;
                                $total=$tabla->TOTAL;
                                $tel=$tabla->TELEFONO;
                                $mail=$tabla->CORREO;
                                $pic=$tabla->FOTO;
                                $id_cliente=$tabla->NO_CLIENTE;
                                $no_venta=$tabla->VENTA;
                                $fecha=$tabla->FECHA;
                ?>
              <!--Pedido Activo-->
              <div class="border border-2 border-secondary info_pedido">
                <div class="titulo_info"><b>Pedido Activo</b></div>

                <hr style="margin-top: 0%; border-width: 2px;">

                <div class="mb-3  info_pedido_mensaje"><b>Informacion del Pedido</b></div>

                <!--Inputs-->
                <div>
                  <!--Numero Pedido-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Pedido N.° </b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="#<?php echo $no_venta ?>" disabled>
                  </div>
                  <!--Cliente-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Cliente:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="<?php echo $nombre ?>" disabled>
                  </div>
                  <!--Direccion-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Direccion:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="<?php echo $dire ?>" disabled>
                  </div>
                  <!--Telefono-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Telefono:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="<?php echo $tel ?>" disabled>
                  </div>
                  <!--Email-->
                  <div class="input-group mb-2">
                    <span class="input-group-text   s_spans" id="basic-addon3"><b>Correo Electronico:</b></span>
                    <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="<?php echo $mail ?>" disabled>
                  </div>

                  <hr style="border-width: 2px; width: 80%;">

                  <div class="text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#pedidos_proximos_info<?php echo $no_venta ?>">Mas Informacion</a>
                    <form action="../scripts/ActualizarPedidoEntregado.php" method="POST">
                                        <div class="modal-footer">
                                            <a href="../scripts/ActualizarPedidoEntregado.php">
                                        <button type="submit" class="btn boton_activar" name="id_vent" value="<?php echo $no_venta  ?>" >ENTREGADO <?php echo $no_venta ?></button>
                            </a> <!-- SE VA A CONFIGURAR-->
                                        </form>
                       <!-- ESCRIPT PARA ACTUALIZAR DE EN CAMINO A ENTREGADO-->        
                    <!--Modal Info Pedido-->
                    <div class="modal modal-lg fade" id="pedidos_proximos_info<?php echo $no_venta ?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                          <!--Header-->
                          <div class="modal-header header_modal">
                          <h5 class="modal-title" id="exampleModalLabel">Pedido N.° #<?php echo $no_venta ?></h5>
                          <button type="reset" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <!--Cuerpo-->
                          <div class="modal-body">
                              <!--Productos-->
                              <!--Cuadros Info Productos-->
                                  <!--Info Producto Carrito-->
                                  <?php
                                                        $consulta = new select();
                                                        $qry="call DETALLE_PEDIDOS(601,".$no_venta.");";
                                                        $datos=$consulta->seleccionar($qry);
                                                        
                                                        
                                                        foreach ($datos as $tabla) 
                                                        {
                                                            $producto=$tabla->PRODUCTO;
                                                            $pic=$tabla->FOTO;
                                                            $medida=$tabla->MEDIDA;
                                                            $cantidad=$tabla->CANTIDAD;
                                                            $precio=$tabla->PRECIO_VENTA;
                                                            $subtotal=$tabla->TOTAL;
                                                            
                                                ?>
                                            <div class="row border border-secondary     productos">
                                                <!--Imagen-->
                                                <div class="col-1">
                                                    <img src="<?php echo $pic ?>" alt="" class="imagen_productos">
                                                </div>
                                                <!--Info Producto Carrito-->
                                                
                                                <div class="col text-start  info_producto_carrito">
                                                    <div class="row justify-content-between">
                                                        <div class="col-12   nombre_producto">
                                                            <b><?php echo $producto ?></b>
                                                        </div>
                                                    </div>
                        
                                                    <div class="row justify-content-between     barra_baja">
                                                        <div class="col-4">
                                                            <div class="input-group">
                                                                <span class="input-group-text   barra_cantidad">Cantidad</span>
                                                                <input type="number" class="form-control    barra_cantidad" disabled="disabled" aria-label="Username" value="<?php echo $cantidad ?>">
                                                                <span class="input-group-text   barra_cantidad"><?php echo $medida ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-3 text-end  precio_total">
                                                            <b>Precio: $<?php echo $precio ?>.00</b>
                                                            <b>Subtotal:$<?php echo $subtotal ?>.00</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <?php
                                                        } 
                                            ?> 
                          <!--Footer-->
               
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
                                                      </div>
            <?php }
            ?>  
        </main>
    </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
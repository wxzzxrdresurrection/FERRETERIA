<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/rHistorial.css">
    <title>Pedidos - Repartidores</title>
</head>
<body>
    <?php
    use MyApp\query\select;
    require_once ("../../vendor/autoload.php");
    session_start();
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
                        <a class="nav-link    items" aria-current="page" href="../../views/views_repartidor/rInicio.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link    items" href="../../views/views_repartidor/rPedidos.php">Pedidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active    items" href="../../views/views_repartidor/rHistorial.php">Historial</a>
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
            <div class="container">
                <!--Mensaje-->
                <div class="row text-center">
                    <div class="col   barras_mensaje"><hr></div>

                    <div class="col-3   mensaje_arriba">
                        <p><b>Pedidos Entregados</b></p>
                    </div>
                    <div class="col   barras_mensaje"><hr></div>
                </div>
                
                <div class="cuadros">
                <?php
                            $repartidor=$_SESSION['ID'];
                            $consulta = new select();
                            $qry="call PEDIDOS_REPARTIDOR_STATUS('Entregado', 601);";
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
                    <!--Pedidos-Proximos-->
                    <div class="row justify-content-evenly     cuadros_pedidos">
                        <!--Pedidos-->
                        <div class="col-4 border border-secondary rounded-2 text-center  info_pedidos">
                            <div class="num_pedido"><b>Pedido N.° # <?php echo $no_venta ?></b></div>
                            <div class="persona_pedido"><p><?php echo $nombre ?></p></div>
                            <div class=""><b>Se Entrego : </b><?php echo $fecha?></div>
                            <hr>
                            <div class="row contenedor_boton">
                                <button class="btn boton-informacion" type="button" data-bs-toggle="modal" data-bs-target="#pedidos_proximos_info<?php echo $no_venta?>">
                                    <b>Mas Informacion</b>
                                </button>
                                <!--Modal Info Pedido-->
                                <div class="modal modal-lg fade" id="pedidos_proximos_info<?php echo $no_venta?>" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!--Header-->
                                        <div class="modal-header header_modal">
                                        <h5 class="modal-title" id="exampleModalLabel">Pedido N.° #<?php echo $no_venta ?></h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <!--Cuerpo-->
                                        <div class="modal-body">

                                            <!--Info Cliente-->
                                            <div class="text-start info_cliente_modal">
                                                <div class="info_cliente_modal_lab"><b>Cliente: </b> <?php echo $nombre ?></div>
                                                <div class="info_cliente_modal_lab"><b>Direccion: </b> <?php echo $dire ?></div>
                                                <div class="info_cliente_modal_lab"><b>Telefono: </b> <?php echo $tel ?></div>
                                                <div class="info_cliente_modal_lab"><b>Correo Electronico: </b> <?php echo $mail ?></div>
                                            </div>
                                            <!--Productos-->
                                            <!--Cuadros Info Productos-->
                                            <?php
                                                        $consulta = new select();
                                                        $qry="call DETALLE_PEDIDOS(601  ,".$no_venta.");";
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
                                            <div class="modal-footer">
                                            <button type="button" class="btn boton_cancelar disabled"    data-bs-dismiss="modal">ENTREGADO</button>
                                            </div>
                                    </div>
                                    </div>               
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <?php }
                    
                    ?> 
            </div> 
        </main>
    </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
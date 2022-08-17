<?php
session_start();
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/pared-r.ico"> 
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/header.css">
    <link rel="stylesheet" href="../../css/mi_css/carrito.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Carrito - Ferreteria y Materiales Express</title>
</head>
<body>
<?php
if(isset($_SESSION['usuario']))
{
    switch ($_SESSION['SESION']) 
    {
        case 300:
            header("Location: views/views_administrador/inicio.php");
            break;   
        case 301: 
            header("Location: views/views_vendedor/vInicio.html");
            break;
        case 302:
                header("Location: ../views_repartidor/rInicio.php");
            break;
    }
}
else
{
    header("Location: ../../index.php");
}
?>
    <!--Header-->
    <header class="row justify-content-center">
        <!--Parte Arriba Header-->
        <div class="row justify-content-center border-bottom border-1 border-dark border-opacity-25     barra_arriba">
            <!--Logo Express-->
            <div class="col-2 text-end">
                <object data="../../svg/logo-r.svg" class="text-end border border-dark   logo"></object>
            </div>
            
            <!--Barra de Busqueda-->
            <div class="col-6 text-center">
                <form action="productos.php" method="POST">
                <div class="input-group mb-3 border border-1 border-dark rounded rounded-3  buscar">
                    <!--Barra-->
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar productos" name="buscar">
                    <!--Boton Buscar-->
                    <button class="btn border-0 border-start  b-buscar" type="submit" id="button-addon1">Buscar</button>
                </div>
                </form>
            </div>

            <!--Login-->
            <div class="col-2">
                <?php
                    if(isset($_SESSION['usuario']))
                    {
                        echo "<div class='col-2' texto-boton-login>
                        <a href='cuenta.php' class='link_cuenta' style='color: white'>
                        <button class='btn  boton-login' type='button'>
                            <img src='../../svg/perfil-b.svg' alt='' class='icono_boton'>       
                            <p class='texto-boton-login-no-iniciado text-start'><b>Bienvenido ".$_SESSION["usuario"]."</b>
                            </a></p>
                        </button> </div>";
                    }
                    else
                    {
                        echo "<button class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
                        <img src='../../svg/perfil-b.svg' alt='' class='icono_boton'>
                        <p class='texto-boton-login-no-iniciado text-start'><b>Iniciar Sesion o Registrarse</b></p>
                    </button>";
                    }
                ?>                
      
                <!--Modal Iniciar Sesion-->
                <div class="modal modal-sm" id="iniciar-sesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center border-bottom border-dark     m_h_i">
                            <h5 class="modal-title   t_modal_i" id="exampleModalLabel">Iniciar Sesion</h5>
                        </div>

                        <div class="modal-body  m_c_i">
                            <div class="label">
                                <form action="">
                                <label for="correo" class="form-label"><b>Correo Electronico</b></label>
                                <input type="email" id="correo" class="form-control     in_m_i" name="usuario">
                            </div>

                            <div class="label">
                                <label for="contraseña" class="form-label"><b>Contraseña</b></label>
                                <input type="password" id="contraseña" class="form-control  in_m_i" name="contraseña">
                                <a href="" class="link_modal_i">¿Olvidaste tu contraseña?</a>
                            </div>

                            <div class="text-center     label">
                                <button class="btn  boton_i_s">Iniciar Sesion</button>
                            </div>

                            <div class="row text-center     label p_c_c">
                                <b>¿Aún no tienes cuenta?</b>

                                <!--Link Crear Cuenta-->
                                <a href="registrarse.php" class="link_modal_i">Registrate aqui</a>

                            </div>
                        </div>
                    </div>
                    </div> 
                </div>
            </div>
        </div>

        <!--Parte Abajo Header-->
        <div class="border-bottom border-dark">
            <div class="row justify-content-center  barra">
                <!--Inicio-Productos-Servicios-->
                <div class="col-8">
                    <ul class="nav justify-content-center">
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" type="button" href="../../index.php">
                                <div class="organizar">
                                    <img src="../../svg/casa-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Inicio</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="productos.php">
                                <div class="organizar">
                                    <img src="../../svg/caja-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Productos</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="servicios.php">
                                <div class="organizar">
                                    <img src="../../svg/servicios-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Servicios</b></p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="carrito.php">
                                <div class="organizar">
                                    <img src="../../svg/carrito-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Carrito</b></p>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="pedidos.php">
                                <div class="organizar">
                                    <img src="../../svg/bolsa-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Mis Pedidos</b></p>
                                </div>
                            </a>
                        </li>  
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!--Carrito de Compras-->
    <div class="container">
        <!--Mensaje-->
        <form action='../scripts/compraCarrito.php' method="POST">
        <div class="row text-center">
            <div class="col   barras_mensaje"><hr></div>

            <div class="col-3   mensaje_arriba">
                <p><b>Carrito de Compras</b></p>
            </div>

            <div class="col   barras_mensaje"><hr></div>
        </div>

            <div class="row border border-secondary contenedor_carrito">
                <!--Detalles del Pedido-->
                <div class="col-8">
                    <div class="border border-secondary     fondo_info_detalles">
                        <div class="text-center border-bottom border-secondary  cuadro_header">
                            <b>Detalles del Pedido</b>
                        </div>
                        <?php
                        if(isset($_REQUEST['vaciar']))
                        {
                            unset($_SESSION["carrito"]);
                        }
                        if(isset($_REQUEST["item"]))
                        {
                            $producto = $_REQUEST["item"];
                            unset($_SESSION["carrito"][$producto]);
                            
                        }   
                        if(isset($_SESSION['carrito']))
                        {
                            foreach($_SESSION['carrito'] as $indice)
                            {
                            
                            echo"<!--Productos-->
                            <div class='row border border-secondary     productos'>
                                <!--Imagen-->
                                <div class='col-1'> 
                           
                                    <img src=' ".$indice['foto']."' alt='' class='imagen_productos'>
                                </div>
        
                                <!--Info Producto Carrito-->
                                <div class='col  info_producto_carrito'>
                                    <div class='row justify-content-between'>
                                        <div class='col-9   nombre_producto'>
                                       
                                            <b>".$indice["nombre"]."</b>
                                        </div>";
                        ?>
                        <?php
                        $total += $indice["cantidad"] * $indice["precio"];
                        foreach($indice as $key => $value)
                        ?>     
                        <div class='col-3 text-end  precio_total'>
                            <b>  CANTIDAD:
                        <?php
                        {
                        ?>  
                            <?php echo $indice['cantidad']?><br>PRECIO: $
                            <?php echo $indice['precio']?></b>
                        </div>
                            <?php
                        }
                        
                         ?>
                    </div>
                                <div class="row     barra_baja">
                                    <div class="col-4">
                                    </div>
    
                                    <div class="col row">
                                        <div class="text-center col-5   d_p">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#info_producto<?php echo $indice['id'] ?>">Informacion del producto</a>
                                        </div>
    
                                        <div class="col-4   d_p">
                                        
                                        <a href="carrito.php?item=<?php echo $indice['id'] ?>">Eliminar Producto</a>
                                        </div>
                                          
                                        <!--Modal Informacion de Productos-->
                                        <div class="modal modal-sm fade" id="info_producto<?php echo $indice['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!--Barra Arriba-->
                                                    <div class="modal-header    header_modal_productos">
                                                        <h5 class="modal-title  titulo_modal" id="exampleModalLabel">Informacion del Producto</h5>
                                                    </div>
    
                                                    <!--Cuerpo Modal-->
                                                    <div class="modal-body">
                                                        <!--Imagen Producto-->
                                                        <div class="text-center">
                                                            <img src="<?php echo $indice['foto']?>" alt="" class="imagen_producto_modal">
                                                        </div>
    
                                                        <!--Categoria del Producto-->
                                                        <div class="categoria_producto_modal">
                                                            <b><?php echo $indice['cat'] ?></b>
                                                        </div>
    
                                                        <!--Nombre del Producto-->
                                                        <div class="nombre_producto_modal">
                                                            <b><?php echo $indice['nombre'] ?></b>
                                                        </div>
    
                                                        <!--Precio del Producto-->
                                                        <div class="precio_producto_modal">
                                                            Precio: $<?php echo $indice['precio'] ?>
                                                        </div>
    
                                                        <hr>
    
                                                        <!--Descripcion del Producto-->
                                                        <div class="descripcion_producto_modal">
                                                            Descripcion: <?php echo $indice['descr'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <?php
                        
                        }
                        ?>
                        <a href="carrito.php?vaciar=true" class="offset-10 col-3">Vaciar Carrito</a>

                        <?php
                        }
                        else
                        {
                            echo "<div class='row text-center'>

                        <div class='col   barras_mensaje'><hr></div>
                        </div>

                        <div class='text-center'>
                        <div><img src='../../svg/carrito-n.svg' alt='' class='lupa'></div>
                        <div class='mensaje_no_encontrado'><b>No hay productos en su carrito</b></div>
                        </div>";
                        }
                        
                        ?>
                         </form>
                    </div>
                </div>
    
                <!--Detalles de Compra-->
                <div class="col-4">
                    <!--Metodo de Entrega-->
                    <div class="border border-secondary     cuadros_detalles fondo_compra">
                        <div class="text-center border-bottom border-secondary  cuadro_header">
                            <b>Metodo de Entrega</b>
                        </div>

                        <form action='../scripts/compraCarrito.php' method="POST">
                        <div class="row">
                                
                        <?php
                        if($total<500)
                        {
                            echo "<div class='col-12 border-start'>
                            <div class='form-check  opciones_check_dos'>
                                <input class='form-check-input' type='radio' name='metodo_entrega' id='tienda' value='Mostrador' checked>
                                <label class='form-check-label' for=tienda'>
                                    Recoger en tienda
                                </label>
                            </div>
                        </div>
                       ";
                        }
                        else
                        {
                            ?>
                            <div class="col-6 border-start">
                                <div class="form-check  opciones_check_dos">
                                    <input class="form-check-input" type="radio" name="metodo_entrega" id="tienda" value="Mostrador" checked>
                                    <label class="form-check-labe" for="tienda">
                                        Recoger en tienda
                                    </label>
                                </div>
                            </div>
                        
                            <div class="col-6 border-end">
                                <div class="form-check  opciones_check">
                                    <input class="form-check-input" type="radio" name="metodo_entrega" id="domicilio" value="Domicilio">
                                    <label class="form-check-label" for="domicilio">
                                      Enviar a domicilio
                                    </label>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?> </div>
                    <!--Fecha de Entrega-->
                    <div class="border border-secondary     cuadros_detalles fondo_compra">
                        <div class="text-center border-bottom border-secondary  cuadro_header">
                            <b>Fecha de Entrega</b>
                        </div>
                            <?php
                            if($total<500)
                            {
                                $fechaentrega=null;
                            }
                            else
                            {
                                $fechahoy = date('Y-m-d');
                                $fechaentrega = strtotime('+3 day',strtotime($fechahoy));
                                $fechaentrega = date('Y-m-d',$fechaentrega);
                            }
                             ?>
                        <div class="">
                            <input class="col-12" style="text-align: center;" type="text" value="<?php echo $fechaentrega ?>" min="Fecha minima para seleccionar" max="Fecha minima para seleccionar" disabled>
                        </div>
                    </div>
    
                    <!--Resumen del Pedido -->
                    <div class="border border-secondary     cuadros_detalles fondo_compra">
                        <div class="text-center border-bottom border-secondary  cuadro_header">
                            <b>Resumen del Pedido</b>
                        </div>
    
                        <div class="row">
                            <div class="col-6   opciones_resumen">
                                <b>Precio Total del Pedido:</b>
                            </div>
                            <div class="col  opciones_resumen_dos">
                                <p><?php echo "$" . $total ?></p>
                            </div>
                        </div>
                    </div>
    
                    <!--Boton Proceder al Pago-->
                    <div class="row">
                        <div class="text-center row     row_boton">
                            <button class="btn  texto_boton_pago" type="submit" name="compra">
                                Proceder al Pago
                            </button>
                        </div>
                    </div>
                        
                </div>
            </div>
    </div>
    </div>
    <?php 
    if($total>=500 && $total<1000)
    {
        $_SESSION['repartidor']= 600;
    }
    else if($total>1000 && $total<2000)
    {
        $_SESSION['repartidor']= 601;
    }
    else if($total>2000)
    {
    $_SESSION['repartidor']= 602;
    }
$_SESSION['totalventa'] = $total;
    ?>
</form>
    <!--Footer-->
    <footer>
        <div class="row">
            <div class="col-2">
                <h5>Contacto</h5>
                <h6>Telefonos de Contacto</h6>
                <li class="lista_cont">8717922116</li>
                <li class="lista_cont">8717922117</li>
                <li class="lista_cont">8711930946</li>
            </div>

            <div class="col-4">
                <div>
                    <h5>Direccion</h5>
                    <h6>Calz. Agustín Espinoza, Satelite 5053, 27059 Torreón, Coah.</h6>
                </div>
            </div>

            <div class="col-3">
                <h5>Redes Sociales</h5>
                <a href="https://www.facebook.com/Ferretería-y-Materiales-Express-Torreón-1672126383002791/"><img src="../../svg/facebook.svg" alt="facebook" class="icono_facebook">
            </a>
            </div>
        </div>

        <div class="row     p_abajo">
            <div class="col-2">
                <h6>Correos de Contacto</h6>
                <li class="lista_cont">gerrymatrix@hotmail.com</li>
                <li class="lista_cont">tilinlover17@gmail.com</li>
            </div>
            <div class="col-4"></div>
            <div class="col-6 text-end">
                <img src="../../svg/utt.svg" alt="" class="f_express">
                <img src="../../svg/express-r.svg" alt="" class="f_express">
            </div>
        </div>
    </footer>
    
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
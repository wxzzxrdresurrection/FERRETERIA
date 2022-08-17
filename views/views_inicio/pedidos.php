<?php
use MyApp\query\select;
require_once("../../vendor/autoload.php");
session_start();
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
    <link rel="stylesheet" href="../../css/mi_css/pedidos.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Mis Pedidos - Ferreteria y Materiales Express</title>
</head>
<body>
    <?php
    if(isset($_SESSION['usuario']))
    {
        switch ($_SESSION['SESION']) 
        {
            case 300:
                header("Location: ../views_administrador/inicio.php");
                break;   
            case 301: 
                header("Location: ../views_vendedor/vInicio.php");
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
                <!--Boton Iniciar Sesion-->
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
                    echo " <button class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
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
                        <form action="">
                            <div class="label">
                                <label for="correo" class="form-label"><b>Correo Electronico</b></label>
                                <input type="email" id="correo" class="form-control     in_m_i">
                            </div>

                            <div class="label">
                                <label for="contraseña" class="form-label"><b>Contraseña</b></label>
                                <input type="password" id="contraseña" class="form-control  in_m_i">
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
                        </form>
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

    <!--Pedidos Activos-->
    <div class="container">
        <!--Mensaje-->
        <div class="row text-center">
            <div class="col   barras_mensaje"><hr></div>

            <div class="col-3   mensaje_arriba">
                <p><b>Pedidos Activos</b></p>
            </div>
                
            <div class="col   barras_mensaje"><hr></div>
        </div>
        <?php
         $consulta= new select();
         $query="call VENTAS('".$_SESSION['ID_CLIENTE']."', 'Pendiente');";
         $infopendientes=$consulta->seleccionar($query);
         $query="call VENTAS('".$_SESSION['ID_CLIENTE']."', 'En camino');";
         $infocamino=$consulta->seleccionar($query);
         if ($infopendientes!=NULL || $infocamino!=NULL)
         {
            foreach ($infopendientes as $datos)
            {
                echo "
    <div class='border border-secondary  contenedor_pedidos_entregados'>
       
        <div class='row border border-dark  producto_carrito'>
            <div class='col-1'>
                <img src='".$datos->FOTO."' alt='' class='imagen_producto'>
            </div>

            <div class='col-10  info_producto'>
                <div class='n_p'>
                    <p><b>Pedido N.° ".$datos->FOLIO."</b></p>
                </div>

                <div class='row'>
                    
                    
                    <div class='col-2'>
                        <label for='total' class='l_p'><b>Total</b></label>
                        <input type='text' class='form-control  i_p' id='total' placeholder= '$".$datos->TOTAL."' disabled='disabled'>
                    </div>
                    <div class='col-3'>
                        <label for='f_p' class='l_p'><b>Fecha de Pedido</b></label>
                        <input type='text' class='form-control  i_p' id='f_p' placeholder='".$datos->FECHA_ORDEN."' disabled='disabled'>
                    </div>
                    <div class='col-5'>
                        <label for='d_e' class='l_p'><b>Direccion de Entrega</b></label>
                        <input type='text' class='form-control  i_p' id='d_e' placeholder='".$datos->DOMICILIO."' disabled='disabled'>
                    </div>
                    <div class='col-2 text-end   d_p'>
                        <a href='' data-bs-toggle='modal' data-bs-target='#modal_detalles_pedido".$datos->FOLIO."'>Detalles del Pedido</a>
                    </div>
                   
                      <div class='modal modal-lg fade' id='modal_detalles_pedido".$datos->FOLIO."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                          <div class='modal-content'>
                            <div class='modal-header    header_detalles'>
                              <h5 class='modal-title' id='exampleModalLabel'>Detalles del Pedido</h5>
                              <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>   
                            ";
                            $consulta= new select();
                            $query="call VENTA_DETALLE('".$_SESSION['ID_CLIENTE']."', 'Pendiente',".$datos->FOLIO.");";
                            $info=$consulta->seleccionar($query);
                            $consulta= new select();
                            foreach ($info as $datos) {
                            echo "
                            <div class='modal-body'>        
                                <div class='row border border-secondary     productos'>
                               
                                    <div class='col-1'>
                                        <img src='".$datos->FOTO."' alt='' class='imagen_productos'>
                                    </div>
                                    <div class='col  info_producto_carrito'>
                                        <div class='row justify-content-between'>
                                            <div class='col-9   nombre_producto'>
                                                <b>".$datos->PRODUCTO."</b>
                                            </div>
                                            <div class='col-3 text-end  precio_total'>
                                                <b>Precio: $".$datos->PRECIO.".00</b>
                                            </div>
                                        </div>
            
                                        <div class='row     barra_baja'>
                                            <div class='col-4'>
                                                <div class='input-group'>
                                                    <span class='input-group-text   barra_cantidad'>Cantidad</span>
                                                    <input type='number' class='form-control    barra_cantidad' disabled='disabled' aria-label='Username' placeholder=".$datos->CANTIDAD.">
                                                    <span class='input-group-text   barra_cantidad'>kg</span>
                                                </div>
                                            </div>
            
                                            <div class='col text-end  precio_total'>
                                                <b>Precio Total: $".$datos->TOTAL.".00</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            }
                            echo "
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
                ";
            }  
            foreach ($infocamino as $datos)
            {
                echo "
    <div class='border border-secondary  contenedor_pedidos_entregados'>
       
        <div class='row border border-dark  producto_carrito'>
            <div class='col-1'>
                <img src='".$datos->FOTO."' alt='' class='imagen_producto'>
            </div>

            <div class='col-10  info_producto'>
                <div class='n_p'>
                    <p><b>Pedido N.° ".$datos->FOLIO."</b></p>
                </div>

                <div class='row'>
                    
                    
                    <div class='col-2'>
                        <label for='total' class='l_p'><b>Total</b></label>
                        <input type='text' class='form-control  i_p' id='total' placeholder= '$".$datos->TOTAL."' disabled='disabled'>
                    </div>
                    <div class='col-3'>
                        <label for='f_p' class='l_p'><b>Fecha de Pedido</b></label>
                        <input type='text' class='form-control  i_p' id='f_p' placeholder='".$datos->FECHA_ORDEN."' disabled='disabled'>
                    </div>
                    <div class='col-5'>
                        <label for='d_e' class='l_p'><b>Direccion de Entrega</b></label>
                        <input type='text' class='form-control  i_p' id='d_e' placeholder='".$datos->DOMICILIO."' disabled='disabled'>
                    </div>
                    <div class='col-2 text-end   d_p'>
                        <a href='' data-bs-toggle='modal' data-bs-target='#modal_detalles_pedido".$datos->FOLIO."'>Detalles del Pedido</a>
                    </div>
                   
                      <div class='modal modal-lg fade' id='modal_detalles_pedido".$datos->FOLIO."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                          <div class='modal-content'>
                            <div class='modal-header    header_detalles'>
                              <h5 class='modal-title' id='exampleModalLabel'>Detalles del Pedido</h5>
                              <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>   
                            ";
                            
                            foreach ($info as $datos) {
                            echo "
                            <div class='modal-body'>        
                                <div class='row border border-secondary     productos'>
                               
                                    <div class='col-1'>
                                        <img src='".$datos->FOTO."' alt='' class='imagen_productos'>
                                    </div>
                                    <div class='col  info_producto_carrito'>
                                        <div class='row justify-content-between'>
                                            <div class='col-9   nombre_producto'>
                                                <b>".$datos->PRODUCTO."</b>
                                            </div>
                                            <div class='col-3 text-end  precio_total'>
                                                <b>Precio: $".$datos->PRECIO.".00</b>
                                            </div>
                                        </div>
            
                                        <div class='row     barra_baja'>
                                            <div class='col-4'>
                                                <div class='input-group'>
                                                    <span class='input-group-text   barra_cantidad'>Cantidad</span>
                                                    <input type='number' class='form-control    barra_cantidad' disabled='disabled' aria-label='Username' placeholder=".$datos->CANTIDAD.">
                                                    <span class='input-group-text   barra_cantidad'>kg</span>
                                                </div>
                                            </div>
            
                                            <div class='col text-end  precio_total'>
                                                <b>Precio Total: $".$datos->TOTAL.".00</b>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                                }
                                echo "
                                </div>
                               
                            </div>
                          </div>
                         
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
                ";
            }  
         }
         else
         {
           echo " <div class='text-center'>
            <div><img src=''../../svg/bolsa.svg' alt='' class='lupa'></div>
            <div class='mensaje_no_encontrado'><b>No tiene ningun pedido activo en este momento</b></div>
        </div>";
         }
        ?>

    </div>

    <!--Pedidos Completados-->
    <div class="container   pedidos_entregados">
        <!--Mensaje-->
        <div class="row text-center">
            <div class="col   barras_mensaje"><hr></div>

            <div class="col-3   mensaje_arriba">
                <p><b>Pedidos Entregados</b></p>
            </div>

            <div class="col   barras_mensaje"><hr></div>
        </div>
        <?php
         $consulta= new select();
         $query="call VENTAS('".$_SESSION['ID_CLIENTE']."', 'Entregado');";
         $info=$consulta->seleccionar($query);
         if ($info!=NULL)
         {
            foreach ($info as $datos)
            {
                echo "
    <div class='border border-secondary  contenedor_pedidos_entregados'>
       
        <div class='row border border-dark  producto_carrito'>
            <div class='col-1'>
                <img src='".$datos->FOTO."' alt='' class='imagen_producto'>
            </div>

            <div class='col-10  info_producto'>
                <div class='n_p'>
                    <p><b>Pedido N.° ".$datos->FOLIO."</b></p>
                </div>

                <div class='row'>
                    
                    
                    <div class='col-2'>
                        <label for='total' class='l_p'><b>Total</b></label>
                        <input type='text' class='form-control  i_p' id='total' placeholder= '$".$datos->TOTAL."' disabled='disabled'>
                    </div>
                    <div class='col-3'>
                        <label for='f_p' class='l_p'><b>Fecha de Pedido</b></label>
                        <input type='text' class='form-control  i_p' id='f_p' placeholder='".$datos->FECHA_ORDEN."' disabled='disabled'>
                    </div>
                    <div class='col-5'>
                        <label for='d_e' class='l_p'><b>Direccion de Entrega</b></label>
                        <input type='text' class='form-control  i_p' id='d_e' placeholder='".$datos->DOMICILIO."' disabled='disabled'>
                    </div>
                    <div class='col-2 text-end   d_p'>
                        <a href='' data-bs-toggle='modal' data-bs-target='#modal_detalles_pedido".$datos->FOLIO."'>Detalles del Pedido</a>
                    </div>
                   
                      <div class='modal modal-lg fade' id='modal_detalles_pedido".$datos->FOLIO."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered'>
                          <div class='modal-content'>
                            <div class='modal-header    header_detalles'>
                              <h5 class='modal-title' id='exampleModalLabel'>Detalles del Pedido</h5>
                              <button type='button' class='btn-close btn-close-white' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>   
                            ";
                            $consulta2= new select();
                            $query2="call VENTA_DETALLE('".$_SESSION['ID_CLIENTE']."', 'Entregado',".$datos->FOLIO.");";
                            $info2=$consulta2->seleccionar($query2);
                            foreach ($info2 as $datos) {
                            echo "
                            <div class='modal-body'>        
                                <div class='row border border-secondary     productos'>
                               
                                    <div class='col-1'>
                                        <img src='".$datos->FOTO."' alt='' class='imagen_productos'>
                                    </div>
                                    <div class='col  info_producto_carrito'>
                                        <div class='row justify-content-between'>
                                            <div class='col-9   nombre_producto'>
                                                <b>".$datos->PRODUCTO."</b>
                                            </div>
                                            <div class='col-3 text-end  precio_total'>
                                                <b>Precio: $".$datos->PRECIO.".00</b>
                                            </div>
                                        </div>
            
                                        <div class='row     barra_baja'>
                                            <div class='col-4'>
                                                <div class='input-group'>
                                                    <span class='input-group-text   barra_cantidad'>Cantidad</span>
                                                    <input type='number' class='form-control    barra_cantidad' disabled='disabled' aria-label='Username' placeholder=".$datos->CANTIDAD.">
                                                    <span class='input-group-text   barra_cantidad'>kg</span>
                                                </div>
                                            </div>
            
                                            <div class='col text-end  precio_total'>
                                                <b>Precio Total: $".$datos->TOTAL.".00</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            }
                            echo "
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    </div>
                ";
            }  
         }
         else
         {
           echo " <div class='text-center'>
            <div><img src='../../svg/bolsa.svg' alt='' class='lupa'></div>
            <div class='mensaje_no_encontrado'><b>No se ha entregado ninguno pedido por el momento</b></div>
        </div>";
         }
        ?>

    </div>
    
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
                <a href="https://www.facebook.com/Ferretería-y-Materiales-Express-Torreón-1672126383002791/"><img src="../../svg/facebook.svg" alt="facebook" class="icono_facebook"></a>
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
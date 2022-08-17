<?php
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
    <link rel="stylesheet" href="../../css/mi_css/cuenta.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Mi Cuenta - Ferreteria y Materiales Express</title>
</head>
<body>
<?php
if(!isset($_SESSION['usuario']))
{
    header("Location: ../../index.php");
}
else
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
            if(isset($_SESSION["usuario"]))
            {    
                echo "<div class='col-2' texto-boton-login>
                <a href='cuenta.php' class='link_cuenta' style='color: white'>
                <button class='btn  boton-login' type='button'>
                    <img src='../../svg/perfil-b.svg' alt='' class='icono_boton'>       
                    <p class='texto-boton-login-no-iniciado text-start'><b>Bienvenido ".$_SESSION["usuario"]."</b>
                    </p>
                </button></a> </div>";
            }
            else
            {
                echo "<div class='col-2'>
                <button class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
                    <img src='svg/perfil-b.svg' alt='' class='icono_boton'>
                    <p class='texto-boton-login-no-iniciado text-start'><b>Iniciar Sesion o Registrarse</b></p>
                </button> </div>";
            }

            ?>
      
                <!--Modal Iniciar Sesion-->
                <div class="modal modal-sm" id="iniciar-sesion" tabindex="-1" aria-labelledby="" aria-hidden="true">
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
                                <a href="../html/registrarse.html" class="link_modal_i">Registrate aqui</a>

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

    <!--Contenedor-->
    <div class="container">
        <!--Mensaje-->
        <div class="row text-center">
            <div class="col   barras_mensaje"><hr></div>

            <div class="col-3   mensaje_arriba">
                <p><b>Informacion Personal</b></p>
            </div>

            <div class="col   barras_mensaje"><hr></div>
        </div>

        <!--Forms-->
        <!--Fila 1-->
        <div class="row justify-content-evenly">
            <!--Informacion no Modificable-->
            <div class="col-5 border border-dark rounded rounded-3    cont_form">
                <div class="label_form">
                    <label for="nombre" class="form-label   texto_label"><b>Nombre</b></label>
                    <fieldset >
                        <input type="text" id="nombre" class="form-control" placeholder="Nombre" value=" <?php echo $_SESSION['CLIENTE'] ;?>">
                    </fieldset>
                </div>

                <div class="label_form">
                    <label for="apellido_paterno" class="form-label     texto_label"><b>Apellido Paterno</b></label>
                    <fieldset>
                        <input type="text" id="apellido_paterno" class="form-control" placeholder="Apellido Paterno" value="<?php echo $_SESSION['AP'] ; ?>">
                    </fieldset>
                </div>

                <div class="label_form">
                    <label for="apellido_materno" class="form-label     texto_label"><b>Apellido Materno</b></label>
                    <fieldset >
                        <input type="text" id="apellido_materno" class="form-control" placeholder="Apellido Materno" value="<?php echo $_SESSION['AM'] ?>">
                    </fieldset>
                </div>

                <div class="label_form">
                    <label for="email" class="form-label    texto_label"><b>Correo Electronico</b></label>
                    <fieldset disabled="disabled">
                        <input type="text" id="email" class="form-control" placeholder="Correo" value="<?php echo $_SESSION['usuario']?>">
                    </fieldset>
                </div>
            </div>

            <!--Cambiar Contraseña-->
            <div class="col-5 border border-dark rounded rounded-3 cont_form">
                <h4><b>Cambiar Contraseña</b></h4>
                
                <div class="label_form">
                    <label for="pass_ant" class="form-label     texto_label"><b>Contraseña Antigua</b></label>
                    <input type="password" id="pass_ant" class="form-control">
                </div>

                <div class="label_form">
                    <label for="pass_nue" class="form-label     texto_label"><b>Nueva Contraseña</b></label>
                    <input type="password" id="pass_nue" class="form-control">
                </div>

                <div class="label_form">
                    <label for="pass_nue_r" class="form-label   texto_label"><b>Repetir Contraseña</b></label>
                    <input type="password" id="pass_nue_r" class="form-control">
                </div>

                <div class="text-end    boton_guardar">
                    <button class="btn    texto_boton_guardar">
                        <b>Guardar Cambios</b>
                    </button>
                </div>
            </div>
        </div>

        <!--Fila 2-->
        <div class="row justify-content-evenly  fila_2">
            <!--Direccion-->
            <div class="col-5 border border-dark rounded rounded-3 cont_form">
                <h4><b>Información de Envios</b></h4>
                
                <div class="label_form">
                    <label for="direccion" class="form-label     texto_label"><b>Direccion</b></label>
                    <input type="text" id="direccion" class="form-control" value="<?php echo $_SESSION['DIR'] ?>">
                </div>

                <div class="row justify-content-between">
                    <div class="col-5    label_form">
                        <label for="c_p" class="form-label     texto_label"><b>Codigo Postal</b></label>
                        <input type="text" id="c_p" class="form-control" value="<?php echo $_SESSION['CP'] ?>">
                    </div>
    
                    <div class="text-end col-5    boton_guardar_dos">
                        <button class="btn    texto_boton_guardar">
                            <b>Guardar Cambios</b>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-5   cont_tel_btn">
                <!--Telefono-->
                <div class="border border-dark rounded rounded-3 row    cont_form">
                    <div class="col-6   label_form">
                        <label for="c_p" class="form-label     texto_label"><b>Numero de Telefono</b></label>
                        <input type="tel" id="c_p" class="form-control" value="<?php echo $_SESSION['TEL'] ?>">
                    </div>

                    <div class="text-end col-5    boton_guardar_dos">
                        <button class="btn    texto_boton_guardar">
                            <b>Guardar Cambios</b>
                        </button>
                    </div> 
                </div>

                <!--Botones-->
                <div class="row justify-content-evenly">
                    <div class="text-center col-5    boton_guardar_dos">
                        <button class="btn    texto_boton_guardar">
                            <b>Guardar Todo</b>
                        </button>
                    </div>

                    <div class="text-center col-5    boton_guardar_dos">
                        <button class="btn    texto_boton_guardar">
                            <a href="../scripts/cerrarSesion.php" style="text-decoration:solid;" class="texto_boton_guardar">
                            <b>Cerrar Sesion</b>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
                <a href="https://www.facebook.com/Ferretería-y-Materiales-Express-Torreón-1672126383002791/"><img src="../svg/facebook.svg" alt="facebook" class="icono_facebook"></a>
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
                <img src="../svg/utt.svg" alt="" class="f_express">
                <img src="../svg/express-r.svg" alt="" class="f_express">
            </div>
        </div>
    </footer>
    
</body>
<?php
}
?>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</html>
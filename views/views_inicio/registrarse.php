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
    <link rel="stylesheet" href="../../css/mi_css/registrarse.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Crear Cuenta - Ferreteria y Materiales Express</title>
</head>
<body>
    <?php
    if(isset($_SESSION['SESION']))

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
                <button class="btn  boton-login" type="button" data-bs-toggle="modal" data-bs-target="#iniciar-sesion">
                    <img src="../../svg/perfil-b.svg" alt="" class="icono_boton">
                    <p class="texto-boton-login-no-iniciado text-start"><b>Iniciar Sesion o Registrarse</b></p>
                </button>
      
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
                                <b>¿Aún no tienes cuenta?</b>image.png

                                <!--Link Crear Cuenta-->
                                <a href="" class="link_modal_i" data-bs-target="#crear_cuenta" data-bs-toggle="modal">Registrate aqui</a>

                                <!--Modal Crear Cuenta-->
                                <div class="modal fade" id="crear_cuenta" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          Hide this modal and show the first with the button below.
                                        </div>
                                        <div class="modal-footer">
                                          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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

    <!--Registro-->
    <div class="container">
        <!--Mensaje-->
        <div class="row text-center">
            <div class="col   barras_mensaje"><hr></div>

            <div class="col-3   mensaje_arriba">
                <p><b>Crea una Cuenta</b></p>
            </div>

            <div class="col   barras_mensaje"><hr></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <form action="../scripts/guardarUsuario.php" method="POST">
                    <!--Seccion1-->
                    <div class="border border-secondary rounded-2    contenedores_form">
                        <h5>Informacion Personal</h5>
                        <!--Nombre-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="nombre" placeholder="Nombre" name="nombre" required> 
                            <label class="form-label"  for="nombre">Nombre</label>
                        </div>
                        <!--Apellido Paterno-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="a_p" placeholder="Apellido Paterno" name="appaterno" required>
                            <label class="form-label" for="a_p">Apellido Paterno</label>
                        </div>
                        <!--Apellido Materno-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="a_m" placeholder="Apellido Materno" name="apmaterno" required>
                            <label class="form-label" for="a_m">Apellido Materno</label>
                        </div>
                        <!--Correo Electronico-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="email" id="correo" placeholder="Correo Electronico" name="correo" required>
                            <label class="form-label" for="correo">Correo Electronico</label>
                        </div>
                        <!--Numero de Telefono-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono" name="tel" required>
                            <label class="form-label" for="telefono">Numero de Telefono</label>
                        </div>
                    </div>
    
                    <!--Seccion2-->
                    <div class="border border-secondary rounded-2    contenedores_form">
                        <h5>Direccion</h5>
                        <!--Direccion-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="direccion" placeholder="Direccion" name="dir" required>
                            <label class="form-label" for="direccion">Direccion</label>
                        </div>
    
                        <!--Codigo Postal-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="cp" placeholder="Codigo Postal" style="max-width: 200px;" name="codpst" required>
                            <label class="form-label" for="cp">Codigo Postal</label>
                        </div>
                    </div>
    
                    <!--Seccion3-->
                    <div class="border border-secondary rounded-2    contenedores_form">
                        <h5>Contraseña</h5>
                        <!--Contraseña-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="password" id="contra" placeholder="Contraseña" name="pass" required maxlength="30" minlength="8">
                            <label class="form-label" for="contra" maxlength="30" minlength="8" >Contraseña</label>
                            <div id="ayuda_email" class="form-text">La contraseña debe tener al menos 8 digitos.</div>
                        </div>
    
                        <!--Repetir Contraseña-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="password" id="rcontra" placeholder="Repetir Contraseña" name="pass1" required maxlength="30" minlength="8">
                            <label class="form-label" for="rcontra">Repetir Contraseña</label>
                        </div> 
                    </div>
                        <!--Boton-->
                    <div class="row justify-content-center">
                        <div class="col-6 row">
                            <button class="btn  boton_cc" type="submit">
                                <b>Crear Cuenta</b>
                            </button>
                        </div>
                    </div>
                    <!--Boton-->
                </form>
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
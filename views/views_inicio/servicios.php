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
    <link rel="stylesheet" href="../../css/mi_css/servicios.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Servicios - Ferreteria y Materiales Express</title>
</head>
<body>
    <?php
        if(isset($_SESSION['SESION']))

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

    <div class="container">
        <!--Mensaje-->
        <div class="row text-center">
            <div class="col   barras_mensaje"><hr></div>

            <div class="col-3   mensaje_arriba">
                <p><b>Conoce los Servicios</b></p>
            </div>

            <div class="col   barras_mensaje"><hr></div>
        </div>

        <!--Barrita filtros-->
        <div class="row border-bottom justify-content-between   barra_arriba_servicios">
            <div class="col-6   nom_info_serv">
                <b>Informacion de los Servicios</b>
            </div>
            <div class="col-2">
                <form action="" class="justify-content-end">
                    <select class="form-select form-select-sm   lista_servicios" name="" id="">
                        <option selected>Todos los servicios</option>
                        <option value="1">Electricista</option>
                        <option value="2">Fontaneria</option>
                        <option value="3">Construccion</option>
                        <option value="4">Carpinteria</option>
                    </select>
                </form>
            </div>
        </div>

        <!--Servicios-->
        <div>
            <!--Info Servicios-->
            <div class="border  servicios">
                <div class="row">
                    <div class="col-3">
                        <!--Categoria-->
                        <div class="titulo_servicios_cat"><b>Electricista</b></div>
                        <!--Nombre-->
                        <div>Juan Jose Perez Camacho</div>
                    </div>

                    <div class="col-9 row justify-content-end text-end">
                        <div class="col-4">
                            <div class="titulo_servicios"><b>Telefono de Contacto</b></div>
                            <div>8712429088</div>
                        </div>

                        <div class="col-4">
                            <div class="titulo_servicios"><b>Correo Electronico</b></div>
                            <div>-----</div>
                        </div>
                    </div>
                </div>

                <div class="descripcion">
                    <div class="titulo_servicios"><b>Descripcion del Servicio</b></div>
                    <div>Instalaciones residenciales, industriales, corto circuito, acometida de CFE, etc. Contamos con mas de 40 años de experiencia.</div>
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
                <img src="../../svg/utt.svg" alt="" class="f_express">
                <img src="../../svg/express-r.svg" alt="" class="f_express">
            </div>
        </div>
    </footer>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
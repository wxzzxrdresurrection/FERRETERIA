<!DOCTYPE html>
<html lang="en ">
<head>
    <link rel="shortcut icon" href="img/pared-r.ico"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mi_css/header.css">
    <link rel="stylesheet" href="css/mi_css/inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Ferreteria y Materiales Express</title>
</head>
<body>   

<?php
session_start();
?>
    
<?php
if(isset($_SESSION['usuario']))
{
    switch ($_SESSION['SESION']) 
    {
        case 300:
            header("Location: views/views_administrador/inicio.php");
            break;   
        case 301: 
            header("Location: views/views_vendedor/vInicio.php");
            break;
        case 302:
            header("Location: views/views_repartidor/rInicio.php");
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
                <object data="svg/logo-r.svg" class="text-end border border-dark   logo"></object>
            </div>


            <!--Barra de Busqueda-->
            <div class="col-6 text-center">
                <form action="views/views_inicio/productos.php" method="POST">
                <div class="input-group mb-3 border border-1 border-dark rounded rounded-3  buscar">
                    <!--Barra-->
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar productos" name="buscar">
                    <!--Boton Buscar-->
                    <button class="btn border-0 border-start  b-buscar" type="submit" id="button-addon1">Buscar</button>
                </div>
                </form>
            </div>
    

            <!--Login-->
            <!--Boton Iniciar Sesion-->
            <?php 
            if(isset($_SESSION["usuario"]))
            {    
                echo "<div class='col-2' texto-boton-login>
                <a href='views/views_inicio/cuenta.php' class='link_cuenta' style='color: white'>
                <button class='btn  boton-login' type='button'>
                    <img src='svg/perfil-b.svg' alt='' class='icono_boton'>       
                    <p class='texto-boton-login-no-iniciado text-start'><b>Bienvenido ".$_SESSION["usuario"]."</b>
                    </a></p>
                </button> </div>";
                
                
            }
            else
            {
                echo "<div class='col-2'>
                <button class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
                    <img src='svg/perfil-b.svg' alt='' class='icono_boton'>
                    <p class='texto-boton-login-no-iniciado text-start'><b>Iniciar Sesion o Registrarse</b></p>
                </button></div>";
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
                        <form action="views/scripts/VerificarLogin.php" method="POST">
                            <div class="label">
                                <label for="correo" class="form-label"><b>Correo Electronico</b></label>
                                <input type="email" id="correo" class="form-control     in_m_i" name="usuario">
                            </div>

                            <div class="label">
                                <label for="contraseña" class="form-label"><b>Contraseña</b></label>
                                <input type="password" id="contraseña" class="form-control  in_m_i" name="contraseña">
                            </div>

                            <div class="text-center     label">
                                <button class="btn  boton_i_s" type="submit">Iniciar Sesion</button>
                            </div>

                            <div class="row text-center     label p_c_c">
                                <b>¿Aún no tienes cuenta?</b>

                                <!--Link Crear Cuenta-->
                                <a href="views/views_inicio/registrarse.php" class="link_modal_i">Registrate aqui</a>

                            </div>
                        </form>
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
                            <a class="btn   boton-a-bb" type="button" href="index.php">
                                <div class="organizar">
                                    <img src="svg/casa-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Inicio</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="views/views_inicio/productos.php">
                                <div class="organizar">
                                    <img src="svg/caja-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Productos</b></p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item     boton-bb">
                            <a class="btn   boton-a-bb" href="views/views_inicio/servicios.php">
                                <div class="organizar">
                                    <img src="svg/servicios-b.svg" class="icono">
                                    <p class="texto-botones-bb"><b>Servicios</b></p>
                                </div>
                            </a>
                        </li>
                            <?php
               
                            if (!isset($_SESSION["usuario"]))
                            {
                            echo
                        "<li class='nav-item disabled    boton-bb'>
                            <a class='btn   boton-a-bb'
                            class='btn  boton-login' type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion'>
                                <div class='organizar'>
                                    <img src='svg/carrito-b.svg' class='icono'>
                                    <p class='texto-botones-bb'><b>Carrito</b></p>
                                </div>
                            </a>
                        </li>";
                            }
                            else
                            {
                                echo "<li class='nav-item    boton-bb'>
                                <a class='btn   boton-a-bb' href='views/views_inicio/carrito.php'>
                                    <div class='organizar'>
                                        <img src='svg/carrito-b.svg' class='icono'>
                                        <p class='texto-botones-bb'><b>Carrito</b></p>
                                    </div>
                                </a>
                            </li>";
                            }
                        ?>
                        <?php
                        if(!isset($_SESSION['usuario']))

                        {
                         echo "<li class='nav-item    boton-bb '>
                         <a class='btn   boton-a-bb'type='button' data-bs-toggle='modal' data-bs-target='#iniciar-sesion' >
                             <div class='organizar'>
                                 <img src='svg/bolsa-b.svg' class='icono'>
                                 <p class='texto-botones-bb'><b>Mis Pedidos</b></p>
                             </div>
                         </a>
                     </li> ";
                        }
                        else
                        {
                            echo "<li class='nav-item     boton-bb'>
                            <a class='btn   boton-a-bb' href='views/views_inicio/pedidos.php'>
                                <div class='organizar'>
                                    <img src='svg/bolsa-b.svg' class='icono'>
                                    <p class='texto-botones-bb'><b>Mis Pedidos</b></p>
                                </div>
                            </a>
                        </li> ";
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!--Carrusel-->
    <div class="carrusel">
    </div>

    <!--Quienes Somos-->
    <div class="row     presentacion">
        <div class="col-6 border-end text-center    info_pre info_pre_1">
            <div class="div_p1">
                <p>¿Quiénes somos?</p>
            </div>
        </div>
        <div class="col-6   info_pre info_pre_2">
            <div class="div_p2">
                <p>
                    Somos una distribuidora de materiales y herramientas de la comarca lagunera con la mision de llevar a tu casa todos los productos que necesites para que tengas la comodidad en tu hogar por la que tanto trabajas dia con dia.
                </p>
            </div>
        </div>
    </div>

    <!--Fotos-->
    <div class="row justify-content-center  div_fotos">
        <div class="col border border-dark    cuatro_im">
            <a data-bs-toggle="modal" data-bs-target="#foto1"><img src="img/Foto1.jpg" alt="" class="imagenes_cuat"></a>
        </div>
        <div class="col border border-dark    cuatro_im">
            <a data-bs-toggle="modal" data-bs-target="#foto2"><img src="img/Foto2.jpg" alt="" class="imagenes_cuat"></a>
        </div>
        <div class="col border border-dark    cuatro_im">
            <a data-bs-toggle="modal" data-bs-target="#foto3"><img src="img/Foto3.jpg" alt="" class="imagenes_cuat"></a>
        </div>
        <div class="col border border-dark    cuatro_im">
            <a data-bs-toggle="modal" data-bs-target="#foto4"><img src="img/Foto5.jpg" alt="" class="imagenes_cuat"></a>
        </div>

        <!--Modals-->
        <!--Modal Foto 1-->
        <div class="modal fade" id="foto1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="../img/Foto1.jpg" alt="">
            </div>
            </div>
        </div>

        <!--Modal Foto 2-->
        <div class="modal fade" id="foto2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="../img/Foto2.jpg" alt="">
            </div>
            </div>
        </div>

        <!--Modal Foto 3-->
        <div class="modal fade" id="foto3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="../img/Foto3.jpg" alt="">
            </div>
            </div>
        </div>

        <!--Modal Foto 4-->
        <div class="modal fade" id="foto4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="../img/Foto5.jpg" alt="">
            </div>
            </div>
        </div>
    </div>

    <!--Productos-->
    <div class="productos">
        <div class="row align-content-around border-bottom border-2">
            <div class="col-3 text-center    np">
                <p>Nuestros Productos</p>
            </div>
            <div class="col-6">
                <p>Contamos con lo necesario para el mantenimiento y reparaciones del hogar, ademas de un extenso surtido en material para contruccion y acabados.</p>
            </div>
        </div>

        <div class="row justify-content-evenly  categorias">
            <div class="col-1 align-content-center btn">
                <img src="svg/Herramientas-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Herramientas</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Union-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Union</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Mediciones-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Medicion</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Construccion-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Construccion</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Tuberias-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Tuberias</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Alumbrado-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Alumbrado</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Proteccion-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Proteccion</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Limpieza-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Limpieza</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Pintura-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Pintura</p>
            </div>
            <div class="col-1 text-center btn">
                <img src="svg/Diversos-b.svg" alt="" class="icono_cat">
                <p class="t_cat">Diversos</p>
            </div>
        </div>
    </div>

    <!--Servicios-->
    <div class="border-bottom border-secondary   servicios fondo_servicios">
        <div class="text-center     texto_servicios">
            <p>Servicios</p>
        </div>

        <div class="">
            <div class="text-center">
                <p class="mensaje_servicios h1">
                    Contamos con varios contactos que le pueden ayudar para sus distintos trabajos del hogar, surtase con nosotros y trabaje con ello.
                </p>
            </div>

            <div class="row text-center justify-content-evenly  botones_servicios">
                <div class="col-2 row">
                    <button class="btn boton_electri">
                        <b>Electricista</b>
                    </button>
                </div>
                <div class="col-2 row">
                    <button class="btn   boton_fonta">
                        <b>Fontaneria</b>
                    </button>
                </div>
                <div class="col-2 row">
                    <button class="btn  boton_cons">
                        <b>Construccion</b>
                    </button>
                </div>
                <div class="col-2 row">
                    <button class="btn  boton_carp">
                        <b>Carpinteria</b>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--Mapa-->
    <div class="border-bottom border-secondary   div_mapa">
        <div class="text-center     texto_mapa">
            <p>¿Donde nos encontramos?</p>
        </div>

        <div class="contenedor_mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3599.397887891917!2d-103.39389634980836!3d25.558425983649574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdb1c936e9889%3A0x27c2d3f576d84aca!2sExpress%20Materiales!5e0!3m2!1ses-419!2smx!4v1659145270552!5m2!1ses-419!2smx" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                <a href="https://www.facebook.com/Ferretería-y-Materiales-Express-Torreón-1672126383002791/"><img src="svg/facebook.svg" alt="facebook" class="icono_facebook"></a>
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
                <img src="svg/utt.svg" alt="" class="f_express">
                <img src="svg/express-r.svg" alt="" class="f_express">
            </div>
        </div>
    </footer>

</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</html>
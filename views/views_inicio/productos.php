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
    <link rel="stylesheet" href="../../css/mi_css/productos.css">
    <link rel="stylesheet" href="../../css/mi_css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <title>Productos - Ferreteria y Materiales Express</title>
</head>
<body>
    
    <?php
    use MyApp\query\select;
    require_once("../../vendor/autoload.php");


    $seleccionar= new select();
    if(isset($_SESSION['SESION']))
    {
    switch ($_SESSION['SESION']) 
    {
        case 300:
            header("Location: ../views_administrador/inicio.php");
            break;   
        case 301: 
            header("Location: ../views_vendedor/vInicio.html");
            break;
        case 302:
                header("Location: ../views_repartidor/rInicio.html");
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
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar productos" name="buscar" >

                    <!--Boton Buscar-->
                    <button class="btn border-0 border-start  b-buscar" type="submit" id="button-addon1">Buscar</button>
                    </form>
                </div>
            </div>
            <?php
            if(isset($_POST['buscar']))
            {
                extract($_POST);
                $barra = new select();
                $consulta = "SELECT PRODUCTOS.CODIGO, PRODUCTOS.NOMBRE AS PRODUCTO, CATEGORIAS.NOMBRE AS CATEGORIA, 
                PRODUCTOS.PRECIO_VENTA AS PRECIO, PRODUCTOS.FOTO AS FOTO, PRODUCTOS.DESCRIPCION AS DESCRIPCION,
                PRODUCTOS.CANTIDAD_REAL AS CANTIDAD FROM PRODUCTOS
                INNER JOIN CATEGORIAS ON CATEGORIAS.ID_CATEGORIA = PRODUCTOS.CATEGORIA WHERE PRODUCTOS.NOMBRE LIKE '%$buscar%'";
                $resultado = $barra->seleccionar($consulta);
            }
            ?>
            
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
   

    <!--Contenedor Productos-->
    <div class="container">
        <!--Mensajes Barra-->
        <div class="row">
            <!--Barra-->
            <div class="col-2   titulos">
                <b>Categorias</b>
                <hr class="hrs">
            </div>

            <!--Cantidad de Productos y Filtros-->
            <div class="row col-10">
                <div class="col-4   titulos"><b>Productos:</b></div>
                <div class="col-2   titulos"><b>Ordenar por:</b></div>
                <div class="col-3">
                    <form action="" method="POST">
                        <select name="filtros_de_busqueda" class="form-select form-select-sm     select_filtros" aria-label="Default select example">
                            <option value="1">Todos los productos</option>
                            <option value="2">Solo productos en stock</option>
                            <option value="3">Ordenar de la A a la Z</option>
                            <option value="4">Ordenar de la Z a la A</option>
                            <option value="5">De precio Mayor a Menor</option>
                            <option value="6">De precio Menor a Mayor</option>
                        </select>
                </div>
                <hr class="hrs">
            </div>
        </div>

        <!--Categorias y Productos-->
        <div class="row" style="margin-top: 10px;">
            <!--Categorias-->
            <div class="col-2">
                
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="herramientas" value="Herramientas" name="categorias">
                        <label class="form-check-label" for="herramientas">Herramientas</label>   
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="union" value="adiciones" name="categorias">
                        <label class="form-check-label" for="union">Union</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="medicion" value="medicion" name="categorias">
                        <label class="form-check-label" for="medicion">Medicion</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="construccion" value="construccion" name="categorias">
                        <label class="form-check-label" for="construccion">Construccion</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="tuberias" value="tuberia" name="categorias">
                        <label class="form-check-label" for="tuberias">Tuberias</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="alumbrado" value="iluminacion" name="categorias">
                        <label class="form-check-label" for="alumbrado">Alumbrado</label>
                    </div>
     
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="proteccion" value="seguridad" name="categorias">
                        <label class="form-check-label" for="proteccion">Proteccion</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="limpieza" value="limpieza" name="categorias">
                        <label class="form-check-label" for="limpieza">Limpieza</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="pintura" value="pintura" name="categorias">
                        <label class="form-check-label" for="pintura">Pintura</label>
                    </div>
    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="componentes_diversos" value="otros" name="categorias">
                        <label class="form-check-label" for="componentes_diversos">Componentes Diversos</label>
                    </div>

                    <div class="text-center">
                        <button class="btn  agregar_carrito" type="submit">
                            <b>Filtrar Resulados</b>
                        </button>
                    </div>
                </form>
            </div>

            <!--Productos-->
            
            <div class="col-10 row" >
            
                <?php
                 $cadena= "CALL PRODUCTOS();";
                 if ($_POST) 
                 {
                    $filtros_de_busqueda ="";
                    extract($_POST);     
                    if (isset($categorias)) 
                    {
                        switch ($filtros_de_busqueda) 
                        {
                            case 1:
                                $cadena= "CALL PPC('$categorias');";
                                break;
                            case 2:
                                $cadena= "CALL PRODUCTOS_STOCK();";
                                break;
                            case 3:
                                $cadena= "CALL ORDEN_PPC_AZ('$categorias');";
                                break;
                            case 4:
                                $cadena= "CALL ORDEN_PPC_ZA('$categorias');";
                                break;
                            case 5:
                                $cadena= "CALL PPC_PRECIO_MAYOR('$categorias');";
                                break;
                            case 6:
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
                            $cadena= "CALL PRODUCTOS_STOCK();";
                            break;
                        case 3:
                            $cadena= "CALL PRODUCTOS_AZ();";
                            break;
                        case 4:
                            $cadena= "CALL PRODUCTOS_ZA();";
                            break;
                        case 5:
                            $cadena= "CALL PRODUCTOS_PRECIO_MAYOR();";
                            break;
                        case 6:
                            $cadena= "CALL PRODUCTOS_PRECIO_MENOR();";
                            break; 
                        }
                    }
                 }
                
                $tabla=$seleccionar->seleccionar($cadena);

                if(isset($_POST['buscar']))
                {
                    foreach($resultado as $datos)
                {
                  
                    ?>
                    <div class="col  " style="max-width: 250px; height:475px ">
                    <form action="" method="POST">
                    <input type="hidden" name="foto" value="<?php echo $datos->FOTO ?>">
                    <img src="<?php echo $datos->FOTO ?>" alt="<?php echo $datos->FOTO ?>" class="imagenes_productos">
                    <div class="categoria_producto">
                        <input type="hidden" name="categoria" value="<?php $datos->CATEGORIA?>">
                        <b><?php echo $datos->CATEGORIA ?></b>
                    </div>
                    <div class="nombre_producto" style="height:80px ">
                    <input type="hidden" name="nombre" value="<?php echo $datos->PRODUCTO ?>">
                    <?php echo $datos->PRODUCTO ?>
                    </div>
                    <div class="informacion_producto">
                    <input type="hidden" name="cod" value="<?php echo $datos->CODIGO ?>">
                        <a href="..." data-bs-toggle="modal" data-bs-target="<?php echo "#HOLA".$datos->CODIGO ?>">Ver informacion detallada</a>
                    </div>
                    
                    <?php
                    if ($datos->CANTIDAD!=0) {
                        echo "<div class='unidades_producto'>";
                        echo "PRODUCTOS DISPONIBLES";
                    }
                    else
                    {
                        echo "<div class='mt-2 text-danger'>";
                        echo "PRODUCTOS NO DISPONIBLE";
                    }
                    ?>
                       
                    </div>
                    <div class="precio_producto">
    
                    <input type="hidden" name="precio" value="<?php echo $datos->PRECIO?>">
                        <b><?php echo "PRECIO:$".$datos->PRECIO ?></b>
                     
                    </div>
           
                    <div class="input-group">
                        <input type="hidden" name="cantidad" value="1">
                        <span class="input-group-text   barra_cantidad">Cantidad</span>
                        <input type="number" class="form-control    barra_cantidad" aria-label="Username" placeholder="" name="cantidad" min="1" max="100" required>
                    </div>
                    <div >
                        <?php
                    if ($datos->CANTIDAD!=0) {
                        if(isset($_SESSION['usuario']))
                        {
                        echo "<button class='btn  agregar_carrito' type='submit' name='agregar' value='guardar'>
                        <b>Agregar al Carrito</b>
                        </button>";
                        }
                        else
                        {
                            echo "<button class='btn  agregar_carrito' type='button' disabled>
                            <b>Agregar al Carrito</b>
                            </button>";
                        }
                        
                    }
                    else
                    {
                        echo "<button class='btn  agregar_carrito' disabled>
                        <b>Agregar al Carrito</b>
                    </button>";
                    }
                    ?>
                    </div>
                </div>
                </form>   
                    <?php
                }
                }
                else
                {
                foreach($tabla as $datos)
                {
                  
                    ?>
                    <div class="col  " style="max-width: 250px; height:475px ">
                    <form action="" method="POST">
                    <input type="hidden" name="foto" value="<?php echo $datos->FOTO ?>">
                    <img src="<?php echo $datos->FOTO ?>" alt="<?php echo $datos->FOTO ?>" class="imagenes_productos">
                    <div class="categoria_producto">
                        <input type="hidden" name="categoria" value="<?php echo $datos->CATEGORIA?>">
                        <b><?php echo $datos->CATEGORIA ?></b>
                    </div>
                    <div class="nombre_producto" style="height:80px ">
                    <input type="hidden" name="nombre" value="<?php echo $datos->PRODUCTO ?>">
                    <?php echo $datos->PRODUCTO ?>
                    </div>
                    <div class="informacion_producto">
                    <input type="hidden" name="cod" value="<?php echo $datos->CODIGO ?>">
                        <a href="..." data-bs-toggle="modal" data-bs-target="<?php echo "#HOLA".$datos->CODIGO ?>">Ver informacion detallada</a>
                    </div>
                    
                    <?php
                    if ($datos->CANTIDAD!=0) {
                        echo "<div class='unidades_producto'>";
                        echo "PRODUCTOS DISPONIBLES";
                    }
                    else
                    {
                        echo "<div class='mt-2 text-danger'>";
                        echo "PRODUCTOS NO DISPONIBLE";
                    }
                    ?>
                       
                    </div>
                    <div class="precio_producto">
    
                    <input type="hidden" name="precio" value="<?php echo $datos->PRECIO?>">
                        <b><?php echo "PRECIO:$".$datos->PRECIO ?></b>
                     
                    </div>
           
                    <div class="input-group">
                        <input type="hidden" name="cantidad" value="1">
                        <span class="input-group-text   barra_cantidad">Cantidad</span>
                        <input type="number" class="form-control    barra_cantidad" aria-label="Username" placeholder="" name="cantidad" min="1" max="100" required>
                    </div>
                    <div >
                        <?php
                    if ($datos->CANTIDAD!=0) {
                        if(isset($_SESSION['usuario']))
                        {
                        echo "<button class='btn  agregar_carrito' type='submit' name='agregar' value='guardar'>
                        <b>Agregar al Carrito</b>
                        </button>";
                        }
                        else
                        {
                            echo "<button class='btn  agregar_carrito' type='button' disabled>
                            <b>Agregar al Carrito</b>
                            </button>";
                        }
                        
                    }
                    else
                    {
                        echo "<button class='btn  agregar_carrito' disabled>
                        <b>Agregar al Carrito</b>
                    </button>";
                    }
                    ?>
                    </div>
                </div>
                </form>   
                    <?php
                }
                }
                foreach($tabla as $datos)
                {
                    ?>
                      <div class="modal modal-sm fade" id="<?php echo "HOLA".$datos->CODIGO ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <img src="<?php echo $datos->FOTO ?>" alt="<?php echo $datos->FOTO ?>" alt="" class="imagen_producto_modal">
                                </div>

                                <!--Categoria del Producto-->
                                <div class="categoria_producto_modal">
                                    <b><?php echo $datos->CATEGORIA ?></b>
                                </div>

                                <!--Nombre del Producto-->
                                <div class="nombre_producto_modal">
                                
                                    <b><?php echo $datos->PRODUCTO ?></b>
                                </div>

                                <!--Precio del Producto-->
                                <div class="precio_producto_modal">
                                    
                                    Precio: <?php echo "$".$datos->PRECIO ?>
                                </div>

                                <hr>

                                <!--Descripcion del Producto-->
                                <div class="descripcion_producto_modal">
                                    <input type="hidden" name="descripcion" value="<?php echo $datos->DESCRIPCION?>">
                                <?php echo $datos->DESCRIPCION ?>
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

<?php
    
        if(isset($_POST["agregar"]))
        {

      $producto=$_POST["nombre"];
        $cantidad=$_POST["cantidad"];
        $precio=$_POST["precio"];
        $foto = $_POST["foto"];
        $id = $_POST["cod"];
        $des = $_POST["descripcion"];
        $cat = $_POST["categoria"];
        $total_c=0;
        if(isset($_SESSION["carrito"])){
          foreach($_SESSION["carrito"] as $indice =>$arreglo){
               if($id==$indice){
               $total_c=intval($arreglo["cantidad"]);
                }
            }
      }

$_SESSION["carrito"][$id]["cantidad"] = $total_c+$cantidad;
$_SESSION["carrito"][$id]["precio"] = $precio;
$_SESSION["carrito"][$id]["nombre"] = $producto;
$_SESSION["carrito"][$id]["foto"] = $foto;
$_SESSION["carrito"][$id]["id"] = $id;
$_SESSION["carrito"][$id]["cat"] = $cat;
$_SESSION["carrito"][$id]["descr"] = $des;



echo "<script>alert('Producto $producto agregado al carrito');</script>";
    }

?>

        <!--Paginacion-->
        <div></div>
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
                <img src="../svg/utt.svg" alt="" class="f_express">
                <img src="../svg/express-r.svg" alt="" class="f_express">
            </div>
        </div>
    </footer>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
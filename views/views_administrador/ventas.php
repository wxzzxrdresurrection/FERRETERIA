<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/rHistorial.css">
    <title>ADMINISTRADOR | REPORTES</title>
</head>
<body>
    <div class="row">
    <nav class="col-2">
          <div class="container d-flex flex-column">
            <!--Repartidores-->
            <div class="text-center titulo">BIENVENIDO $NOMBRE</div>
            <div class="text-center">
              <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
            </div>

            <hr class="text-white">

            <!--Botones paginas-->
            <ul class="nav nav-pills row text-center justify-content-center">
              <li class="nav-item">
                <a class="nav-link    items" aria-current="page" href="../../views/views_administrador/inicio.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items " aria-current="page" href="../../views/views_administrador/reportespedidos.php">Reportes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items " href="../../views/views_administrador/altasproductos.php">Altas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items" href="../../views/views_administrador/inventario.php">Inventarios</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link    items active" href="../../views/views_administrador/ventas.php">Ventas</a>
              </li>
            </ul>

            <hr class="text-white">

            <!--Configuracion-->
            <div class="text-center">
              <div class="dropdown dropdown-center">
                <a class="nav-item dropdown-toggle link_drop" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Configuracion</a>
              
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li style="margin-bottom: 10px;"><a class="dropdown-item" href="configuracion.php">Ajustes</a></li>
                  <li><hr class="sep_hr"></li>
                  <li style="margin-top: 10px;"><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <div class="col-8 container">
            <h2>HISTORIAL DE VENTAS</h2>
            <form action="" method="post">
                <div class="container  border">
                    FORLUMARIO DE FILTRADOp
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </form>
            <div class="container border mt-3">
                <div class="row border">
                    <div class="col-3"><img src="" alt="hoal"></div>
                    <div class="col-7">
                        <div class="row border-bottom">
                            <div class="col-4">NUMERO DE VENTA</div>
                            <div class="col-4">CLINTE</div>
                            <div class="col-4">REPARTIDOR</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6">NOMBRE PRODUCTO</div>
                            <div class="col-6">CANTIDAD</div>
                        </div>
                    </div>
                    <div class="col-2">
                        <span>TOTAL</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
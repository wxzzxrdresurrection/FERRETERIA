<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/rHistorial.css">
    <title>ADMINISTRADOR | INICIO </title>
</head>
<body>
    <div class="row">
    <nav class="col-2">
          <div class="container d-flex flex-column">
            <!--Repartidores-->
            <div class="text-center titulo">BIENVENIDO </div>
            <div class="text-center">
              <img src="../../svg/facebook.svg" alt="" class="border border-2 rounded-circle foto_perfil">
            </div>

            <hr class="text-white">

            <!--Botones paginas-->
            <ul class="nav nav-pills row text-center justify-content-center">
              <li class="nav-item">
                <a class="nav-link    items active" aria-current="page" href="../../views/views_administrador/inicio.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items" aria-current="page" href="../../views/views_administrador/reportespedidos.php">Reportes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items" href="../../views/views_administrador/altasproductos.php">Altas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link    items" href="../../views/views_administrador/inentario.php">Inventarios</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link    items" href="../../views/views_administrador/ventas">Ventas</a>
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

        <div class= " col-8 container">
            <div class="border mb-5">
                <h1 class="text-center p-3">INGRESOS GENERADOS</h1>
                    <div class="row m-2 p-3">
                        <span class="col-6">DIARIO --------------------------------------------------</span>
                        <span class="col-3">CANTIDAD BRUTA</span>
                        <span class="col-3">CANTIDAD CAPITAL</span>
                    </div>  
                    <div class="row m-2 p-3">
                        <span class="col-6">SEMANAL -----------------------------------------------</span>
                        <span class="col-3">CANTIDAD BRUTA</span>
                        <span class="col-3">CANTIDAD CAPITAL</span>
                    </div>                     
                    <div class="row m-2 p-3">
                        <span class="col-6">MENSUAL -----------------------------------------------</span>
                        <span class="col-3">CANTIDAD BRUTA</span>
                        <span class="col-3">CANTIDAD CAPITAL</span>
                    </div>
                    <div class="row m-2 p-3">
                        <span class="col-6">ANUAL ---------------------------------------------------</span>
                        <span class="col-3">CANTIDAD BRUTA</span>
                        <span class="col-3">CANTIDAD CAPITAL</span>
                    </div>
            </div>
            <div class=" border row">
                <div class="border row col-6 ">
                    <h2 class=" text-center">PRODUCTOS FALTANTES</h1>
                    <div class="border row p-2">
                    <div class="col-3"><img src="" alt="producto"></div>
                    <div class="col-6">NOMBRE DEL PRODUCTO</div>
                    <div class="col-3">PROVEEDR</div>
                    </div>
                    <div class="border row">
                    <div class="col-3"><img src="" alt="producto"></div>
                    <div class="col-6">NOMBRE DEL PROD  UCTO</div>
                    <div class="col-3">PROVEEDOR</div>
                    </div>
                </div>
                <div class="border row col-6">
                <h2 class=" text-center">PRODUCTOS MAS VENDIDOS</h1>
                    <div class="border row p-2">
                    <div class="col-3"><img src="" alt="producto"></div>
                    <div class="col-6">NOMBRE DEL PRODUCTO</div>
                    <div class="col-3">NUMERO VENDIDOS</div>
                    </div>
                    <div class="border row">
                    <div class="col-3"><img src="" alt="producto"></div>
                    <div class="col-6">NOMBRE DEL PRODUCTO</div>
                    <div class="col-3">NUMERO VENDIDOS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\..\css\MICSS\repartidor.css">
    <title>Document</title>
</head>
<!--ICONOS-->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
</svg>
<body>
  <!--BARRA DE NAVEGACION LATERAL-->
<main class="d-flex flex-nowrap">
  <!--TITULO DE LA TABLA-->
  <div class="d-flex flex-column flex-shrink-0 p-4 text-bg-dark statico" style="width: 400px;">
      <h1 class="" align=center>REPARTIDOR</h1>
      <hr>
    <!--CONTENIDO DE LA TABLA EN BASE A UNA LISTA-->
      <ul class="nav nav-pills flex-column mb-auto ">
      <!--PRIMERO COMPONENTE DE LA TABLA,DENTRO DE LA LISTA USAMOS EL ICONO-->
        <li class="nav-item text-white">
          <a href="repartidorpedidos.php" class="nav-link active" aria-current="page">
            <svg class="icono" width="40" height="40"><use xlink:href="#home"/></svg>
            PEDIDOS
          </a>
        </li>
        <li>
          <a href="repartidorhistorial.php" class="nav-link text-white">
            <svg class="icono" width="40" height="40"><use xlink:href="#speedometer2"/></svg>
            HISTORIAL
          </a>
        </li>
      </ul>
      <hr>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="" alt="IMAGEN X" width="50" height="50" class="rounded-circle me-2">
          <strong></strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          <li><a class="dropdown-item" href="ajustes.php">AJUSTES</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">CERRAR SESION</a></li>
        </ul>
      </div>
    </div>
  <div class="divisor"></div>
  <div class=" container p-5  "align=center>
    <h1 class="cuerpo" >PEDIDOS DE HOY</h1>
    <hr>
    <div class="row">
      <div class="col-sm-6 p-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#VARIABLE NUMERO DE PEDIDO</h5>
            <p class="card-text">NOMBRE DE LA PERSONA A LA QUE SE VA A ENVIAR EL PEDIDO</p>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">MAS INFORMACION</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 p-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#VARIABLE NUMERO DE PEDIDO</h5>
            <p class="card-text">NOMBRE DE LA PERSONA A LA QUE SE VA A ENVIAR EL PEDIDO</p>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">MAS INFORMACION</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 p-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#VARIABLE NUMERO DE PEDIDO</h5>
            <p class="card-text">NOMBRE DE LA PERSONA A LA QUE SE VA A ENVIAR EL PEDIDO</p>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">MAS INFORMACION</a>
          </div>
        </div>
      </div>
    </div>

    
<!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">NUMERO DE ENVIO</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h6>NOMBRE DE LA PERSONA A ENVIAR</h6>
              <h6>DIRECCION</h6>
              <h6>TELEFONO</h6>
              <h6>CORREO</h6>
              <div class="card mb-3 p.3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-12">
                  <div class="card-body">
                    <h5 class="card-title">PRODUCTO</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">CANTIDAD   PRECIO</small></p>
                  </div>
                </div>
              </div> 
            </div>
            <div class="card mb-3 p.3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-12">
                  <div class="card-body">
                    <h5 class="card-title">PRODUCTO</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">CANTIDAD   PRECIO</small></p>
                  </div>
                </div>
              </div> 
            </div>
            <div class="card mb-3 p.3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                <div class="col-md-12">
                  <div class="card-body">
                    <h5 class="card-title">PRODUCTO</h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text-muted">CANTIDAD   PRECIO</small></p>
                  </div>
                </div>
              </div> 
            </div>
            <h2>TOTAL A PAGAR $VARIABLE_TOTAL</h2>
            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CANCELAR</button>
              <button type="button" class="btn btn-primary">ACTIVAR</button>
            </div>
          </div>
        </div>
      </div>
    <div class="divisor2 "></div>
    <h1 class="cuerpo">PROXIMOS</h1>
    <hr>
    <div class="row">
      <div class="col-sm-6 p-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#VARIABLE NUMERO DE PEDIDO</h5>
            <p class="card-text">NOMBRE DE LA PERSONA A LA QUE SE VA A ENVIAR EL PEDIDO</p>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">MAS INFORMACION</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 p-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#VARIABLE NUMERO DE PEDIDO</h5>
            <p class="card-text">NOMBRE DE LA PERSONA A LA QUE SE VA A ENVIAR EL PEDIDO</p>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">MAS INFORMACION</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 p-2">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">#VARIABLE NUMERO DE PEDIDO</h5>
            <p class="card-text">NOMBRE DE LA PERSONA A LA QUE SE VA A ENVIAR EL PEDIDO</p>
            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">MAS INFORMACION</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>
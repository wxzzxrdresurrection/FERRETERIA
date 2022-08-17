<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/mi_css/registrarse.css">
    <title>Document</title>
</head>
<body>
<div class="row justify-content-center">
            <div class="col-6">
                <form action="../scripts/guardarRepartidor.php" method="POST">
                    <!--Seccion1-->
                    <div class="border border-secondary rounded-2    contenedores_form">
                        <h5>Informacion Personal</h5>
                        <!--Nombre-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="nombre" placeholder="Nombre" name="nombre" required> 
                            <label class="form-label"  for="nombre">Nombre</label>
                        </div>
                        <!--Apellidos-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="a_p" placeholder="Apellidos" name="apellidos" required>
                            <label class="form-label" for="a_p">Apellidos</label>
                        </div>

                        <!--Numero de Telefono-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Numero de Telefono" name="telefono" required>
                            <label class="form-label" for="telefono">Numero de Telefono</label>
                        </div>

                        <!--Numero de Telefono-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Placas" name="placas" required>
                            <label class="form-label" for="placas">Placas</label>
                        </div>

                        <!--Numero de Telefono-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="tel" id="telefono" placeholder="Licencia" name="licencia" required>
                            <label class="form-label" for="telefono">Numero de licencia</label>
                        </div>
                    </div>
    
                    <!--Seccion3-->
                    <div class="border border-secondary rounded-2    contenedores_form">
                        <h5>Login</h5>
                         <!--Correo Electronico-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="email" id="correo" placeholder="Correo Electronico" name="correo" required>
                            <label class="form-label" for="correo">Correo Electronico</label>
                        </div>
                        <!--Contraseña-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="password" id="contra" placeholder="Contraseña" name="pass" required maxlength="30" minlength="8">
                            <label class="form-label" for="contra">Contraseña</label>
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
</body>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/bootstrap.bundle.js"></script>
</html>
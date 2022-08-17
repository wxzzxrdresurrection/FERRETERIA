<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<div class="row justify-content-center">
            <div class="col-6">
                <form action="../scripts/guardarLogin.php" method="POST">
                    <!--Seccion1-->
                    <div class="border border-secondary rounded-2    contenedores_form">
                        <h5>Informacion Personal</h5>
                        <!--Nombre-->
                        <div class="form-floating">
                            <input class="form-control  conf_labels" type="text" id="correo" placeholder="Nombre" name="correo" required> 
                            <label class="form-label"  for="name">Correo</label>
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

    <?php 
                use MyApp\Query\select;
                require_once("../../vendor/autoload.php");

                $query = new select();
                $cadena="SELECT * FROM usuarios";
                $reg = $query->seleccionar($cadena);

                echo "<div class='mb-3'>
                <label class='control-label'>
                Usuario </label>
                <select name='TIPO' class='form-select'>";

                foreach ($reg as $value)
                {
                    echo "<option value='".$value->KEY."'>".$value->TIPO."</option>";
                }

                echo "</select>
                </div>";
                ?>
                
                  <!--Boton-->
                  <div class="row justify-content-center">
                        <div class="col-6 row">
                            <button class="btn  boton_cc" type="submit">
                                <b>Crear Cuenta</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
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
    <div class="container">
    <?php
    use MyApp\query\ejecutar;
    require_once("../../vendor/autoload.php");

    $insert = new ejecutar();

    extract($_POST);
    $user=$_POST["correo"];
    $TIPO=$_POST["TIPO"];
    if ($_POST["pass"]==$_POST["pass1"])
    {

    $contraseñahash = password_hash($pass, PASSWORD_DEFAULT);
    $cadena = "INSERT INTO login (CORREO,CONTRASEÑA,TIPO_USUARIO) VALUES ('$user','$contraseñahash','$TIPO')";
  
    $insert->ejecutar($cadena);
    echo "<div class='alert alert-success'>Usuario Registrado</div>";
    header("refresh:3; ../../index.php");
    }

    else 

    {
        echo "<div class='alert alert-danger'>Las contraseñas no coinciden</div>";
        header("refresh:2; ../views_inicio/registrarse.php");

    }
    ?>

    </div>
</body>
</html>
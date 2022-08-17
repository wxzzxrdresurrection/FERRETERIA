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
    use MyApp\query\select;
    require_once("../../vendor/autoload.php");

    $searchlogin= new select();
    $insert = new ejecutar();
    $insert2 = new ejecutar();

    extract($_POST);
    if ($_POST["pass"]==$_POST["pass1"] )
    {

    $contraseñahash = password_hash($pass, PASSWORD_DEFAULT);
    $cadena2 = "INSERT INTO login (correo,contraseña,tipo_usuario) VALUES ('$correo','$contraseñahash',301)";
    $insert2->ejecutar($cadena2);
    $llave="SELECT ID_LOGIN FROM LOGIN WHERE correo='$correo'";
    $result = $searchlogin->seleccionar($llave);
    foreach ($result as $key)
    {
        $key->ID_LOGIN;
        $cadena = "INSERT INTO vendedores (NOMBRE,APELLIDOS,CORREO,TELEFONO,SEXO, LOGIN) VALUES
        ('$nombre','$apellidos','$telefono','$correo','$sexo','$key->ID_LOGIN')";
    
        $insert->ejecutar($cadena);

    }

    echo "<div class='alert alert-success'>Vendedor Registrado</div>";
    header("refresh:3; ../view_administrador/VerVendedores.php");
    }
    else 
    {
        echo "<div class='alert alert-danger'>Las contraseñas no coinciden</div>";
        header("refresh:2; ../view_administrador/AltaVendedores.php");

    }
    ?>

    </div>
</body>
</html>
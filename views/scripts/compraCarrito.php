<?php
session_start();
?>
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
    
    if(isset($_POST['compra']))
    {
        extract($_POST);
        $ID = $_SESSION['ID_CLIENTE'];
        $DIR = $_SESSION['DIR'];
        $datos = array_values($_SESSION['carrito']);
        $limite = sizeof($datos);
        $searchventa = new select();
        $insert = new ejecutar();
        $insert2 = new ejecutar();
        $buscardetalle = new select(); 
        $fechahoy = date('Y-m-d');
        $fechaentrega = strtotime('+3 day',strtotime($fechahoy));
        $fechaentrega = date('Y-m-d',$fechaentrega);
        $nuevaventa = "INSERT INTO VENTAS (cliente,fecha_orden)VALUES ('$ID','$fechahoy')";
        $insert->ejecutar($nuevaventa);
        $ventarealizada = "SELECT MAX(VENTAS.FOLIO) AS UV FROM VENTAS WHERE VENTAS.CLIENTE = '$ID'";
        $folio = $searchventa->seleccionar($ventarealizada);
         foreach($folio as $venta)
         {
            $ventacliente = $venta->UV;
         
        for ($i=0; $i < $limite ; $i++) 
        {
            $prod = $datos[$i]['id'];
            $cant = $datos[$i]['cantidad'];
            $ingresaprods = "INSERT INTO DETALLE_VENTAS(VENTA,PRODUCTO,CANTIDAD,TIPO_ENTREGA)VALUES('$ventacliente','$prod','$cant','$metodo_entrega')";
            $insert2->ejecutar($ingresaprods);
        }
            if($metodo_entrega == 'Domicilio')
            {
            $consultardetalle = "SELECT DETALLE_VENTAS.FOLIO_DETALLE FROM DETALLE_VENTAS JOIN VENTAS ON DETALLE_VENTAS.VENTA = VENTAS.FOLIO JOIN (SELECT MAX(VENTAS.FOLIO) AS UV FROM VENTAS WHERE VENTAS.CLIENTE = $ID) AS VE ON DETALLE_VENTAS.VENTA = VE.UV WHERE DETALLE_VENTAS.VENTA = VE.UV";
            $resdetalles = $buscardetalle->seleccionar($consultardetalle);
            foreach($resdetalles as $foliodetalle)
            {
                $fdetalle = $foliodetalle->FOLIO_DETALLE;
                $insert3 = new ejecutar();
                $ed = "INSERT INTO ENTREGA_DOMICILIO (VENTA,DETALLE_VENTA,FECHA_ENTREGA,HORA_ENTREGA,DOMICILIO,STATUS) VALUES('$ventacliente','$fdetalle','$fechaentrega','16:00:00', '$DIR','Pendiente')";
                $insert3->ejecutar($ed);

                $buscared = new select();
                $consultared = "SELECT ENTREGA_DOMICILIO.ID_VD FROM ENTREGA_DOMICILIO 
                JOIN (SELECT VE.UV AS VENTA, DETALLE_VENTAS.FOLIO_DETALLE AS DETALLE FROM DETALLE_VENTAS 
                JOIN VENTAS ON DETALLE_VENTAS.VENTA = VENTAS.FOLIO 
                JOIN (SELECT MAX(VENTAS.FOLIO) AS UV FROM VENTAS WHERE CLIENTE = $ID) AS VE ON DETALLE_VENTAS.VENTA = VE.UV 
                WHERE DETALLE_VENTAS.VENTA = VE.UV) AS DE ON ENTREGA_DOMICILIO.DETALLE_VENTA = DE.DETALLE";
                $resed = $buscared->seleccionar($consultared);
                foreach($resed as $idvd)
                {
                    $total = $_SESSION['totalventa'];
                    $idsvd =$idvd->ID_VD;
                    $insert4 = new ejecutar(); 
                    if($total>=500 && $total<1500)
                    {
                        $repartidor = 600;
                    }
                    else if($total>=1500 && $total<3000)
                    {
                        $repartidor = 601;
                    }
                    else if ($total>=3000)
                    {
                        $repartidor = 602;
                    }

                   
                    $insed = "INSERT INTO VENTA_REPARTIDOR (REPARTIDOR, VENTA_DOMICILIO) VALUES($repartidor, $idsvd)";
                    $insert4->ejecutar($insed);

                }
            }
            }
        
           
        }
         
         unset($_SESSION['carrito']);
         echo "<div class='alert alert-success'>";
         echo "<h2 align='center'>VENTA REALIZADA<h2>";
         echo "</div>";
         header("refresh:3; ../../index.php");
         
        
         
    } 
    
    ?>
    </div>
</body>
</html>
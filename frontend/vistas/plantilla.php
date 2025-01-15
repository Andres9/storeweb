

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <?php
    $servidor = Ruta::ctrRutaServidor();
    $icono = ControladorPlantilla::ctrEstiloPlantilla();
    echo '<link rel="icon" href="'.$servidor . $icono["icono"] . '">';
    /* Mantener la ruta fija del proyecto */
    $url = Ruta::ctrRuta();
    ?>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $url?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/plugins/font-awesome.min.css">

    <script src="<?php echo $url?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url?>vistas/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url?>vistas/js/plugins/jquery.easing.js"></script>
    <script src="<?php echo $url?>vistas/js/plugins/jquery.scrollUp.js"></script>

    <link rel="stylesheet" href="<?php echo $url?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/slide.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url?>vistas/css/productos.css">


</head>

<body>
    <!-- CABEZOTE -->
    <?php
    include "modulos/cabezote.php";

    $rutas = array();
    $ruta = null;

    if (isset($_GET["ruta"])) {

        
        $rutas= explode("/",$_GET["ruta"]);

        $item = "ruta";
        $valor = $rutas[0];

        $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item,$valor);

        if ($rutas[0] == $rutaCategorias["ruta"]){
            $ruta = $rutas[0];
        }

        $rutaSubCategorias = ControladorProductos::ctrMostrarSubcategorias($item,$valor);
        

        foreach ($rutaSubCategorias as $key => $value) {
            if ($rutas[0]== $value["ruta"]){
                $ruta = $rutas[0];
            }
        }


        if ($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendidos"|| $rutas[0] == "lo-mas-visto"  ) {
            include "modulos/productos.php";
        }else{
            include "modulos/error404.php";
        }
    }else{
        include "modulos/slide.php";
        include "modulos/destacados.php";
    }
    ?>

    <script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
 <script src="<?php echo $url; ?>vistas/js/slide.js"></script> 
</body>

</html>
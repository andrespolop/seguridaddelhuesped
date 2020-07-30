<?php
$conexion=mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Expires" content="0">

    <meta http-equiv="Last-Modified" content="0">

    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

    <meta http-equiv="Pragma" content="no-cache">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seguridad del huésped</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEeTHIB0aVAEEzMDoAitBls9r6qTkg-tM&callback=initMap&libraries=&v=weekly"
        defer></script>
        <script src="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAEeTHIB0aVAEEzMDoAitBls9r6qTkg-tM"defer></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Permite enlazar el estilo css a html-->
    <link rel="stylesheet" type="text/css" href="css/Solicitar-Ruta.css">
    <!--Permite enlazar el estilo css a html-->
    <link rel="shotcut icon" type="image/x-icon" href="imagenes/logo.png">
    <!--Permite añadir icono a ventana de navegación-->
    <script type="text/javascript" src="js/Scrip.js"></script>

</head>

<body>


    <div class="titulo">
        <div class="imagen-titulo">
            <a href="./Solicitar-Ruta.php"><img src="imagenes/logo.png"></a>
        </div>
        <h1>NOMBRE HOTEL</h1>
    </div>

    <hr>
    <br><br>

    </header>


    <h2 class="text"><br>SOLICITAR RUTA<br></h2>

    <hr>
    <p><button onclick="geoFindMe()">Permitir mi ubicación</button></p>
<div id="out"></div>

    <strong id="floating-panel"></strong>
    <button id="end" style="margin:2px;">Ingresar ruta recomendada</button>

    <div id="map"> </div>
    <br><br>
    <div>
    <table >
        <tr class="EncabezadoTabla" >
            <td>Nombre lugar</td>
            <td>Categoría</td>
            <td>Latitud y Longitud</td>  
            <td>Calificación 0-5</td>
        </tr>

<?php
        $sql="SELECT * FROM agregar";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
?>
        <tr>
            <td><?php echo $mostrar['nombrelugar'] ?></td>
            <td><?php echo $mostrar['categoria'] ?></td>
            <td><?php echo $mostrar['latitud'],',',$mostrar['longitud'] ?></td>
            <td><?php echo $mostrar['calificacion'] ?></td>
        
        </tr>
    <?php 
        }
    ?>
    </table>
    

</div>


    <footer>
        <hr>
        <div class="cuadrooscuro">

            <div class="caja2">
                <p class="encabezado">CONTACTO:</p>
                <p class="textoencabezado2"><br><b>Telefono:</b> (xxx)-xx-xx<br><br><b>Celular:</b>
                    xxx-xxx-xx-xx<br><br><b>Dirección:</b> Carrera x, calle xx #xx-xx piso x <br><br><b>Código
                        postal:</b> xxxxxx<br><br><b>Mail:</b> Someone@example.com<br></p>

            </div>

            <div class="caja">
            <p class="encabezado">INFORMACIÓN:</p>
            <p  class="enlacesencabezado"><a href="Información.html#quienessomos">¿Quiénes somos?</a></p>
            <p  class="enlacesencabezado"><a href="Información.html#quehacemos">¿Qué hacemos?</a></p>
            <p  class="enlacesencabezado"><a href="Información.html#conquientrabajamos">¿Con quién trabajamos?</a></p>
            <p  class="enlacesencabezado"><a href="Información.html#nuestrohotel">Nuestro Hotel</a></p> 
         </div>

         <div class="caja">
            <p class="encabezado">SERVICIOS:</p>
            <p  class="enlacesencabezado"><a href="Servicios.html#apidegoogle">API de Google</a></p>
            <p  class="enlacesencabezado"><a href="Servicios.html#asesoriaonline">Asesoría Online</a></p>
            <p  class="enlacesencabezado"><a href="Iniciar-Sesión-.html">Iniciar como trabajador</a></p>   
         </div>
            <br>

        </div>

        <hr>
        <div class="caja3">
            <p class="encabezado">© 2020 Copyright Seguridaddelhuesped. Todos los derechos reservados.</p>
        </div>
    </footer>
   <!-- Código de instalación Cliengo para seguridaddelhuespedhotel@gmail.com --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/5f216c84b91af2002a73756f/5f216c85b91af2002a737572.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>

</body>

</html>
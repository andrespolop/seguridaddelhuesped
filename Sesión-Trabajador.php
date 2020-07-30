<?php
$conexion=mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad del huésped</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"><!--Permite enlazar el estilo css a html-->
    <link rel="shotcut icon" type="image/x-icon" href="imagenes/logo.png"><!--Permite añadir icono a ventana de navegación-->
<style type="txt/css">
</style>
</head>
<body>
    <header>
        <div class="titulo">
            <div class="imagen-titulo">
            <a href="./Sesión-Trabajador.php"><img src="imagenes/logo.png" ></a>
            </div>
            <h1>NOMBRE HOTEL</h1>
        </div>
        <hr>
        <br><br>
        <!--INICIAR SESIÓN / REGISTRARSE-->
        <nav>
            <!--Para crear un navegador, se usan listas desordenadas ul li-->
            <ul>
                <li><a href="./Agregar-Ruta.html" >Agregar</a></li>
                <li><a href="./Editar-Ruta.html">Editar</a></li>
                <li><a href="./Eliminar-Ruta.html">Eliminar</a></li>
            </ul>
        </nav>
    </header>
    <table >
        <tr class="EncabezadoTabla" >
            <td>Código</td>
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
            <td><?php echo $mostrar['codigo'] ?></td>
            <td><?php echo $mostrar['nombrelugar'] ?></td>
            <td><?php echo $mostrar['categoria'] ?></td>
            <td><?php echo $mostrar['latitud'],',',$mostrar['longitud'] ?></td>
            <td><?php echo $mostrar['calificacion'] ?></td>
        </tr>
<?php 
        }
?>
    </table>
    <footer>
        <hr>
        <div class="cuadrooscuro">
            
        <div class="caja2">
           <p class="encabezado">CONTACTO:</p>
           <p  class="textoencabezado2"><br><b>Telefono:</b> (xxx)-xx-xx<br><br><b>Celular:</b>  xxx-xxx-xx-xx<br><br><b>Dirección:</b>  Carrera x, calle xx #xx-xx piso x <br><br><b>Código postal:</b>  xxxxxx<br><br><b>Mail:</b>  Someone@example.com<br></p>
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
    </footer>
</div>
</body>
</html>
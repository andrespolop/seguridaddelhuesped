<?php
//Conectamos con el servidor 
 /* MySQL Conexion*/
    $link = mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');
    // Chequea coneccion
    if($link === false){
        die("ERROR: No pudo conectarse con la DB. " . mysqli_connect_error());
    }
    $codigo =$_POST['codigo'];
    $nombrelugar =$_POST['nombrelugar'];
    $categoria =$_POST['categoria'];
    $latitud=$_POST['latitud'];
    $longitud=$_POST['longitud'];
    $calificacion=$_POST['calificacion'];
    $sql = ("UPDATE  agregar SET nombrelugar ='$nombrelugar',
                                categoria ='$categoria',
                                latitud ='$latitud',
                                longitud ='$longitud',
                                calificacion ='$calificacion'
                                 WHERE codigo ='$codigo' ");
    if(mysqli_query($link, $sql)){
        echo "<script>
	alert('Modifición exitosa');
	window.location= '../Sesión-Trabajador.php'
</script>";
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>      
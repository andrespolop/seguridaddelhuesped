<?php
//Conectamos con el servidor 
 /* MySQL Conexion*/
    $link = mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');
    // Chequea coneccion
    if($link === false){
        die("ERROR: No pudo conectarse con la DB. " . mysqli_connect_error());
    }
    $codigo =$_POST['codigo'];
    $sql = ("DELETE FROM  agregar WHERE codigo ='$codigo' ");
    if(mysqli_query($link, $sql)){
        echo "<script>
	alert('Eliminación exitosa');
	window.location= '../Sesión-Trabajador.php'
</script>";
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
    }
    mysqli_close($link);
?>      
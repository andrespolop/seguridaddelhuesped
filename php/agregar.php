<?php
//Conectamos con el servidor 
$conectar=mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');
	if(mysqli_connect_errno())
	{
		echo "Fallo al tratar de conectar con BBDD";
		exit();
	}
//Recuperar variables del formulario
$nombrelugar=$_POST['nombrelugar'];
$categoria=$_POST['categoria'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];
$calificacion=$_POST['calificacion'];
//Hacemos la sentencia de sql
$sql="INSERT INTO agregar (nombrelugar,categoria,latitud,longitud,calificacion) VALUES('$nombrelugar','$categoria','$latitud','$longitud','$calificacion')"; 
//Ejecutamos la sentencia de sql
$ejecutar=mysqli_query($conectar,$sql);
//verificamos ejecucion
if(!$ejecutar){
    echo"No se ejecutó";
}else{
    echo "<script>
	alert('Se agregó con éxito');
	window.location= '../Sesión-Trabajador.php'
</script>";
}
?>
<?php
//Conectamos con el servidor 
$conectar=mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');
	if(mysqli_connect_errno())
	{
		echo "Fallo al tratar de conectar con BBDD";
		exit();
	}
//Recuperar variables del formulario
$contrasena=$_POST['contrasena'];
//Hacemos la sentencia de sql
$sql="SELECT * FROM registrouser WHERE 852741963456123789='$contrasena'"; 
//Ejecutamos la sentencia de sql
$ejecutar=mysqli_query($conectar,$sql);
//verificamos ejecucion
$fila=mysqli_num_rows($ejecutar);
if($fila>0){
header("location:../Registrar-Trabajador.html");
}else{
	echo "<script>
	alert('El código ingresado es incorrecto, vuelva a intentar o contacte con el soporte');
	window.location= '../Iniciar-Sesión.html';
</script>";
}
mysqli_free_result($ejecutar);
mysqli_close($conectar);
?>

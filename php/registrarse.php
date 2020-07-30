<?php
//Conectamos con el servidor 
$conectar=mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');
	if(mysqli_connect_errno())
	{
		echo "Fallo al tratar de conectar con BBDD";
		exit();
	}
//Recuperar variables del formulario
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$contrasena=$_POST['contrasena'];
//Hacemos la sentencia de sql
$sql="INSERT INTO registrouser (nombre,apellido,email,celular,contrasena) VALUES('$nombre','$apellido','$email','$celular','$contrasena')"; 
//Ejecutamos la sentencia de sql
$ejecutar=mysqli_query($conectar,$sql);
//verificamos ejecucion
if(!$ejecutar){
    echo"No se ejecutó";
}else{
	echo "<script>
	alert('Registro exitoso');
	window.location= '../index.html';
</script>";
}
?>

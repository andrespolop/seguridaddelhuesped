<?php
//Conectamos con el servidor 
$conectar=mysqli_connect('localhost','id14497999_root','h1k2<Zz2I{g=yyR=','id14497999_seguridaddhdb');
	if(mysqli_connect_errno())
	{
		echo "Fallo al tratar de conectar con BBDD";
		exit();
	}
//Recuperar variables del formulario
$email=$_POST['email'];
$contrasena=$_POST['contrasena'];
//Hacemos la sentencia de sql
$sql="SELECT * FROM registrouser WHERE email='$email' and contrasena='$contrasena'"; 
//Ejecutamos la sentencia de sql
$ejecutar=mysqli_query($conectar,$sql);
//verificamos ejecucion
$fila=mysqli_num_rows($ejecutar);
if($fila>0){
    header("location:../Solicitar-Ruta.php");
}else{
	echo "<script>
                alert('Datos ingresados erróneos');
                window.location= '../Iniciar-Sesión.html'
    </script>";
}
mysqli_free_result($ejecutar);
mysqli_close($conectar);
?>

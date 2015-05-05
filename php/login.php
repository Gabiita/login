<?php 
	$conexion=mysql_connect("localhost","innovasy","innova2010**");
	mysql_select_db("innovasy_bdgeneral",$conexion);
	
	$username=$_POST['user'];
	$password=$_POST['password'];

	$resp=mysql_query("SELECT * FROM login where username='$username'AND password='$password'",$conexion);
	$existe = mysql_num_rows($resp) ;
	if($existe == "0") { 
		print("Este usuario no existe en la base de datos") ; }
	else {
		header('Location: /login/message.html');
	}
?>
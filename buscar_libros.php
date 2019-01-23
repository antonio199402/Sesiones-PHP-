<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		body{
			background-color: #F5F6CE;
		}

		.resaltar{
			color: #FE2E2E;
		}
	</style>
</head>
<body>
<h1>ANSWERS</h1>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("location:log_libros.php");
}



     $buscar=$_GET["buscar"];

     $conexion= new PDO('mysql: host=localhost; dbname=curso_sql', 'root', '');

     /*$sql="SELECT * FROM LIBRERIA WHERE AUTOR=:aut";*/

     $resultado=$conexion->prepare("SELECT * FROM LIBRERIA WHERE AUTOR=:aut");

     $resultado->execute(array(":aut"=>$buscar));

     while($registro=$resultado->fetch(PDO ::FETCH_ASSOC)){

echo 
         "<p class='resaltar'>NOMBRE DEL LIBRO: </p>" . $registro['NOMBRE'] . " " . "PRECIO: " . $registro['PRECIO'] . "AUTOR: " . $registro['AUTOR'] . "UBICACION" . $registro['UBICACION'] . "<br>";
         



     }


?>
	

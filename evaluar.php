<?php

try{


$conexion= new PDO("mysql: host=localhost; dbname=curso_sql", "root", "");
$sql= "SELECT * FROM PASS_USUARIOS WHERE USUARIOS=:usu AND PASSWORD=:pass";
$resultado=$conexion->prepare($sql);
$usuario=$_GET["usu"];
$contra=$_GET["pas"];
$resultado->bindValue(":usu",$usuario);
$resultado->bindValue(":pass",$contra);
$resultado->execute();
$numero_registro=$resultado->rowCount();

if($numero_registro==true){

	session_start();
$_SESSION["usuario"]=$_GET["usuario"];


	header("location:libros.php");
}else{

	header("location:log_libros.php");
}

}catch(Exception $e){

	die("ERROR " . $e->GetMessage());


}








?>
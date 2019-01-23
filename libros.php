<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	body{
		background-image: url("libros.png");
	}


</style>

</head>
<body>
	<?php
session_start();
if(!isset($_SESSION["usuario"])){
	header("location:log_libros.php");


}


	?>
<h1>WELCOME</h1>
<?php
echo "USER : " . $_SESSION["usuario"];


?>
<h2>SEARCH FOR BOOKS</h2>
<form action="buscar_libros.php" method="GET">
<label>SEARCH <input type="text" name="buscar"> </label>
<input type="submit" name="bot" value="GO">
</form>

<p><a href="cierre.php">CLOSE SESSION</a>
</body>
</html>
<html>
<head>
<title>Creación de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#303030">
<body text= "#E5E5E5">
<font face = "tahoma">
<font size = "2">
<body link = "#E5E5E5" vlink="E0E0E0">
<h2>Borrar vehiculos</h2>
<?php  

$id=$_GET['id'];

include 'conexion.php';

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$eliminar = mysqli_query($conexion, "DELETE FROM ocasion WHERE id='$id'");
?>
<h5>Coche borrado</h5>
<a href="http://localhost:50/coches/formbusquedas.html">Volver
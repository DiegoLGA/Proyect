<html>
<head>
<title>Creación de un portal con PHP y MySQL</title>
</head>
<body bgcolor="#303030">
<body text= "#E5E5E5">
<font face = "tahoma">
<font size = "2">
<body link = "#E5E5E5" vlink="E0E0E0">
<h2>Datos del vehiculo insertados</h2>
<?php  
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$combustible = $_POST['combustible'];
$color = $_POST['color'];
$fecha=$_POST['fecha'];
$precio = $_POST['precio'];

include 'conexion.php';

$conexion = mysqli_connect($host_db, $user_db, $pass_db, $db_name);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$insercion = mysqli_query($conexion, "INSERT INTO ocasion (marca,modelo,combustible,color,fecha,precio) VALUES ('$marca','$modelo','$combustible','$color','$fecha',$precio)");



echo 'A insertado los siguientes datos:';
echo "<br><br>";
echo "Marca:$marca";
echo "<br>";
echo "Modelo:$modelo";
echo "<br>";
echo "Combustible:$combustible";
echo "<br>";
echo "Color:$color";
echo "<br>";
echo "Fecha:$fecha";
echo "<br>";
echo "Precio:$precio";
echo "<br><br>";
?>
<a href="http://localhost:50/coches/index.html">Volver
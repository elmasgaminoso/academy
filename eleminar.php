<?php
session_start();
$pagina="admin";
include("validacion_sesion.php");
if (isset($_GET['var'])){
$id=$_GET['var'];	

	include("Config.php")

// sql to delete a record
$sql= "DELETE FROM `usuarios` WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
	echo "<script> location='RegistrosUsuario.php';</script>";
}
?>

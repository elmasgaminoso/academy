<?php
 session_start();
 $pagina="admin";
 include("Config.php");
 include("validacion_sesion.php");

if (isset($_GET['var'])){
$id=$_GET['var'];	

// sql to delete a record
$sql = "DELETE FROM materias_asignadas WHERE Id_materia='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
	echo "<script> location='materiasasignadas.php';</script>";
}
?>
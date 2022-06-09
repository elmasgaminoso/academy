<?php
 session_start();
 $pagina="profesor";
 include("Config.php");
 include("validacion_sesion.php");

if (isset($_GET['var'])){
$id=$_GET['var'];	

// sql to delete a record
$sql = "DELETE FROM clases WHERE Id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
	echo "<script> location='p';</script>";
}
?>
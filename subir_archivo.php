<?php 
include ('Config.php');

    // Recibir datos de imagen

    $name_file = $_FILES ['archivos'] ['name'];

    $type_file = $_FILES ['archivos'] ['type'];
    
    
    $size_file = $_FILES ['archivos'] ['size'];

    if ($size_file < 40000000) {

    //ruta de la carpeta de destino

    $host_file = 'C:\xampp\htdocs\academy\archivos/';
    //mueve archivos del dirctorio temporal al escogido

    move_uploaded_file($_FILES ['archivos'] ['tmp_name'], $host_file . $name_file);

    }else {
        echo 'El tamaño del archivo es mayor a lo admitido. El tamaño del archivo que subiste es: ' . $size_file . ', y el tamaño máximo admitido es: 40 megabytes';
    }

    $destino = fopen ($host_file . $name_file, "r");

    $file = fread ($destino, $size_file);

    $file = addslashes($file);

    fclose($destino);


    //Trabajo con database

    // $sql = "INSERT INTO archivos (nombre_archivo, tipo_archivo, tamano_archivo, direccion_archivo, archivo) VALUES ('$name_file', '$type_file', $size_file, '$host_file', '$file')";
    // $resut = $conn->query($sql);

    // if (mysqli_affected_rows($conn)>0) {
        // echo 'se ha tenido éxito';
    // }else {
        // echo 'algo ha fallado';
    // }

    /*while ($fila=mysqli_fetch_assoc($resultado)) {
        $id = $fila ["id"];
    }

    echo $id;

    $fila = "";

    if ($fila = mysqli_fetch_assoc($resultado)) {
        $id = $fila ["id"];
    }

    echo $id;*/

?>
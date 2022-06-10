<?php 

    //Recibir datos de archivo 

    $nombre_archivo = $_FILES ['imagen'] ['name'];
    $tipo_archivo = $_FILES ['imagen'] ['type'];
    $tamagno_archivo = $_FILES ['imagen'] ['size'];

    if ($tamagno_archivo <= 3000000) {

        if ($tipo_archivo == "image/jpeg" || $tipo_archivo == "image/jpg" || $tipo_archivo == "image/png") {

            // Ruta de la carpeta destino en servidor

            $carpeta_destino = 'C:\xampp\htdocs\academy\img/';

            //mover imagen del directorio temporal al dirtectorio escogido

            move_uploaded_file ($_FILES ['imagen'] ['tmp_name'], $carpeta_destino . $nombre_archivo);
        }else {
            echo 'Solo se pueden subir imagenes';
        }

    }else {
        echo 'El tamaño es mayor a lo admitido';
    }

    require ('Config.php');


    mysqli_set_charset($conn, 'utf8');

    $archivo_objetivo = fopen($carpeta_destino . $nombre_archivo, "r");

    $contenido = fread ($archivo_objetivo, $tamagno_archivo);

    $contenido = addslashes($contenido);

    fclose($archivo_objetivo);


?>
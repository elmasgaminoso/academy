<?php
if($pagina=="admin" and (isset ($_SESSION['usuario'])=="3")){
    echo "xd1";
    echo $_SESSION['usuario'];
    }else 
        if($pagina=="profesor" and (isset ($_SESSION['usuario'])=="2")){
         echo "xd2";
         echo $_SESSION['usuario'];
        }else
             if($pagina=="estudiante" and (isset ($_SESSION['usuario'])=="1")){
                echo "xd3";
                echo $_SESSION['usuario'];
    }else{
       echo"<script> location='Iniciarsesion.php';</script>";
    }  
?>   
<?php
if($pagina="admin" && $_SESSION['usuario']=3){
    echo "xd1";
    }else 
        if($pagina="profesor" && $_SESSION['usuario']=2){
         echo "xd2";
        }else
             if($pagina="estudiante" && $_SESSION['usuario']=1){
                echo "xd3";
    }else{
       echo"<script> location='Iniciarsesion.php';</script>";
    }  
?>  
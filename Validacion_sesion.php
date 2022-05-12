<?php
if($pagina=="admin" and  $_SESSION['usuario']=="3"){
    
    }else 
        if($pagina=="profesor" and $_SESSION['usuario']=="2"){
     
        }else
             if($pagina=="estudiante" and $_SESSION['usuario']=="1"){
                
    }else{
       echo"<script> location='Iniciarsesion.php';</script>";
    }  
?>   
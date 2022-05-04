<?php
    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){
      
    }else{
        echo"<script> location='Iniciarsesion.php';</script>";
    }
?>  
<?php
$nombre_usuario= $row["nombre"] ." ". $row["apellido"];
?>
<nav class="white nav">
  <div class=" container nav-wrapper header">
    <div class="row">
      <div class="col l6 logo_sysdatec">
        <div class="col l2 imagen_sys"> 
          <img class="responsive-img" src="img/cropped-sysdateclogo-1-1-768x377 1.png">
        </div>
         <div class="col l10 sysdatec">
          <p class="bold">Sysdatec</p>
          <p>Instituto de Formación Técnica</p>
        </div>
      </div>
      <ul id="nav-mobile" class="right hide-on-med-and-down col l6 nombre_usuario">
        <li>
          <img src="Imagenes perfil/<?php echo $row["foto"]?>" class="responsive-img" width="auto">
          <a href="Perfil.php">Hola, <?php echo $nombre_usuario ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

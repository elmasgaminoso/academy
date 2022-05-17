<?php
$nombre_usuario= $row["nombre"] ." ". $row["apellido"];
?>
<nav>
  <div class="nav-wrapper">
    <a href="" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="">Hola, <?php echo $nombre_usuario ?></a></li>
    </ul>
  </div>
</nav>
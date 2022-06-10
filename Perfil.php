<?php
 session_start();
 $pagina="estudiante";
 $inicio=false;
 $notas=false;
 $actividades=false;
 $perfil=true;
 include ('config.php');
 include("validacion_sesion.php");
$sql = "SELECT * FROM usuarios WHERE id='$_SESSION[Id]' ";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	}
if (isset ($_POST['modificar'])){
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
	$clave=$_POST['clave'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$fechanac=$_POST['fechadenac'];

  include('Subir_imagen.php');

$sql = "UPDATE usuarios SET foto='$nombre_archivo' ,clave='$clave',correo='$correo',telefono='$telefono',nombre='$nombre',apellido='$apellido',`fecha de nacimiento`='$fechanac' WHERE id='$_SESSION[Id]'";

if ($conn->query($sql) === TRUE) {
  echo "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
            <div class='modal-content center'>
              <h4 class='incorrecto'>Datos actualizados</h4>
              <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Continuar</a>
            </div>
          </div>
          <div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>";

} else {
    echo "  <div id='modal1' class='modal open' tabindex='0' style='z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);'>
    <div class='modal-content center'>
      <h4 class='incorrecto'>Error al actualizar los datos</h4>
      <a href='' class='waves-effect waves-light btn-large shake-slow btninicio modal-close'>Reintentar</a>
    </div>
  </div>
  <div class='modal-overlay' style='z-index: 1002; display: block; opacity: 0.5;'></div>" . $conn->error;
}	
} 

?>
<!doctype html>
<html>
<head>
    <?php
        include ('head.php');
    ?>
<title>Plataforma Virtual Sysdatec</title>
</head>
<body >
  <?php
      include ('header.php');
      include('menu_lateral.php');
  ?>
  <form method="post" action="" enctype="multipart/form-data">  
	<div class="container">
    <div class="row">
    <h2 class="cuenta_titulo">Mi cuenta</h2>
    <form class="col s12" method="post" action="">
      <div class="row">
		  <div class="col s5 contenedor_perfil">
        <div class="col l4 foto_perfil">
        <img src="Imagenes perfil/<?php echo $row["foto"]?>" class="responsive-img" width="auto">
        <div class="file-field input-field">
          <div class="btnfoto">
            <i class="material-icons">create</i>
              <input type="file" name="imagen" size="20">
            </div>
          </div>  
      </div>
        <div class="col l7 right nombre">
          <h2 class="nombre_perfil"> <?php echo $nombre_usuario ?></h2>
          <div class="tipo_perfil">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none"><path d="M15.0648 20.5143H10.301V25.2294C10.301 26.4124 11.2718 27.371 12.467 27.371H12.8988C14.094 27.371 15.0648 26.4124 15.0648 25.2294V20.5143ZM19.3506 11.0817H6.01763C4.5809 11.0817 3.40518 12.3354 3.40518 13.8649C3.40518 15.3967 4.5809 16.6481 6.01763 16.6481H19.3482C20.7849 16.6481 21.9606 15.3943 21.9606 13.8649C21.9631 12.3354 20.7873 11.0817 19.3506 11.0817Z" fill="#E59600"></path><path d="M12.6841 1.48071C8.43984 1.48071 4.50775 6.02017 4.50775 12.5525C4.50775 19.0507 8.55936 22.2632 12.6841 22.2632C16.8089 22.2632 20.8605 19.0507 20.8605 12.5525C20.8605 6.02017 16.9285 1.48071 12.6841 1.48071Z" fill="#FFCA28"></path><path d="M8.67399 14.3696C9.33814 14.3696 9.87654 13.8127 9.87654 13.1256C9.87654 12.4386 9.33814 11.8816 8.67399 11.8816C8.00984 11.8816 7.47144 12.4386 7.47144 13.1256C7.47144 13.8127 8.00984 14.3696 8.67399 14.3696Z" fill="#404040"></path><path d="M16.6943 14.3696C17.3584 14.3696 17.8968 13.8127 17.8968 13.1256C17.8968 12.4386 17.3584 11.8816 16.6943 11.8816C16.0301 11.8816 15.4917 12.4386 15.4917 13.1256C15.4917 13.8127 16.0301 14.3696 16.6943 14.3696Z" fill="#404040"></path><path d="M13.6257 15.3818C13.5989 15.3721 13.5745 15.3647 13.5477 15.3623H11.8231C11.7963 15.3647 11.7694 15.3721 11.745 15.3818C11.5889 15.4452 11.5036 15.6062 11.5767 15.7794C11.6499 15.9526 11.9938 16.4356 12.6866 16.4356C13.3793 16.4356 13.7233 15.9502 13.7965 15.7794C13.8672 15.6062 13.7818 15.4452 13.6257 15.3818Z" fill="#E59600"></path><path d="M14.738 17.3529C13.9599 17.8139 11.4133 17.8139 10.6376 17.3529C10.1912 17.087 9.73507 17.4943 9.92045 17.8993C10.1034 18.2969 11.4938 19.2213 12.6939 19.2213C13.894 19.2213 15.2673 18.2969 15.4502 17.8993C15.6332 17.4943 15.1844 17.087 14.738 17.3529Z" fill="#795548"></path><path d="M12.689 0.012207H12.6793C1.59529 0.0707492 3.86624 12.2427 3.86624 12.2427C3.86624 12.2427 4.36385 13.5477 4.5907 14.1233C4.62241 14.2063 4.74437 14.1965 4.76389 14.1111C5.0005 13.0525 5.8518 9.29846 6.28111 8.15689C6.40376 7.83164 6.63685 7.55985 6.93962 7.38907C7.24239 7.21829 7.59556 7.15939 7.93737 7.22266C9.02527 7.42024 10.7547 7.66416 12.6646 7.66416H12.7037C14.6112 7.66416 16.3431 7.42024 17.4285 7.22266C18.1359 7.09337 18.8335 7.4861 19.0848 8.15689C19.5116 9.29359 20.3581 13.0257 20.5971 14.0989C20.6166 14.1867 20.7386 14.1941 20.7703 14.1111L21.4972 12.2402C21.5021 12.2427 23.7706 0.0707492 12.689 0.012207Z" fill="#543930"></path><path d="M21.5021 12.2427C21.5021 12.2427 23.773 0.0707492 12.689 0.012207H12.6793C12.5061 0.012207 12.3378 0.0170855 12.1719 0.0244033C11.8426 0.0390388 11.5231 0.0634314 11.2157 0.10002H11.2059C11.184 0.10246 11.1645 0.107338 11.1425 0.109777C1.81236 1.28306 3.86378 12.2427 3.86378 12.2427L4.59068 14.116C4.62239 14.1989 4.74191 14.1916 4.76143 14.1038C5.00047 13.033 5.84934 9.29603 6.27865 8.15933C6.40157 7.83374 6.63508 7.56175 6.93831 7.39095C7.24155 7.22016 7.59519 7.16145 7.93734 7.22509C9.02525 7.42024 10.7547 7.66416 12.6646 7.66416H12.7037C14.6112 7.66416 16.343 7.42024 17.4285 7.22266C18.1359 7.09337 18.8335 7.4861 19.0848 8.15689C19.5141 9.29846 20.3654 13.0598 20.5995 14.1136C20.619 14.2014 20.7386 14.2087 20.7703 14.1258C20.9996 13.5525 21.5021 12.2427 21.5021 12.2427Z" fill="url(#paint0_radial_81_4151)"></path><path d="M25.4902 12.0256C25.1878 12.0256 24.9414 12.2598 24.9414 12.5476V14.7918C24.9414 15.0796 25.1878 15.3138 25.4902 15.3138C25.7927 15.3138 26.0391 15.0796 26.0391 14.7918V12.5476C26.0391 12.2598 25.7927 12.0256 25.4902 12.0256ZM24.3926 12.0256C24.0901 12.0256 23.8437 12.2598 23.8437 12.5476V14.7918C23.8437 15.0796 24.0901 15.3138 24.3926 15.3138C24.695 15.3138 24.9414 15.0796 24.9414 14.7918V12.5476C24.9414 12.2598 24.695 12.0256 24.3926 12.0256Z" fill="#E8AD00"></path><path d="M24.9414 12.0256C24.639 12.0256 24.3926 12.2598 24.3926 12.5476V15.2772C24.3926 15.565 24.639 15.7992 24.9414 15.7992C25.2439 15.7992 25.4903 15.565 25.4903 15.2772V12.5476C25.4903 12.2598 25.2439 12.0256 24.9414 12.0256Z" fill="#FFCA28"></path><path d="M24.9415 12.367C25.3133 12.367 25.6147 12.0798 25.6147 11.7255C25.6147 11.3712 25.3133 11.084 24.9415 11.084C24.5696 11.084 24.2682 11.3712 24.2682 11.7255C24.2682 12.0798 24.5696 12.367 24.9415 12.367Z" fill="#FFCA28"></path><path d="M24.9414 11.7182C24.8073 11.7182 24.6975 11.6084 24.6975 11.4743V2.20511C24.6975 2.07095 24.8073 1.96118 24.9414 1.96118C25.0756 1.96118 25.1854 2.07095 25.1854 2.20511V11.4743C25.1854 11.6109 25.0756 11.7182 24.9414 11.7182Z" fill="#504F4F"></path><path d="M25.3683 1.95141C17.8481 0.0609814 12.6841 0 12.6841 0C12.6841 0 7.52023 0.0609814 0 1.95141V2.13923C0 2.46365 0.212216 2.74905 0.522001 2.8393C1.42941 3.10762 3.72475 3.70036 4.95657 3.94672C4.93706 3.96623 4.68825 4.40286 4.51019 4.80778C4.51019 4.80778 6.49575 6.20304 12.6866 6.82749C18.8774 6.20304 20.9215 4.97853 20.9215 4.97853C20.7069 4.53702 20.4849 4.12723 20.4849 4.12723C21.5826 3.94672 23.956 3.13445 24.8634 2.84418C25.1683 2.74661 25.3732 2.46609 25.3732 2.14655V1.95141H25.3683Z" fill="url(#paint1_linear_81_4151)"></path><path d="M12.6841 0C12.6841 0 7.52023 0.0609813 0 1.95141C0 1.95141 8.63741 4.31017 12.6841 4.23943C16.7309 4.31017 25.3683 1.95141 25.3683 1.95141C17.8481 0.0609813 12.6841 0 12.6841 0Z" fill="url(#paint2_linear_81_4151)"></path><path opacity="0.4" d="M25.3683 1.95141C17.8481 0.0609813 12.6841 0 12.6841 0C12.6841 0 7.52023 0.0609813 0 1.95141V2.13923C0 2.46365 0.212216 2.74904 0.522001 2.8393C1.42941 3.10762 3.72475 3.73938 4.95657 3.98819C4.95657 3.98819 4.7224 4.36871 4.51019 4.84925C4.51019 4.84925 6.49575 6.20303 12.6866 6.82992C18.8774 6.20547 20.9215 4.98097 20.9215 4.98097C20.7069 4.53946 20.4849 4.12966 20.4849 4.12966C21.5826 3.94916 23.956 3.13689 24.8634 2.84661C25.1683 2.74904 25.3732 2.46853 25.3732 2.14899V1.95141H25.3683Z" fill="url(#paint3_linear_81_4151)"></path><path d="M6.83237 11.1572C7.56171 10.1254 9.21797 10.0278 10.1668 10.7962C10.3181 10.9182 10.5181 11.0889 10.5766 11.2792C10.6742 11.589 10.3766 11.8304 10.0863 11.7573C9.90096 11.7109 9.72777 11.6109 9.54483 11.5548C9.21065 11.4499 8.96916 11.4206 8.66913 11.4206C8.22519 11.4182 7.9398 11.4743 7.5178 11.6451C7.34462 11.7158 7.20314 11.828 7.00556 11.7451C6.77871 11.6499 6.69577 11.3621 6.83237 11.1572ZM18.0676 11.7426C17.9969 11.7109 17.9286 11.6719 17.8578 11.6426C17.4236 11.4621 17.1773 11.4158 16.7065 11.4182C16.2918 11.4206 16.0455 11.4767 15.721 11.5865C15.5235 11.6548 15.2722 11.8256 15.0527 11.7597C14.7307 11.6621 14.7404 11.3109 14.9161 11.0865C15.1259 10.823 15.4137 10.623 15.7186 10.4913C16.426 10.1839 17.2895 10.2278 17.9554 10.6254C18.1725 10.7547 18.4091 10.9328 18.5408 11.1572C18.7311 11.4767 18.4432 11.8963 18.0676 11.7426Z" fill="#6D4C41"></path><path d="M25.0024 28.2979C25.0024 24.7341 19.697 23.0437 15.0698 22.6632L12.972 25.3537C12.9037 25.4415 12.7964 25.4952 12.6842 25.4952C12.572 25.4952 12.4646 25.444 12.3963 25.3537L10.2937 22.6583C7.72028 22.8559 0.36348 23.817 0.36348 28.2979V29.0321H25L25.0024 28.2979Z" fill="#212121"></path><path d="M25.0024 28.2979C25.0024 24.7341 19.697 23.0437 15.0698 22.6632L12.972 25.3537C12.9037 25.4415 12.7964 25.4952 12.6842 25.4952C12.572 25.4952 12.4646 25.444 12.3963 25.3537L10.2937 22.6583C7.72028 22.8559 0.36348 23.817 0.36348 28.2979V29.0321H25L25.0024 28.2979Z" fill="url(#paint4_radial_81_4151)"></path><defs><radialGradient id="paint0_radial_81_4151" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12.6844 10.1679) scale(9.23821 10.4225)"><stop offset="0.794" stop-color="#6D4C41" stop-opacity="0"></stop><stop offset="1" stop-color="#6D4C41"></stop></radialGradient><linearGradient id="paint1_linear_81_4151" x1="12.6841" y1="-1.05644" x2="12.6841" y2="5.92984" gradientUnits="userSpaceOnUse"><stop offset="0.003" stop-color="#424242"></stop><stop offset="0.472" stop-color="#353535"></stop><stop offset="1" stop-color="#212121"></stop></linearGradient><linearGradient id="paint2_linear_81_4151" x1="12.6841" y1="-1.01571" x2="12.6841" y2="6.54599" gradientUnits="userSpaceOnUse"><stop offset="0.003" stop-color="#616161"></stop><stop offset="0.324" stop-color="#505050"></stop><stop offset="0.955" stop-color="#242424"></stop><stop offset="1" stop-color="#212121"></stop></linearGradient><linearGradient id="paint3_linear_81_4151" x1="0.461752" y1="3.41569" x2="25.0563" y2="3.41569" gradientUnits="userSpaceOnUse"><stop offset="0.001" stop-color="#BFBEBE"></stop><stop offset="0.3" stop-color="#212121" stop-opacity="0"></stop><stop offset="0.7" stop-color="#212121" stop-opacity="0"></stop><stop offset="1" stop-color="#BFBEBE"></stop></linearGradient><radialGradient id="paint4_radial_81_4151" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12.6842 28.6914) scale(13.2127 6.93272)"><stop offset="0.598" stop-color="#212121"></stop><stop offset="1" stop-color="#616161"></stop></radialGradient></defs></svg>
            <h5>Estudiante</h5>
          </div>
        </div>
        </div>
        </div>
      <div class="form_perfil">
      <div class="col s6 campo_perfil">
        <p class="black-text campos">Nombres:</p>
        <div class="input-field field">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Nombre"id="last_name" type="text" class="validate" name="nombre" value="<?php echo $row["nombre"]?>">
        </div>
      </div>
      <div class="col s6 campo_perfil">
        <p class="black-text campos">Apellidos:</p>
        <div class="input-field field">
           <i class="material-icons prefix">account_circle</i>
          <input placeholder="Apellido"id="last_name" type="text" class="validate" name="apellido" value="<?php echo $row["apellido"]?>">
        </div>
        </div>
        <div class="col s6 campo_perfil">
        <p class="black-text campos">Apellidos:</p>
        <div class="input-field field">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" name="correo" value="<?php echo $row["correo"]?>">
        </div>
        </div>
      <div class="col s6 campo_perfil">
      <p class="black-text campos">Cambiar contraseña:</p>
		   <div class="input-field field">
           <i class="material-icons prefix">vpn_key</i>
          <input placeholder="Contraseña" id="password" type="text"class="validate" name="clave" value="<?php echo $row["clave"]?>">
        </div>
        </div>
        <div class="col s6 campo_perfil">
        <p class="black-text campos">Telefono:</p>
         <div class="input-field field">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate" name="telefono" value="<?php echo $row["telefono"]?>">
          </div>
         </div>
        <div class="col s6 campo_perfil">
        <p class="black-text campos">Fecha de nacimiento:</p>
        <div class="input-field field">
           <i class="material-icons prefix">perm_contact_calendar</i>
            <input id="calendario" type="date" name="fechadenac" value="<?php echo $row["fecha de nacimiento"]?>">
          </div>
        </div>
        <div class="col s12">
          <a class="waves-effect waves-light btn-large shake-slow  btninicio"><input type="submit" value="Actualizar los datos" name="modificar"></input></a> 
        </div>      
		    </div>
      </div>
    </div>
  </form>
	</div>
</body>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
	
$(".dropdown-trigger").dropdown();
	$(document).ready(function(){
    $('.datepicker').datepicker();
  });
      	
		
		</script>
</html>
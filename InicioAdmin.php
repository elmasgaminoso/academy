<?php
 session_start();
 $pagina="admin";
 include("validacion_sesion.php");
 include("Config.php");
 $sql = "SELECT * FROM `usuarios` WHERE  id='$_SESSION[Id]' ";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
 }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            include ('head.php');
        ?>
        <title>Plataforma Virtual Sysdatec</title>
    </head>
    <body>
    <?php
        include ('header.php');
        ?>  
    <div class="container">
        <div class="row center">	
          <h1 class="fuente1 center">Bienvenido a la sesión de Administrador.</h1>
          <div class="row cajas admin">
                <div class="col l6 caja_vista ">
                    <a href="RegistroUsuario.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="81" viewBox="0 0 75 81" fill="none"><path d="M34.2914 0.0625992C34.1135 0.10881 33.3857 0.247437 32.6741 0.370663C24.2477 1.91096 17.2607 8.85774 15.8536 17.0676C15.5463 18.9159 15.5463 21.9657 15.8536 23.7987C17.3254 32.4398 24.5226 39.2633 33.7254 40.7112C35.5206 41.0039 38.7553 41.0039 40.6314 40.7112C49.3166 39.3712 56.3844 32.9173 58.2606 24.6151C58.6811 22.7667 58.6811 18.1458 58.2606 16.2974C56.4491 8.33403 50.0121 2.14201 41.6504 0.355259C40.4697 0.0934067 35.0678 -0.106834 34.2914 0.0625992Z" fill="url(#paint0_linear_15_242)"></path><path d="M19.3307 43.8209C14.0582 44.8837 9.59429 47.148 5.90673 50.6137C3.46453 52.9087 0.860599 56.4822 0.148965 58.5C-0.190678 59.4858 -0.0289434 59.9325 1.47519 62.0427C7.10357 69.9753 15.6917 75.9517 25.0723 78.4778C31.7843 80.2645 39.0139 80.5418 45.6289 79.2633C52.2277 77.9849 58.7456 75.0583 63.9049 71.0997C67.1235 68.6352 71.28 64.1683 73.3988 60.9183C74.4986 59.2085 74.4986 59.1315 73.4473 57.1599C69.7436 50.2286 62.4493 45.0994 54.3787 43.7439C52.3409 43.405 51.6454 43.5437 49.8502 44.6681C45.8553 47.1634 41.7957 48.334 37.1216 48.334C32.3342 48.334 28.4849 47.1942 24.0372 44.4524C22.8242 43.6977 22.5978 43.6207 21.6921 43.5899C21.1583 43.5591 20.0909 43.6669 19.3307 43.8209Z" fill="url(#paint1_linear_15_242)"></path><defs><linearGradient id="paint0_linear_15_242" x1="15.6232" y1="20.4654" x2="58.5753" y2="20.4654" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient><linearGradient id="paint1_linear_15_242" x1="0" y1="61.818" x2="74.2286" y2="61.818" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Crear Usuario</p>
                    </a>
                </div>
                <div class="col l6 caja_vista ">
                    <a href="RegistrosUsuario.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="65" height="60" viewBox="0 0 74 60" fill="none"><path d="M49.1531 56.5547C48.8867 56.4082 48.6242 56.2546 48.3658 56.0941L47.4618 56.6207C46.7688 57.0309 45.9807 57.2473 45.1782 57.2479C43.9398 57.2479 42.735 56.7214 41.8285 55.7537C39.6998 53.3994 38.0949 50.5799 37.1779 47.5623C36.5591 45.4459 37.4489 43.2416 39.2396 42.2607L40.1667 41.7136C40.159 41.4067 40.159 41.0996 40.1667 40.7926L39.2815 40.2698C37.8593 39.455 37.0384 37.9659 37.0106 36.3581C35.3357 35.8945 33.5781 35.625 31.7628 35.625H20.0382C8.97382 35.625 0 44.7305 0 55.9453C0 58.1836 1.79453 60 4.00764 60H47.7887C48.4509 60 49.049 59.7976 49.5994 59.5092C49.3368 58.9252 49.1531 58.3022 49.1531 57.6272V56.5547ZM25.9005 30C34.0753 30 40.7008 23.284 40.7008 15C40.7008 6.71602 34.0753 0 25.9005 0C17.7256 0 11.1002 6.71602 11.1002 15C11.1002 23.284 17.7256 30 25.9005 30ZM70.5904 43.7461C70.8939 42.1055 70.8939 40.4062 70.5904 38.7656L73.5678 37.0078C73.9146 36.8174 74.0736 36.4072 73.958 36.0117C73.1775 33.4922 71.8478 31.1918 70.1134 29.2875C69.8532 28.9945 69.4196 28.9213 69.0728 29.1264L66.0954 30.8701C64.8373 29.7861 63.392 28.9365 61.831 28.3799V24.8789C61.831 24.4834 61.542 24.1318 61.1662 24.0586C58.5935 23.4727 55.963 23.4873 53.5059 24.0586C53.1301 24.1318 52.8555 24.4834 52.8555 24.8789V28.3805C51.2945 28.9371 49.8492 29.7867 48.5911 30.8707L45.6033 29.1211C45.2709 28.916 44.8373 28.9893 44.5627 29.2822C42.8283 31.1865 41.4986 33.4869 40.732 36.0064C40.6163 36.402 40.7753 36.8121 41.1078 37.0025L44.0852 38.7604C43.7961 40.401 43.7961 42.1002 44.0852 43.7408L41.1078 45.4986C40.7609 45.6891 40.6163 46.0992 40.732 46.4947C41.498 49.0143 42.8283 51.2994 44.5627 53.2189C44.8373 53.5119 45.2565 53.5852 45.6033 53.3801L48.5958 51.6363C49.8538 52.7203 51.2991 53.5699 52.8601 54.1266V57.6281C52.8601 58.0236 53.1347 58.3752 53.5105 58.4484C56.0982 59.0344 58.7137 59.0197 61.1708 58.4484C61.5466 58.3752 61.8357 58.0236 61.8357 57.6281V54.1266C63.3966 53.5699 64.842 52.7203 66.1 51.6363L69.0774 53.3801C69.4098 53.5852 69.8579 53.5119 70.118 53.2189C71.8524 51.3146 73.1821 49.0143 73.9626 46.4947C74.0783 46.0992 73.9193 45.6891 73.5724 45.4986L70.5904 43.7461ZM57.3511 46.9336C54.258 46.9336 51.7431 44.3848 51.7431 41.25C51.7431 38.1152 54.258 35.5664 57.3511 35.5664C60.4441 35.5664 62.959 38.1152 62.959 41.25C62.959 44.3848 60.4499 46.9336 57.3511 46.9336Z" fill="url(#paint0_linear_304_443)"></path><defs><linearGradient id="paint0_linear_304_443" x1="0" y1="30" x2="73.9988" y2="30" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Tablas de usuarios</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col l6 caja_vista ">
                    <a href="Registromateria.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="85" viewBox="0 0 80 85" fill="none"><path d="M19.28 60.7143L36 69.9429V80.9524H8C3.56 80.9524 0 77.35 0 72.8571V8.09524C0 5.94825 0.842854 3.88919 2.34315 2.37104C3.84344 0.852888 5.87827 0 8 0H12V28.3333L22 22.2619L32 28.3333V0H56C58.1217 0 60.1566 0.852888 61.6569 2.37104C63.1571 3.88919 64 5.94825 64 8.09524V42.6619L58 39.3429L19.28 60.7143ZM80 60.7143L58 48.5714L36 60.7143L58 72.8571L80 60.7143ZM44 69.1738V77.269L58 85L72 77.269V69.1738L58 76.9048L44 69.1738Z" fill="url(#paint0_linear_15_250)"></path><defs><linearGradient id="paint0_linear_15_250" x1="0" y1="42.5" x2="79.9988" y2="42.5" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Crear Materias</p>
                    </a>
                </div>
                <div class="col l6 caja_vista ">
                    <a href="Materias.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="84" viewBox="0 0 74 84" fill="none"><path d="M74 55.125V7.875C74 3.5257 70.4487 0 66.0714 0H58.1429V31.3523C58.1429 33.5524 55.5793 34.778 53.9969 33.4015L44.9286 26.25L35.8603 33.5508C34.2746 34.9125 31.7143 33.6984 31.7143 31.3523V0H15.8571C7.09937 0 0 7.05141 0 15.75V68.25C0 76.9486 7.09937 84 15.8571 84H68.7143C71.633 84 74 81.649 74 78.75C74 76.8272 72.9087 75.2194 71.3571 74.3039V60.9558C72.9759 59.5219 74 57.4547 74 55.125V55.125ZM63.4286 73.5H15.8571C12.9384 73.5 10.5714 71.149 10.5714 68.25C10.5714 65.351 12.9384 63 15.8571 63H63.4286V73.5Z" fill="url(#paint0_linear_305_445)"></path><defs><linearGradient id="paint0_linear_305_445" x1="0" y1="42" x2="73.9988" y2="42" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Tablas de materias</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col l6 caja_vista ">
                    <a href="Asignarmaterias.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="85" viewBox="0 0 80 85" fill="none"><path d="M19.28 60.7143L36 69.9429V80.9524H8C3.56 80.9524 0 77.35 0 72.8571V8.09524C0 5.94825 0.842854 3.88919 2.34315 2.37104C3.84344 0.852888 5.87827 0 8 0H12V28.3333L22 22.2619L32 28.3333V0H56C58.1217 0 60.1566 0.852888 61.6569 2.37104C63.1571 3.88919 64 5.94825 64 8.09524V42.6619L58 39.3429L19.28 60.7143ZM80 60.7143L58 48.5714L36 60.7143L58 72.8571L80 60.7143ZM44 69.1738V77.269L58 85L72 77.269V69.1738L58 76.9048L44 69.1738Z" fill="url(#paint0_linear_15_250)"></path><defs><linearGradient id="paint0_linear_15_250" x1="0" y1="42.5" x2="79.9988" y2="42.5" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Asignar materias</p>
                    </a>
                </div>
                <div class="col l6 caja_vista ">
                    <a href="materiasasignadas.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="84" viewBox="0 0 74 84" fill="none"><path d="M74 55.125V7.875C74 3.5257 70.4487 0 66.0714 0H58.1429V31.3523C58.1429 33.5524 55.5793 34.778 53.9969 33.4015L44.9286 26.25L35.8603 33.5508C34.2746 34.9125 31.7143 33.6984 31.7143 31.3523V0H15.8571C7.09937 0 0 7.05141 0 15.75V68.25C0 76.9486 7.09937 84 15.8571 84H68.7143C71.633 84 74 81.649 74 78.75C74 76.8272 72.9087 75.2194 71.3571 74.3039V60.9558C72.9759 59.5219 74 57.4547 74 55.125V55.125ZM63.4286 73.5H15.8571C12.9384 73.5 10.5714 71.149 10.5714 68.25C10.5714 65.351 12.9384 63 15.8571 63H63.4286V73.5Z" fill="url(#paint0_linear_305_445)"></path><defs><linearGradient id="paint0_linear_305_445" x1="0" y1="42" x2="73.9988" y2="42" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Tablas de materias asignadas</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col l6 caja_vista">
                    <a href="cerrar_sesion.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="54" viewBox="0 0 50 54" fill="none"><path d="M23.3018 0.187004C21.5021 0.678371 20.1551 1.9852 19.6803 3.72066C19.4374 4.61976 19.4374 25.3617 19.6803 26.2608C19.9343 27.1703 20.3538 27.8813 21.0494 28.5399C23.092 30.474 26.3159 30.474 28.3585 28.5399C29.0541 27.8813 29.4736 27.1703 29.7275 26.2608C29.9815 25.3512 29.9704 4.61976 29.7275 3.69975C28.9878 1.02337 26.0841 -0.565727 23.3018 0.187004Z" fill="url(#paint0_linear_226_284)"></path><path d="M9.56697 12.304C8.1979 12.649 7.08277 13.4958 5.37144 15.5345C-1.91554 24.1804 -1.77201 36.5796 5.70266 45.0583C16.335 57.1229 36.1092 56.0879 45.3284 42.9987C47.2826 40.2282 48.6075 36.9141 49.1706 33.4432C49.4356 31.7809 49.4466 28.4982 49.1816 26.8568C48.4529 22.3509 46.5981 18.4095 43.606 15.0326C42.4357 13.7154 41.6297 13.0358 40.7795 12.6385C37.3569 11.039 33.3049 13.4435 33.3159 17.0817C33.3159 18.4513 33.7355 19.3295 35.0935 20.8036C36.5619 22.3927 37.3127 23.4904 37.9531 25.0168C40.5366 31.1327 38.1518 38.0851 32.2781 41.5873C27.2545 44.5669 20.7735 44.2846 16.0369 40.8764C14.4691 39.7578 12.7909 37.8446 11.8966 36.1614C10.2846 33.1505 9.98653 29.2927 11.0796 25.9891C11.7199 24.0863 12.6474 22.5913 14.3035 20.8036C14.8556 20.2077 15.4186 19.5072 15.5511 19.2354C16.5338 17.2804 16.1473 15.0745 14.5574 13.5795C13.2325 12.3249 11.3998 11.8544 9.56697 12.304Z" fill="url(#paint1_linear_226_284)"></path><defs><linearGradient id="paint0_linear_226_284" x1="19.4982" y1="14.9952" x2="29.9137" y2="14.9952" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient><linearGradient id="paint1_linear_226_284" x1="0" y1="32.8157" x2="49.3742" y2="32.8157" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Cerrar sesión</p>
                    </a>
                </div>
            </div>

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.datepicker').datepicker();
            });
                $(document).ready(function(){
                $('.parallax').parallax();
            });
            $(document).ready(function() {
                $('input#input_text, textarea#textarea2').characterCounter();
            });
            
            $('.dropdown-trigger').dropdown();	
            </script>
    </body>
</html>
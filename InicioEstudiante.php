<?php
 session_start();
 $pagina="estudiante";
 $inicio=true;
 $notas=false;
 $actividades=false;
 $perfil=false;
 include("Config.php");
 include("validacion_sesion.php");
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
          include('menu_lateral.php');
          $inicio=true;
        ?>  
    <div class="container">
        <div class="row caja_bienvenido">	
         <div class=" col l9"">
          <div class="bienvenido row">
             <div class="texto_bienvenidia col l7">
              <h2>Bienvenido al la plaforma virtual de Sysdatec </h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, iusto accusantium? Quaerat eaque veniam expedita. Odit, saepe ea aspernatur, suscipit quia amet quaerat voluptatem laudantium corrupti expedita cum, at laborum!    </p>
             </div>
             <div class="col l4 animacion">
              <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
              <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_DMgKk1.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop     autoplay></lottie-player>
             </div>
          </div>
          <div class="row vistarapida">
            <h2>Vista rapida</h2>
            <div class="row cajas">
                <div class="col l6 caja_vista ">
                    <a href="Mis materias.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="84" viewBox="0 0 73 84" fill="none"><path d="M72.0796 17.2818C71.806 17.0633 71.4778 16.9228 71.1301 16.8756C70.7824 16.8283 70.4283 16.8759 70.1058 17.0134L38.6948 30.5407C37.3291 31.1325 35.6187 31.4139 33.8628 31.4139C31.4143 31.4236 28.8813 30.8577 27.1156 30.088C26.5775 29.8626 26.0652 29.5807 25.5873 29.2472C25.7174 29.1825 25.88 29.1114 26.0588 29.0402L54.6279 16.7385L58.8876 18.5495V13.2556C58.894 12.8781 58.8146 12.504 58.6552 12.1613C58.4959 11.8186 58.2607 11.5162 57.9674 11.2765C57.6949 11.0582 57.3678 10.9179 57.0212 10.8706C56.6746 10.8233 56.3216 10.8708 56.0001 11.0081L24.5891 24.5354C23.6201 24.9235 22.7876 25.4021 22.0853 26.0974C21.272 26.8954 20.8101 27.9816 20.8009 29.1178C20.8009 29.1502 20.8106 29.2051 20.8106 29.2051V76.8402L20.8041 76.9049C20.8041 76.9178 20.8139 76.9243 20.8139 76.9372V76.9889H20.8204C20.8854 78.6544 21.7308 79.7151 22.5373 80.4654C25.0736 82.6903 29.3332 83.9353 33.866 84C36.0121 84 38.1908 83.6766 40.2068 82.8164L71.6276 69.2858C72.4567 68.9301 72.9998 68.0473 72.9998 67.048V19.261C73.0048 18.8837 72.9247 18.51 72.7655 18.1675C72.6062 17.825 72.3719 17.5224 72.0796 17.2818ZM52.1566 8.22696C52.1014 7.51551 51.8055 6.83639 51.2787 6.42892C51.0051 6.21037 50.6769 6.06994 50.3292 6.02266C49.9815 5.97537 49.6275 6.02303 49.3049 6.16051L17.8939 19.6814C16.5282 20.2699 14.8146 20.5545 13.0619 20.5545C10.6134 20.561 8.08038 19.995 6.31472 19.2222C5.77612 19.0005 5.26362 18.7207 4.78644 18.3878C4.91651 18.3231 5.07909 18.252 5.25794 18.1808L33.8303 5.87916L38.0899 7.69014V2.40274C38.0957 2.025 38.0157 1.65083 37.8558 1.30814C37.6959 0.965451 37.4603 0.66309 37.1665 0.423608C36.8934 0.205337 36.5657 0.0650501 36.2186 0.0177685C35.8715 -0.0295131 35.518 0.017992 35.196 0.155196L3.78493 13.6857C2.81594 14.0738 1.98676 14.5492 1.28115 15.2477C0.469024 16.0462 0.00831875 17.1324 0 18.2682C0 18.307 0.00975427 18.3587 0.00975427 18.3587V66.1458H0.0162587C0.0812919 67.8112 0.926723 68.8719 1.73314 69.6222C4.26943 71.8471 8.52911 73.0889 13.0652 73.1536C14.297 73.1463 15.5249 73.0141 16.7298 72.759V29.2019C16.6973 26.9382 17.6077 24.765 19.2076 23.1998C20.3159 22.1306 21.6328 21.2985 23.077 20.755L52.1566 8.22696Z" fill="url(#paint0_linear_15_241)"></path><defs><linearGradient id="paint0_linear_15_241" x1="0" y1="42" x2="72.9989" y2="42" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Mis Materias</p>
                    </a>
                </div>
                <div class="col l6 caja_vista ">
                    <a href="Mis notas.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="85" viewBox="0 0 80 85" fill="none"><path d="M19.28 60.7143L36 69.9429V80.9524H8C3.56 80.9524 0 77.35 0 72.8571V8.09524C0 5.94825 0.842854 3.88919 2.34315 2.37104C3.84344 0.852888 5.87827 0 8 0H12V28.3333L22 22.2619L32 28.3333V0H56C58.1217 0 60.1566 0.852888 61.6569 2.37104C63.1571 3.88919 64 5.94825 64 8.09524V42.6619L58 39.3429L19.28 60.7143ZM80 60.7143L58 48.5714L36 60.7143L58 72.8571L80 60.7143ZM44 69.1738V77.269L58 85L72 77.269V69.1738L58 76.9048L44 69.1738Z" fill="url(#paint0_linear_15_250)"></path><defs><linearGradient id="paint0_linear_15_250" x1="0" y1="42.5" x2="79.9988" y2="42.5" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Mis Notas</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col l6 caja_vista ">
                    <a href="Mis actividades.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="74" viewBox="0 0 74 74" fill="none"><path d="M50.874 13.875C50.874 6.21194 44.6622 0 36.9993 0C29.3364 0 23.1245 6.21194 23.1245 13.875C23.1245 21.538 29.3364 27.7499 36.9993 27.7499C44.6622 27.7499 50.874 21.538 50.874 13.875ZM33.7604 34.8464C25.1855 29.597 11.2963 28.1546 4.30695 27.7572C1.95836 27.6242 0 29.4135 0 31.6725V63.874C0 65.9451 1.67508 67.6722 3.82856 67.7835C10.1387 68.1145 22.9049 69.3271 31.7283 73.7715C33.0826 74.4536 34.6883 73.5243 34.6883 72.0559V36.5027C34.6868 35.8278 34.353 35.2092 33.7604 34.8464ZM69.6916 27.7572C62.7037 28.1532 48.813 29.597 40.2396 34.8464C39.647 35.2092 39.3132 35.8523 39.3132 36.5273V72.0515C39.3132 73.5243 40.9232 74.4551 42.2818 73.7715C51.1038 69.3315 63.8628 68.1188 70.1714 67.7879C72.3249 67.6751 74 65.948 74 63.8769V31.6725C73.9986 29.4135 72.0402 27.6242 69.6916 27.7572Z" fill="url(#paint0_linear_15_252)"></path><defs><linearGradient id="paint0_linear_15_252" x1="0" y1="37" x2="73.9988" y2="37" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Mis actividades</p>
                    </a>
                </div>
                <div class="col l6 caja_vista ">
                    <a href="Perfil.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="81" viewBox="0 0 75 81" fill="none"><path d="M34.2914 0.0625992C34.1135 0.10881 33.3857 0.247437 32.6741 0.370663C24.2477 1.91096 17.2607 8.85774 15.8536 17.0676C15.5463 18.9159 15.5463 21.9657 15.8536 23.7987C17.3254 32.4398 24.5226 39.2633 33.7254 40.7112C35.5206 41.0039 38.7553 41.0039 40.6314 40.7112C49.3166 39.3712 56.3844 32.9173 58.2606 24.6151C58.6811 22.7667 58.6811 18.1458 58.2606 16.2974C56.4491 8.33403 50.0121 2.14201 41.6504 0.355259C40.4697 0.0934067 35.0678 -0.106834 34.2914 0.0625992Z" fill="url(#paint0_linear_15_242)"></path><path d="M19.3307 43.8209C14.0582 44.8837 9.59429 47.148 5.90673 50.6137C3.46453 52.9087 0.860599 56.4822 0.148965 58.5C-0.190678 59.4858 -0.0289434 59.9325 1.47519 62.0427C7.10357 69.9753 15.6917 75.9517 25.0723 78.4778C31.7843 80.2645 39.0139 80.5418 45.6289 79.2633C52.2277 77.9849 58.7456 75.0583 63.9049 71.0997C67.1235 68.6352 71.28 64.1683 73.3988 60.9183C74.4986 59.2085 74.4986 59.1315 73.4473 57.1599C69.7436 50.2286 62.4493 45.0994 54.3787 43.7439C52.3409 43.405 51.6454 43.5437 49.8502 44.6681C45.8553 47.1634 41.7957 48.334 37.1216 48.334C32.3342 48.334 28.4849 47.1942 24.0372 44.4524C22.8242 43.6977 22.5978 43.6207 21.6921 43.5899C21.1583 43.5591 20.0909 43.6669 19.3307 43.8209Z" fill="url(#paint1_linear_15_242)"></path><defs><linearGradient id="paint0_linear_15_242" x1="15.6232" y1="20.4654" x2="58.5753" y2="20.4654" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient><linearGradient id="paint1_linear_15_242" x1="0" y1="61.818" x2="74.2286" y2="61.818" gradientUnits="userSpaceOnUse"><stop stop-color="#42BFE6"></stop><stop offset="1" stop-color="#34BC83"></stop></linearGradient></defs></svg>
                    <p>Mi cuenta</p>
                    </a>
                </div>
            </div>
          </div>
         </div>
         <div class="col l4 banner">
          <img class="responsive-img banner" src="img/Group 1000001079.jpg">
         </div>
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
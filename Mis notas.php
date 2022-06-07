<?php
session_start();
 $pagina="estudiante";
 $inicio=false;
 $notas=true;
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
         <div class=" col l6 caja_actividad">
          <div class="bienvenido row">
             <div class="texto_bienvenidia col">
              <h2>Mis notas</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, iusto accusantium? Quaerat eaque veniam expedita. Odit, saepe ea aspernatur, suscipit quia amet quaerat voluptatem laudantium corrupti expedita cum, at laborum!    </p>
             </div>

          </div>
         </div>
         <div class="col l6 animacion actividades">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_oojuetow.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop autoplay></lottie-player>
        </div>
        </div>
        <div class="row vistarapida">
            <div class="row cajas">
                <div class="col l6 caja_vista caja_nota">
                    <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="49" viewBox="0 0 52 49" fill="none"><path d="M32 36H20C20.2797 36 20.5053 38.6878 20.5053 41.9989C20.5053 45.3122 20.2805 48 20 48H32C31.7211 48 31.4947 45.3122 31.4947 41.9989C31.4962 38.6878 31.7211 36 32 36Z" fill="#BFBEBE"></path><path d="M24.4632 36H20C20.2971 36 20.5368 38.6878 20.5368 41.9989C20.5368 45.3122 20.2979 48 20 48H24.4632C24.7603 48 25 45.3122 25 41.9989C25 38.6878 24.7603 36 24.4632 36Z" fill="#AEAEAE"></path><path d="M51 36.0562C51 39.3397 48.5598 42 45.5548 42H5.44763C2.43939 42 0 39.3397 0 36.0562V5.93973C0 2.66197 2.43939 0 5.44763 0H45.5548C48.5598 0 51 2.65953 51 5.93973V36.0562Z" fill="#D1D2D2"></path><path d="M10.4715 36.0562V5.93973C10.4715 2.66197 12.9475 0 16 0H5.52931C2.47597 0 0 2.65953 0 5.93973V36.0562C0 39.3397 2.47597 42 5.52931 42H16C12.9475 42 10.4715 39.3388 10.4715 36.0554" fill="#C6C5C5"></path><path d="M51.4953 27.412C51.4953 30.6593 49.0437 33.2958 46.0246 33.2958H5.73015C2.70787 33.2958 0.25708 30.6617 0.25708 27.412V5.88783C0.25708 2.63486 2.70787 0 5.73015 0H46.0246C49.0437 0 51.4953 2.63486 51.4953 5.88783V27.412Z" fill="#243438"></path><path d="M0.254639 25.892H51.4961V35.0288H0.254639V25.892Z" fill="#243438"></path><path d="M47.3477 3H4.64592C4.29353 3 4 3.19752 4 3.43535V31.5646C4 31.8033 4.29353 32 4.64592 32H47.3477C47.5394 32 47.685 31.9589 47.7908 31.8863L47.8067 31.8702C47.8067 31.8702 47.8194 31.8605 47.8226 31.8517C47.8748 31.8242 47.9187 31.7831 47.9499 31.7326C47.9811 31.6822 47.9984 31.6242 48 31.5646V3.44099C47.9968 3.20316 47.7001 3.00564 47.3477 3.00564" fill="#58C5E8"></path><path d="M26.6257 21.7972C33.7664 26.1331 40.7424 29.0855 48 30.8713V3.43536C48 3.19753 47.7033 3 47.3508 3H8.16301C12.1884 10.6874 19.1159 17.238 26.6273 21.7972H26.6257ZM26.683 26.4016C18.0674 21.6456 9.44143 15.0579 4 6.9231V31.5646C4 31.8033 4.29355 32 4.64597 32H39.5005C35.2429 30.6093 30.9971 28.7864 26.6846 26.4048" fill="#28A6DE"></path><path d="M35 48C35 48.5515 34.7281 49 34.3943 49H16.6089C16.2719 49 16 48.5515 16 48C16 47.4478 16.2719 47 16.6089 47H34.3943C34.7281 46.9977 35 47.447 35 48Z" fill="#D1D2D2"></path><path d="M22.4063 48C22.4063 47.4478 22.6728 47 23 47H16.5937C16.2657 47 16 47.4478 16 48C16 48.5515 16.2665 49 16.5937 49H23C22.6728 49 22.4063 48.5515 22.4063 48Z" fill="#C6C5C5"></path><path d="M27.9069 37.072C27.8296 37.0031 27.7168 36.9833 27.5629 37.0244L26.6769 37.2348C26.4008 37.3044 26.2611 37.4738 26.2611 37.7465L26.258 38.6269C26.258 38.7545 26.2888 38.849 26.3503 38.9033C26.3763 38.9265 26.4071 38.9445 26.4409 38.9562C26.4747 38.968 26.5107 38.9731 26.5467 38.9714C26.5941 38.9714 26.6383 38.9619 26.6951 38.9517L27.5803 38.742C27.8564 38.6731 27.9968 38.503 28 38.2266V37.3491C27.9976 37.2194 27.9669 37.1263 27.9069 37.072ZM27.4367 38.0742C27.4367 38.1717 27.3878 38.2318 27.2876 38.2574L26.9736 38.3337C26.9564 38.3369 26.939 38.3388 26.9215 38.3395C26.8957 38.34 26.8705 38.332 26.8505 38.3168C26.83 38.2985 26.8166 38.264 26.8205 38.2142V37.9012C26.8205 37.8037 26.8694 37.7435 26.968 37.7186L27.286 37.6424C27.3404 37.6307 27.3815 37.6365 27.4051 37.6592C27.4288 37.679 27.4391 37.712 27.4391 37.7589V38.0749H27.4367V38.0742ZM25.7373 37.7428C25.7373 37.4701 25.5992 37.3 25.3207 37.2311L24.4355 37.0207C24.2824 36.9797 24.1688 37.0017 24.0955 37.0684C24.0308 37.1226 24 37.2157 24 37.3448L24.0032 38.2208C24.0063 38.4971 24.1444 38.668 24.4197 38.7361L25.3081 38.9465C25.3602 38.9612 25.4091 38.9663 25.4517 38.9663C25.4878 38.9681 25.5239 38.9629 25.5577 38.9511C25.5915 38.9392 25.6223 38.9209 25.6481 38.8974C25.7097 38.8439 25.7404 38.7501 25.7404 38.621L25.7373 37.7428ZM25.1487 38.3131C25.1329 38.3285 25.1093 38.3359 25.0785 38.3359C25.0785 38.3359 25.0446 38.3329 25.0264 38.33L24.7108 38.2538C24.613 38.2281 24.5609 38.168 24.5609 38.0705V37.7545C24.5609 37.7091 24.5736 37.6754 24.5941 37.6548C24.6185 37.6321 24.6588 37.6263 24.7164 37.638L25.032 37.7142C25.1298 37.7391 25.1819 37.7993 25.1819 37.8968V38.2127C25.1819 38.2582 25.1819 38.2926 25.1487 38.3131ZM26.3598 39.9999C26.3755 39.9999 26.3905 39.997 26.4118 39.9904L26.7274 39.9149C26.8252 39.8937 26.8773 39.8306 26.8773 39.7302V39.4179C26.8786 39.382 26.8678 39.3467 26.8465 39.3167C26.8189 39.2918 26.7755 39.2889 26.7243 39.3013L26.4055 39.3768C26.3077 39.3996 26.258 39.4619 26.258 39.5616L26.2548 39.8761C26.2548 39.9215 26.2675 39.9523 26.2888 39.9721C26.3045 39.9912 26.329 39.9999 26.3598 39.9999ZM25.6394 39.9999C25.6206 39.9997 25.6019 39.9965 25.5842 39.9904L25.2686 39.9149C25.1708 39.8937 25.1211 39.8306 25.1211 39.7302L25.1179 39.4179C25.1179 39.3717 25.1306 39.3409 25.1519 39.3167C25.1763 39.2918 25.2189 39.2889 25.271 39.3013L25.5929 39.3768C25.6884 39.3996 25.7404 39.4619 25.7404 39.5616V39.8761C25.7404 39.9215 25.7278 39.9523 25.7097 39.9721C25.7009 39.9812 25.69 39.9885 25.6779 39.9933C25.6658 39.9981 25.6526 40.0004 25.6394 39.9999Z" fill="#243438"></path></svg>
                    <p>Logica de programación</p>
                    </a>
                </div>
                <div class="col l6 caja_vista caja_nota">
                    <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="auto" viewBox="0 0 213 156" fill="none"><path d="M19.6982 126.767H194.271C197.098 126.767 199.218 124.647 199.218 121.82V5.20258C199.218 2.3755 197.098 0.255188 194.271 0.255188H19.6982C17.2245 0.255188 15.1042 2.3755 15.1042 5.20258V121.82C15.1042 124.647 17.2245 126.767 19.6982 126.767ZM0.96875 144.083C0.96875 149.737 5.56276 155.745 11.5703 155.745H202.398C208.053 155.745 213 149.737 213 144.083H0.96875Z" fill="#212528"></path><path d="M195.331 126.767H18.638L0.96875 144.083H213L195.331 126.767Z" fill="#DDDDDD"></path><path d="M189.323 128.181H24.6457L18.6382 135.248H195.331L189.323 128.181Z" fill="#BFBEBE"></path><path d="M125.008 138.429H88.9623L86.1353 142.316H127.835L125.008 138.429Z" fill="#212528"></path><path d="M25.7056 10.8568H188.263V116.166H25.7056V10.8568Z" fill="#EFEFEF"></path><path d="M106.985 8.73638C108.547 8.73638 109.812 7.47066 109.812 5.9093C109.812 4.34795 108.547 3.08221 106.985 3.08221C105.424 3.08221 104.158 4.34795 104.158 5.9093C104.158 7.47066 105.424 8.73638 106.985 8.73638Z" fill="#DDDDDD"></path><path d="M122.18 151.504H91.7891C90.7289 151.504 87.9019 151.504 87.9019 147.97H126.067C126.067 151.504 123.24 151.504 122.18 151.504" fill="#3E4347"></path><path d="M142.568 31.9388L125.871 23.8991C124.927 23.4451 123.867 23.2954 122.835 23.4708C121.803 23.6461 120.851 24.1379 120.111 24.878L65.4481 74.7176C63.978 76.0584 63.9799 78.373 65.4519 79.7115L69.917 83.7705C70.5003 84.3009 71.2508 84.6104 72.0384 84.6455C72.8261 84.6805 73.6011 84.4389 74.2292 83.9624L140.056 34.0246C142.264 32.3494 145.436 33.9245 145.436 36.6963V36.5025C145.436 35.549 145.167 34.6148 144.66 33.8075C144.152 33.0002 143.427 32.3525 142.568 31.9388V31.9388Z" fill="#0065A9"></path><path d="M142.568 95.4809L125.871 103.521C124.927 103.975 123.867 104.124 122.835 103.949C121.803 103.773 120.851 103.282 120.111 102.542L65.4481 52.7021C63.978 51.3616 63.9799 49.0467 65.4519 47.7085L69.917 43.6492C70.5004 43.1189 71.2509 42.8094 72.0385 42.7744C72.8261 42.7394 73.6011 42.9811 74.2292 43.4576L140.056 93.3951C142.264 95.0703 145.436 93.4952 145.436 90.7231V90.9172C145.436 91.8707 145.167 92.8048 144.66 93.6122C144.152 94.4195 143.427 95.0672 142.568 95.4809V95.4809Z" fill="#007ACC"></path><path d="M125.818 103.527C124.874 103.981 123.814 104.13 122.782 103.954C121.75 103.779 120.798 103.287 120.058 102.547C121.927 104.416 125.123 103.092 125.123 100.449V26.9811C125.123 24.3377 121.927 23.014 120.058 24.883C120.798 24.1429 121.75 23.651 122.782 23.4754C123.813 23.2999 124.874 23.4492 125.818 23.9029L142.513 31.9315C143.372 32.3449 144.098 32.9927 144.605 33.8002C145.113 34.6077 145.383 35.5422 145.382 36.4961V90.9343C145.382 92.8808 144.267 94.6554 142.513 95.4989L125.818 103.527V103.527Z" fill="#1F9CF0"></path></svg>
                    <p>Programación</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col l6 caja_vista caja_nota">
                    <a href="Mis actividades.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="64" viewBox="0 0 32 64" fill="none"><path d="M31.287 59.344C31.287 61.768 28.588 63.735 25.267 63.735H6.02C2.696 63.735 0 61.768 0 59.344V4.387C0 1.965 2.699 0 6.02 0H25.266C28.59 0 31.286 1.965 31.286 4.387V59.344H31.287Z" fill="#A7A8AC"></path><path d="M11.779 59.344V4.387C11.779 1.966 14.479 0 17.809 0H6.02195C2.69795 0 0.00195312 1.965 0.00195312 4.387V59.344C0.00195312 61.768 2.70195 63.735 6.02195 63.735H17.809C14.484 63.734 11.779 61.768 11.779 59.344Z" fill="#D1D2D3"></path><path d="M17.1279 56.626V51.511C17.1279 51.471 17.0989 51.431 17.0659 51.431H13.1098C13.0798 51.431 13.0479 51.471 13.0479 51.511V56.626C13.0479 56.645 13.0569 56.664 13.0629 56.677H13.0679C13.0789 56.691 13.0928 56.701 13.1098 56.701H17.0659C17.0979 56.701 17.1279 56.664 17.1279 56.626Z" fill="#243438"></path><path d="M26.6869 35.873V27.326C26.6869 27.26 26.5379 27.198 26.3559 27.198H4.92988C4.75788 27.198 4.59888 27.26 4.59888 27.326V35.873C4.59888 35.911 4.64388 35.941 4.68388 35.96C4.68388 35.96 4.69388 35.96 4.69388 35.968H4.70488C4.75788 35.988 4.84488 36.004 4.92988 36.004H26.3559C26.5379 36.004 26.6869 35.942 26.6869 35.873Z" fill="#324449"></path><path d="M16.377 47.464V44.222C16.377 44.196 16.36 44.171 16.338 44.171H13.835C13.814 44.171 13.797 44.195 13.797 44.222V47.464C13.7973 47.4749 13.8012 47.4855 13.808 47.494V47.498C13.814 47.506 13.823 47.508 13.834 47.508H16.337C16.36 47.508 16.377 47.486 16.377 47.464ZM28.397 11.784C28.397 12.257 22.688 12.639 15.641 12.639C8.59401 12.639 2.88501 12.257 2.88501 11.784C2.88501 11.315 8.59401 10.933 15.641 10.933C22.688 10.933 28.397 11.315 28.397 11.784Z" fill="#243438"></path></svg>
                    <p>Bases de datos</p>
                    </a>
                </div>
                <div class="col l6 caja_vista caja_nota">
                    <a href="Inglesnotas.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="56" viewBox="0 0 64 56" fill="none"><path d="M15.3309 36V36.0237C10.1217 36.3609 6 40.6972 6 46C6 51.3028 10.1217 55.6391 15.3309 55.9763V56H25V36H15.3309Z" fill="#D32A2A"></path><path d="M6.8754 19V19.0201C3.03704 19.3068 0 22.9926 0 27.5C0 32.0074 3.03692 35.6931 6.8754 35.9799V36H14V19H6.8754Z" fill="#132028"></path><path d="M18.109 0V0.0224048C13.5819 0.342806 10 4.4623 10 9.5C10 14.5377 13.5819 18.6572 18.109 18.9776V19H28V0H18.109Z" fill="#005877"></path><path d="M57.9165 14.9273V4.07295C57.9165 3.79954 58.0214 3.53734 58.2082 3.34402C58.3951 3.15069 58.6484 3.04208 58.9126 3.04208H61.0039C61.2681 3.04208 61.5214 2.93347 61.7083 2.74015C61.8951 2.54683 62 2.28462 62 2.01122V1.03086C62 0.757461 61.8951 0.495257 61.7083 0.301933C61.5214 0.108608 61.2681 0 61.0039 0H28.9961C28.7319 0 28.4786 0.108608 28.2918 0.301933C28.1049 0.495257 28 0.757461 28 1.03086V17.9691C28 18.2425 28.1049 18.5047 28.2918 18.6981C28.4786 18.8914 28.7319 19 28.9961 19H61.0039C61.2681 19 61.5214 18.8914 61.7083 18.6981C61.8951 18.5047 62 18.2425 62 17.9691V16.9888C62 16.7154 61.8951 16.4532 61.7083 16.2599C61.5214 16.0665 61.2681 15.9579 61.0039 15.9579H58.9126C58.7818 15.958 58.6523 15.9313 58.5314 15.8795C58.4106 15.8278 58.3008 15.7519 58.2083 15.6562C58.1158 15.5604 58.0424 15.4468 57.9923 15.3218C57.9423 15.1967 57.9165 15.0627 57.9165 14.9273Z" fill="#00B1FF"></path><path d="M53.2807 22.1619H59.6383C60.3903 22.1619 61 21.6769 61 21.0785V20.0834C61 19.4851 60.3903 19 59.6383 19H14.6941V19.0257C10.9516 19.3489 8 23.018 8 27.5C8 31.982 10.9516 35.6511 14.6941 35.9743V36H59.6383C60.3903 36 61 35.515 61 34.9166V33.8302C61 33.2319 60.3903 32.7468 59.6383 32.7468H53.2807C52.5287 32.7468 51.9191 32.2618 51.9191 31.6634V23.2449C51.9191 22.6469 52.5287 22.1619 53.2807 22.1619Z" fill="#445056"></path><path d="M56.8827 31.9795L56.6164 31.7208C56.5863 31.6893 56.5625 31.6518 56.5462 31.6105C56.53 31.5693 56.5216 31.525 56.5216 31.4804C56.5216 31.4357 56.53 31.3915 56.5462 31.3503C56.5625 31.309 56.5863 31.2715 56.6164 31.2399L56.9052 30.9364C56.9352 30.9049 56.9591 30.8674 56.9754 30.8261C56.9916 30.7849 57 30.7406 57 30.696C57 30.6513 56.9916 30.6071 56.9754 30.5658C56.9591 30.5246 56.9352 30.4871 56.9052 30.4555L56.6164 30.152C56.5863 30.1205 56.5625 30.083 56.5462 30.0417C56.53 30.0004 56.5216 29.9562 56.5216 29.9116C56.5216 29.8669 56.53 29.8227 56.5462 29.7814C56.5625 29.7402 56.5863 29.7027 56.6164 29.6711L56.9052 29.3676C56.9352 29.336 56.9591 29.2986 56.9754 29.2573C56.9916 29.216 57 29.1718 57 29.1272C57 29.0825 56.9916 29.0383 56.9754 28.997C56.9591 28.9558 56.9352 28.9183 56.9052 28.8867L56.6164 28.5832C56.5863 28.5516 56.5625 28.5141 56.5462 28.4729C56.53 28.4316 56.5216 28.3874 56.5216 28.3427C56.5216 28.2981 56.53 28.2539 56.5462 28.2126C56.5625 28.1714 56.5863 28.1339 56.6164 28.1023L56.9052 27.7988C56.9352 27.7672 56.9591 27.7297 56.9754 27.6885C56.9916 27.6472 57 27.603 57 27.5583C57 27.5137 56.9916 27.4695 56.9754 27.4282C56.9591 27.3869 56.9352 27.3495 56.9052 27.3179L56.6164 27.0144C56.5863 26.9828 56.5625 26.9453 56.5462 26.9041C56.53 26.8628 56.5216 26.8186 56.5216 26.7739C56.5216 26.7293 56.53 26.685 56.5462 26.6438C56.5625 26.6025 56.5863 26.565 56.6164 26.5335L56.9052 26.23C56.9352 26.1984 56.9591 26.1609 56.9754 26.1197C56.9916 26.0784 57 26.0342 57 25.9895C57 25.9449 56.9916 25.9006 56.9754 25.8594C56.9591 25.8181 56.9352 25.7806 56.9052 25.7491L56.6164 25.4456C56.5863 25.414 56.5625 25.3765 56.5462 25.3352C56.53 25.294 56.5216 25.2498 56.5216 25.2051C56.5216 25.1605 56.53 25.1162 56.5462 25.075C56.5625 25.0337 56.5863 24.9962 56.6164 24.9647L56.9052 24.6612C56.9352 24.6296 56.9591 24.5921 56.9754 24.5508C56.9916 24.5096 57 24.4654 57 24.4207C57 24.376 56.9916 24.3318 56.9754 24.2906C56.9591 24.2493 56.9352 24.2118 56.9052 24.1802L56.6164 23.8767C56.5863 23.8452 56.5625 23.8077 56.5462 23.7664C56.53 23.7252 56.5216 23.6809 56.5216 23.6363C56.5216 23.5916 56.53 23.5474 56.5462 23.5061C56.5625 23.4649 56.5863 23.4274 56.6164 23.3958L56.9052 23.0923C56.9352 23.0608 56.9591 23.0233 56.9754 22.982C56.9916 22.9408 57 22.8965 57 22.8519C57 22.8072 56.9916 22.763 56.9754 22.7217C56.9591 22.6805 56.9352 22.643 56.9052 22.6114L56.6164 22.3079C56.5863 22.2763 56.5625 22.2389 56.5462 22.1976C56.53 22.1563 56.5216 22.1121 56.5216 22.0675C56.5216 22.0228 56.53 21.9786 56.5462 21.9373C56.5625 21.8961 56.5863 21.8586 56.6164 21.827L56.9052 21.5235C57.0316 21.3907 57.0316 21.3249 56.9052 21.1922L56.3876 21.197H15.5346C15.1588 21.0669 14.7657 21.0004 14.3701 21C11.9565 21 10 23.4376 10 26.4447C10 29.4518 11.9565 31.8894 14.3701 31.8894V32H56.3878" fill="#DCE2E2"></path><path d="M28.3333 0C23.1786 0 19 4.25328 19 9.5C19 14.7467 23.1786 19 28.3333 19H33V0H28.3333Z" fill="#0074A8"></path><path d="M60.8934 5.16445C60.9237 5.13334 60.9478 5.09641 60.9642 5.05576C60.9807 5.01511 60.9891 4.97154 60.9891 4.92754C60.9891 4.88354 60.9807 4.83997 60.9642 4.79932C60.9478 4.75867 60.9237 4.72174 60.8934 4.69063L60.6016 4.39161C60.5712 4.3605 60.5471 4.32357 60.5307 4.28292C60.5143 4.24227 60.5058 4.1987 60.5058 4.1547C60.5058 4.1107 60.5143 4.06713 60.5307 4.02648C60.5471 3.98583 60.5712 3.9489 60.6016 3.91779L60.8934 3.61877C61.0211 3.4879 61.0415 3.13087 60.914 3H28.3425C24.8397 3 22 5.91018 22 9.5C22 13.0898 24.8397 16 28.3425 16H60.8948C61.0224 15.8691 61.0212 15.641 60.8935 15.5101L60.6017 15.2111C60.5713 15.18 60.5473 15.1431 60.5308 15.1024C60.5144 15.0618 60.5059 15.0182 60.5059 14.9742C60.5059 14.9302 60.5144 14.8866 60.5308 14.846C60.5473 14.8053 60.5713 14.7684 60.6017 14.7373L60.8935 14.4383C60.9238 14.4072 60.9479 14.3702 60.9644 14.3296C60.9808 14.2889 60.9893 14.2454 60.9893 14.2014C60.9893 14.1574 60.9808 14.1138 60.9644 14.0732C60.9479 14.0325 60.9238 13.9956 60.8935 13.9645L60.6017 13.6654C60.5713 13.6343 60.5473 13.5974 60.5308 13.5568C60.5144 13.5161 60.5059 13.4725 60.5059 13.4285C60.5059 13.3845 60.5144 13.341 60.5308 13.3003C60.5473 13.2597 60.5713 13.2227 60.6017 13.1916L60.8935 12.8926C60.9238 12.8615 60.9479 12.8246 60.9644 12.7839C60.9808 12.7433 60.9893 12.6997 60.9893 12.6557C60.9893 12.6117 60.9808 12.5681 60.9644 12.5275C60.9479 12.4868 60.9238 12.4499 60.8935 12.4188L60.6017 12.1198C60.5713 12.0887 60.5473 12.0517 60.5308 12.0111C60.5144 11.9704 60.5059 11.9269 60.5059 11.8829C60.5059 11.8389 60.5144 11.7953 60.5308 11.7546C60.5473 11.714 60.5713 11.677 60.6017 11.6459L60.8935 11.3469C60.9238 11.3158 60.9479 11.2789 60.9644 11.2382C60.9808 11.1976 60.9893 11.154 60.9893 11.11C60.9893 11.066 60.9808 11.0224 60.9644 10.9818C60.9479 10.9411 60.9238 10.9042 60.8935 10.8731L60.6017 10.5741C60.5713 10.543 60.5473 10.506 60.5308 10.4654C60.5144 10.4247 60.5059 10.3812 60.5059 10.3372C60.5059 10.2932 60.5144 10.2496 60.5308 10.209C60.5473 10.1683 60.5713 10.1314 60.6017 10.1003L60.8935 9.80124C60.9238 9.77013 60.9479 9.7332 60.9644 9.69255C60.9808 9.6519 60.9893 9.60833 60.9893 9.56433C60.9893 9.52033 60.9808 9.47676 60.9644 9.43611C60.9479 9.39546 60.9238 9.35853 60.8935 9.32742L60.6017 9.0284C60.5713 8.99729 60.5473 8.96035 60.5308 8.9197C60.5144 8.87906 60.5059 8.83549 60.5059 8.79149C60.5059 8.74749 60.5144 8.70392 60.5308 8.66327C60.5473 8.62262 60.5713 8.58569 60.6017 8.55458L60.8935 8.25555C60.9238 8.22445 60.9479 8.18751 60.9644 8.14686C60.9808 8.10621 60.9893 8.06264 60.9893 8.01864C60.9893 7.97465 60.9808 7.93108 60.9644 7.89043C60.9479 7.84978 60.9238 7.81284 60.8935 7.78174L60.6017 7.48271C60.5713 7.45161 60.5473 7.41467 60.5308 7.37402C60.5144 7.33337 60.5059 7.2898 60.5059 7.2458C60.5059 7.2018 60.5144 7.15824 60.5308 7.11759C60.5473 7.07694 60.5713 7.04 60.6017 7.00889L60.8935 6.70987C60.9238 6.67876 60.9479 6.64183 60.9644 6.60118C60.9808 6.56053 60.9893 6.51696 60.9893 6.47296C60.9893 6.42896 60.9808 6.38539 60.9644 6.34474C60.9479 6.30409 60.9238 6.26716 60.8935 6.23605L60.6017 5.93703C60.5713 5.90592 60.5473 5.86899 60.5308 5.82834C60.5144 5.78769 60.5059 5.74412 60.5059 5.70012C60.5059 5.65612 60.5144 5.61255 60.5308 5.5719C60.5473 5.53125 60.5713 5.49432 60.6017 5.46321L60.8934 5.16445Z" fill="#DCE2E2"></path><path d="M60.3904 39.202H62.8355C63.1443 39.202 63.4405 39.0877 63.6589 38.8842C63.8773 38.6808 64 38.4048 64 38.117V37.0851C64 36.7973 63.8773 36.5213 63.6589 36.3178C63.4405 36.1143 63.1443 36 62.8355 36H23.897C23.7984 36.0003 23.7004 36.0123 23.6051 36.0358C23.3148 36.0129 23.0237 36.001 22.7323 36C16.805 36 12 40.4771 12 46C12 51.5229 16.805 56 22.7323 56C23.0237 55.999 23.3148 55.9871 23.6051 55.9642C23.7004 55.9876 23.7985 55.9996 23.897 56H62.8354C63.1442 56 63.4404 55.8857 63.6588 55.6822C63.8772 55.4787 63.9999 55.2027 63.9999 54.9149V53.883C63.9999 53.5952 63.8772 53.3192 63.6588 53.1158C63.4404 52.9123 63.1442 52.7979 62.8354 52.7979H60.3903C60.0814 52.7979 59.7852 52.6836 59.5668 52.4801C59.3484 52.2767 59.2257 52.0007 59.2257 51.7129V40.2872C59.2259 39.6879 59.7473 39.202 60.3904 39.202Z" fill="#FF473E"></path><path d="M62.8953 40.5642C62.9623 40.4947 63 40.4004 63 40.302C63 40.2037 62.9623 40.1094 62.8953 40.0399L62.5763 39.709C62.5092 39.6395 62.4716 39.5452 62.4716 39.4469C62.4716 39.3485 62.5092 39.2542 62.5763 39.1847L62.8953 38.8539C62.9623 38.7843 63 38.69 63 38.5917C63 38.4934 62.9623 38.399 62.8953 38.3295L62.5855 38H24.2321C20.2379 38 17 41.3579 17 45.5C17 49.6421 20.2379 53 24.2321 53H62.4499L62.8953 52.5381C62.9623 52.4685 63 52.3742 63 52.2759C63 52.1775 62.9623 52.0832 62.8953 52.0137L62.5763 51.6829C62.5092 51.6133 62.4716 51.519 62.4716 51.4207C62.4716 51.3224 62.5092 51.2281 62.5763 51.1585L62.8953 50.8277C62.9623 50.7581 63 50.6638 63 50.5655C63 50.4671 62.9623 50.3728 62.8953 50.3032L62.5763 49.9724C62.5092 49.9029 62.4716 49.8086 62.4716 49.7102C62.4716 49.6119 62.5092 49.5176 62.5763 49.4481L62.8953 49.1172C62.9623 49.0477 63 48.9534 63 48.8551C63 48.7567 62.9623 48.6624 62.8953 48.5929L62.5763 48.2621C62.5093 48.1925 62.4716 48.0982 62.4716 47.9998C62.4716 47.9015 62.5093 47.8072 62.5763 47.7376L62.8953 47.4068C62.9623 47.3372 63 47.2429 63 47.1446C63 47.0463 62.9623 46.9519 62.8953 46.8824L62.5763 46.5516C62.5092 46.4821 62.4716 46.3877 62.4716 46.2894C62.4716 46.1911 62.5092 46.0968 62.5763 46.0272L62.8953 45.6964C62.9623 45.6268 63 45.5325 63 45.4342C63 45.3358 62.9623 45.2415 62.8953 45.1719L62.5763 44.8411C62.5092 44.7716 62.4716 44.6773 62.4716 44.5789C62.4716 44.4806 62.5092 44.3863 62.5763 44.3168L62.8953 43.9859C62.9623 43.9164 63 43.8221 63 43.7238C63 43.6254 62.9623 43.5311 62.8953 43.4616L62.5763 43.1308C62.5092 43.0612 62.4716 42.9669 62.4716 42.8686C62.4716 42.7703 62.5092 42.676 62.5763 42.6064L62.8953 42.2756C62.9623 42.2061 63 42.1118 63 42.0134C63 41.9151 62.9623 41.8208 62.8953 41.7512L62.5763 41.4204C62.5092 41.3509 62.4716 41.2566 62.4716 41.1582C62.4716 41.0599 62.5092 40.9656 62.5763 40.8961L62.8953 40.5642Z" fill="#DCE2E2"></path></svg>
                    <p>Ingles</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col l6 caja_vista caja_nota">
                    <a href="Mis actividades.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="42" height="52" viewBox="0 0 42 52" fill="none"><path d="M41.4858 52H19.5143C19.2302 52 19 51.628 19 51.169V0.830984C19 0.372023 19.2302 0 19.5143 0H41.5022C41.7771 0 42 0.360141 42 0.804375V51.169C42.0001 51.628 41.7699 52 41.4858 52Z" fill="#EAC083"></path><path d="M36.1727 52H15.8707L0 36.0588V0.830984C0 0.610594 0.0871624 0.399229 0.242312 0.24339C0.397462 0.0875499 0.60789 0 0.827305 0L36.1992 0C36.4116 0 36.6153 0.0847464 36.7654 0.235596C36.9156 0.386446 37 0.591042 37 0.804375V51.169C37 51.3894 36.9128 51.6008 36.7577 51.7566C36.6025 51.9124 36.3921 52 36.1727 52Z" fill="#F9E7C0"></path><path d="M27.0719 46H21.0979C20.4869 46 19.9917 45.4972 19.9917 44.877C19.9917 44.2568 20.4869 43.754 21.0979 43.754H27.0719C27.6827 43.754 28.1781 44.2568 28.1781 44.877C28.1781 45.4972 27.6828 46 27.0719 46ZM33 37.5262C33 36.9061 32.5047 36.4032 31.8938 36.4032H21.0979C20.4869 36.4032 19.9917 36.906 19.9917 37.5262C19.9917 38.1465 20.4869 38.6492 21.0979 38.6492H31.8938C32.5046 38.6491 33 38.1464 33 37.5262ZM30.6279 30.1754C30.6279 29.5553 30.1326 29.0524 29.5217 29.0524H21.0979C20.4869 29.0524 19.9917 29.5552 19.9917 30.1754C19.9917 30.7956 20.4869 31.2984 21.0979 31.2984H29.5217C30.1325 31.2984 30.6279 30.7956 30.6279 30.1754ZM25.7284 22.8246C25.7284 22.2044 25.2331 21.7016 24.6222 21.7016H7.10629C6.49535 21.7016 6.0001 22.2044 6.0001 22.8246C6.0001 23.4448 6.49535 23.9476 7.10629 23.9476H24.6222C25.233 23.9475 25.7284 23.4448 25.7284 22.8246ZM16.584 30.1754C16.584 29.5553 16.0887 29.0524 15.4778 29.0524H7.10619C6.49525 29.0524 6 29.5552 6 30.1754C6 30.7956 6.49525 31.2984 7.10619 31.2984H15.4778C16.0888 31.2984 16.584 30.7956 16.584 30.1754ZM27.602 15.4738C27.602 14.8535 27.1068 14.3508 26.4958 14.3508H7.10619C6.49525 14.3508 6 14.8535 6 15.4738C6 16.094 6.49525 16.5968 7.10619 16.5968H26.4958C27.1068 16.5968 27.602 16.094 27.602 15.4738ZM33 8.123C33 7.50278 32.5047 7 31.8938 7H7.10629C6.49535 7 6.0001 7.50278 6.0001 8.123C6.0001 8.74322 6.49535 9.246 7.10629 9.246H31.8938C32.5046 9.246 33 8.74322 33 8.123Z" fill="#597B91"></path><path d="M16 52L0 36H12.5991C14.4774 36 16 37.5226 16 39.4009V52Z" fill="#EAC083"></path></svg>
                    <p>Hojas de calculo</p>
                    </a>
                </div>
                <div class="col l6 caja_vista caja_nota">
                    <a href="Perfil.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="62" viewBox="0 0 64 62" fill="none"><path d="M13.346 22.883V16.424C13.346 16.371 13.325 16.324 13.297 16.324H10.07C10.043 16.324 10.019 16.371 10.019 16.424V22.883C10.019 22.911 10.027 22.934 10.031 22.95L10.035 22.953H10.039C10.043 22.969 10.057 22.98 10.07 22.98H13.297C13.324 22.98 13.346 22.938 13.346 22.883Z" fill="#243438"></path><path d="M20.82 20.437H2.402C2.25 20.437 2.125 20.458 2.125 20.486V23.591C2.125 23.618 2.25 23.638 2.402 23.638H20.82C20.902 23.638 20.968 23.634 21.011 23.626L21.019 23.622H21.025C21.07 23.616 21.099 23.602 21.099 23.59V20.485C21.1 20.459 20.973 20.437 20.82 20.437Z" fill="#D1D2D3"></path><path d="M23.023 22.033H0.344C0.156 22.033 0 22.06 0 22.095V25.915C0 25.951 0.156 25.976 0.344 25.976H23.023C23.123 25.976 23.203 25.971 23.257 25.961L23.265 25.959C23.269 25.959 23.269 25.955 23.273 25.955C23.327 25.948 23.366 25.936 23.366 25.916V22.096C23.367 22.06 23.211 22.033 23.023 22.033Z" fill="#A7A8AC"></path><path d="M21.9799 0H1.37792C1.20892 0 1.06592 0.123 1.06592 0.263V17.345C1.06592 17.49 1.20892 17.611 1.37792 17.611H21.9799C22.0578 17.6141 22.1342 17.5889 22.1949 17.54L22.2029 17.532L22.2089 17.52C22.2357 17.4993 22.2573 17.4726 22.2719 17.442C22.2865 17.4114 22.2937 17.3779 22.2929 17.344V0.262C22.2929 0.123 22.1519 0 21.9799 0Z" fill="#E7E6E6"></path><path d="M21.428 0.970947H2.52304C2.36704 0.970947 2.23804 1.08195 2.23804 1.21295V16.8829C2.23804 17.0159 2.36704 17.1269 2.52304 17.1269H21.428C21.512 17.1269 21.578 17.1039 21.625 17.0649C21.625 17.0649 21.625 17.0609 21.629 17.0549C21.633 17.0549 21.633 17.0499 21.637 17.0449C21.6618 17.0259 21.6817 17.0013 21.6953 16.9732C21.7088 16.9451 21.7156 16.9142 21.715 16.8829V1.21295C21.715 1.08195 21.584 0.970947 21.428 0.970947Z" fill="#D1D2D3"></path><path d="M20.0819 1.56201H3.13691C2.99591 1.56201 2.87891 1.66201 2.87891 1.77901V15.829C2.87891 15.948 2.99591 16.048 3.13691 16.048H20.0819C20.1455 16.0506 20.2079 16.0304 20.2579 15.991C20.2579 15.991 20.2579 15.986 20.2619 15.982C20.2659 15.982 20.2659 15.978 20.2699 15.974C20.2915 15.9566 20.3088 15.9345 20.3206 15.9093C20.3324 15.8842 20.3383 15.8568 20.3379 15.829V1.77901C20.3379 1.66201 20.2209 1.56201 20.0819 1.56201Z" fill="#57C6E9"></path><path d="M11.9339 10.953C14.7659 13.12 17.5329 14.592 20.4139 15.484V1.77999C20.4139 1.66199 20.2969 1.56299 20.1559 1.56299H4.60488C6.20388 5.40499 8.95288 8.67699 11.9339 10.953ZM11.9529 13.252C8.53488 10.877 5.11288 7.58699 2.95288 3.52099V15.83C2.95288 15.949 3.06988 16.049 3.21088 16.049H17.0429C15.2502 15.3031 13.5436 14.3653 11.9529 13.252Z" fill="#27A8E0"></path><path d="M53.48 22.883V16.424C53.48 16.371 53.457 16.324 53.429 16.324H50.202C50.179 16.324 50.155 16.371 50.155 16.424V22.883C50.155 22.911 50.159 22.934 50.166 22.95L50.168 22.953H50.172C50.179 22.969 50.192 22.98 50.202 22.98H53.429C53.457 22.98 53.48 22.938 53.48 22.883Z" fill="#243438"></path><path d="M60.9499 20.437H42.5319C42.3809 20.437 42.2549 20.458 42.2549 20.486V23.591C42.2549 23.618 42.3809 23.638 42.5319 23.638H60.9499C61.0319 23.638 61.0979 23.634 61.1419 23.626L61.1489 23.622H61.1569C61.1999 23.616 61.2309 23.602 61.2309 23.59V20.485C61.2309 20.459 61.1049 20.437 60.9499 20.437Z" fill="#D1D2D3"></path><path d="M63.1599 22.033H40.4809C40.2929 22.033 40.1389 22.06 40.1389 22.095V25.915C40.1389 25.951 40.2929 25.976 40.4809 25.976H63.1599C63.2619 25.976 63.3399 25.971 63.3949 25.961C63.3989 25.961 63.3989 25.959 63.4019 25.959C63.4059 25.959 63.4079 25.955 63.4079 25.955C63.4649 25.948 63.5039 25.936 63.5039 25.916V22.096C63.5039 22.06 63.3489 22.033 63.1599 22.033Z" fill="#A7A8AC"></path><path d="M62.1201 0H41.5191C41.3471 0 41.2061 0.123 41.2061 0.264V17.346C41.2061 17.491 41.3481 17.612 41.5191 17.612H62.1221C62.1996 17.615 62.2757 17.5898 62.3361 17.541L62.3451 17.533L62.3521 17.521C62.3783 17.4999 62.3993 17.473 62.4135 17.4425C62.4277 17.412 62.4348 17.3787 62.4341 17.345V0.263C62.4341 0.123 62.2941 0 62.1221 0" fill="#E7E6E6"></path><path d="M61.5621 0.970947H42.6571C42.5021 0.970947 42.3721 1.08195 42.3721 1.21295V16.8829C42.3721 17.0159 42.5021 17.1269 42.6571 17.1269H61.5621C61.6323 17.1298 61.7013 17.1078 61.7571 17.0649C61.7571 17.0649 61.7571 17.0609 61.7611 17.0549C61.7651 17.0549 61.7671 17.0499 61.7691 17.0449C61.794 17.026 61.8141 17.0015 61.8279 16.9734C61.8416 16.9452 61.8485 16.9142 61.8481 16.8829V1.21295C61.8491 1.08195 61.7191 0.970947 61.5621 0.970947Z" fill="#D1D2D3"></path><path d="M60.2201 1.56201H43.2751C43.1341 1.56201 43.0171 1.66201 43.0171 1.77901V15.829C43.0171 15.948 43.1341 16.048 43.2751 16.048H60.2201C60.2837 16.0506 60.3461 16.0304 60.3961 15.991L60.4001 15.982C60.4041 15.982 60.4061 15.978 60.4091 15.974C60.4305 15.9563 60.4477 15.9342 60.4597 15.9092C60.4716 15.8841 60.4779 15.8568 60.4781 15.829V1.77901C60.4781 1.66201 60.3611 1.56201 60.2201 1.56201Z" fill="#57C6E9"></path><path d="M52.0701 10.953C54.9021 13.12 57.6721 14.592 60.5501 15.484V1.77999C60.5501 1.66199 60.4341 1.56299 60.2921 1.56299H44.7441C46.3401 5.40499 49.0901 8.67699 52.0701 10.953ZM52.0901 13.252C48.6701 10.877 45.2491 7.58699 43.0901 3.52099V15.83C43.0901 15.949 43.2091 16.049 43.3481 16.049H57.1811C55.3886 15.3033 53.6823 14.3655 52.0921 13.252" fill="#27A8E0"></path><path d="M32.6929 58.843V52.385C32.6929 52.33 32.6699 52.283 32.6419 52.283H29.4179C29.3899 52.283 29.3669 52.33 29.3669 52.385V58.843C29.3669 58.87 29.3749 58.894 29.3789 58.908L29.3829 58.912H29.3839C29.3899 58.928 29.4039 58.94 29.4179 58.94H32.6419C32.6699 58.94 32.6929 58.897 32.6929 58.843Z" fill="#243438"></path><path d="M40.1599 56.4031H21.7419C21.5899 56.4031 21.4629 56.4221 21.4629 56.4501V59.5551C21.4629 59.5831 21.5899 59.6021 21.7419 59.6021H40.1599C40.2419 59.6021 40.3059 59.5981 40.3509 59.5911C40.3509 59.5911 40.3549 59.5911 40.3589 59.5871H40.3629C40.4099 59.5781 40.4389 59.5671 40.4389 59.5551V56.4501C40.4389 56.4221 40.3119 56.4031 40.1599 56.4031Z" fill="#D1D2D3"></path><path d="M42.3689 57.9929H19.6919C19.5039 57.9929 19.3479 58.0189 19.3479 58.0549V61.8759C19.3479 61.9119 19.5039 61.9379 19.6919 61.9379H42.3689C42.4709 61.9379 42.5489 61.9309 42.6049 61.9219C42.6089 61.9219 42.6089 61.9179 42.6129 61.9179C42.6129 61.9179 42.6169 61.9179 42.6209 61.9139C42.6769 61.9069 42.7129 61.8939 42.7129 61.8749V58.0539C42.7129 58.0189 42.5589 57.9929 42.3689 57.9929Z" fill="#A7A8AC"></path><path d="M41.332 35.963H20.73C20.558 35.963 20.418 36.084 20.418 36.226V53.307C20.418 53.452 20.559 53.573 20.73 53.573H41.33C41.4078 53.5767 41.4843 53.5526 41.546 53.505L41.551 53.495C41.551 53.495 41.557 53.488 41.559 53.483C41.5857 53.4622 41.6073 53.4355 41.6221 53.405C41.6368 53.3744 41.6443 53.3409 41.644 53.307V36.226C41.644 36.084 41.502 35.963 41.33 35.963" fill="#E7E6E6"></path><path d="M40.7701 36.923H21.8661C21.7101 36.923 21.5811 37.035 21.5811 37.165V52.836C21.5811 52.97 21.7101 53.078 21.8661 53.078H40.7711C40.8551 53.078 40.9211 53.055 40.9681 53.018C40.9681 53.018 40.9681 53.012 40.9721 53.008C40.9761 53.008 40.9761 52.999 40.9811 52.995C41.0053 52.976 41.0249 52.9517 41.0383 52.924C41.0516 52.8962 41.0584 52.8658 41.0581 52.835V37.164C41.0571 37.036 40.9251 36.923 40.7701 36.923Z" fill="#D1D2D3"></path><path d="M39.4281 37.521H22.4851C22.3441 37.521 22.2271 37.623 22.2271 37.739V51.789C22.2271 51.907 22.3441 52.005 22.4851 52.005H39.4281C39.4915 52.009 39.5542 51.9894 39.6041 51.95L39.6101 51.939C39.6151 51.939 39.6151 51.937 39.6181 51.93C39.6394 51.913 39.6567 51.8914 39.6687 51.8668C39.6806 51.8422 39.6869 51.8153 39.6871 51.788V37.737C39.6871 37.623 39.5661 37.521 39.4281 37.521Z" fill="#57C6E9"></path><path d="M31.282 46.9129C34.114 49.0799 36.881 50.5529 39.762 51.4459V37.7419C39.762 37.6259 39.645 37.5239 39.504 37.5239H23.953C25.551 41.3649 28.301 44.6379 31.282 46.9129ZM31.301 49.2129C27.883 46.8399 24.461 43.5499 22.301 39.4839V51.7939C22.301 51.9119 22.418 52.0099 22.559 52.0099H36.389C34.596 51.2662 32.8898 50.3283 31.301 49.2129Z" fill="#27A8E0"></path><path d="M40.7899 9.04904C40.7899 9.96504 40.0439 10.709 39.1279 10.709H24.5809C24.3629 10.709 24.1471 10.6661 23.9457 10.5827C23.7442 10.4993 23.5613 10.377 23.4071 10.2228C23.253 10.0687 23.1307 9.88569 23.0473 9.68429C22.9638 9.48289 22.9209 9.26703 22.9209 9.04904C22.9209 8.83104 22.9638 8.61518 23.0473 8.41378C23.1307 8.21238 23.253 8.02939 23.4071 7.87524C23.5613 7.7211 23.7442 7.59882 23.9457 7.5154C24.1471 7.43198 24.3629 7.38904 24.5809 7.38904H39.1279C40.0439 7.38904 40.7899 8.13104 40.7899 9.04904ZM55.5699 28.873C56.2999 29.428 56.4359 30.473 55.8779 31.202L47.0179 42.739C46.8868 42.9167 46.7217 43.0665 46.5321 43.1796C46.3425 43.2927 46.1322 43.3668 45.9136 43.3977C45.695 43.4286 45.4724 43.4156 45.2589 43.3595C45.0454 43.3033 44.8452 43.2052 44.67 43.0708C44.4949 42.9364 44.3483 42.7684 44.2388 42.5767C44.1293 42.385 44.0592 42.1733 44.0324 41.9542C44.0057 41.735 44.0229 41.5127 44.0831 41.3003C44.1433 41.0879 44.2452 40.8896 44.3829 40.717L53.2419 29.178C53.5103 28.8291 53.9063 28.6009 54.3428 28.5437C54.7793 28.4865 55.2207 28.605 55.5699 28.873ZM6.1659 28.873C5.81709 29.1418 5.58908 29.5379 5.53191 29.9745C5.47473 30.4111 5.59305 30.8525 5.8609 31.202L14.7219 42.739C14.99 43.0882 15.3859 43.3165 15.8224 43.3738C16.2589 43.4311 16.7002 43.3127 17.0494 43.0445C17.3986 42.7764 17.6269 42.3806 17.6842 41.9441C17.7415 41.5076 17.623 41.0662 17.3549 40.717L8.4959 29.177C8.22684 28.8283 7.83049 28.6005 7.39373 28.5435C6.95697 28.4865 6.51543 28.605 6.1659 28.873Z" fill="#58595B"></path></svg>
                    <p>Nuevas tecnologias</p>
                    </a>
                </div>
            </div>
          </div>
    </div>

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
             var elems = document.querySelectorAll('.collapsible');
             var instances = M.Collapsible.init(elems);
             });
            </script>
    </body>
</html>
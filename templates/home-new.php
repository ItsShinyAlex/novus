<?php
    /* Template Name:  home*/ 
    get_header();
?>

<section id="reparamos-inicio">

     
      <?php putRevSlider("home1", "home-new.php"); ?>

</section>

<section id="who">
    <div class="contenedor-center">
        
        <h2 class="giant-white shadow">¿Quiénes Somos?</h2>
        <p class="white">Somos una empresa dedicada a la venta y reparación de computadoras, teléfonos, sistemas de voz y datos, equipos de video y máquinas de coser. </p>
        <p class="white btn-pad">Nos mantenemos actualizados en los avances tecnológicos de nuestro rubro, para brindarte exactamente lo que necesitas de la mano de nuestros profesionales certificados.</p>
        <a href="about.php" class="btn-yellow">SABER MÁS</a>
    </div>
</section>

<section id="mac">
   <div class="flex">
    <div class="col contenedor">
       <div class="center">
           <img id="for1200" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/apple-centro.png" alt="Centro de servicio autorizado APPLE MAC">
           <img id="for1300" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/apple-centro-fondoGRIS.png" alt="Centro de servicio autorizado APPLE MAC">
       </div>
        
        <h2 class="mid-sandia">
            CONTAMOS CON PERSONAL CERTIFICADO PARA BRINDAR A NUESTROS CLIENTES LOS SIGUIENTES SERVICIOS:
        </h2>
        
        <div class="flex">
            <div class="col">
                <p>
                    <span class="mid-black">Servicio de reparación en garantía o por cargo de equipo de cómputo</span><br>
                    <span class="light-black">Modelos MacBook, MacBook Pro, IMac, IMac Pro.</span>
                </p>
                <p>
                    <span class="mid-black">Servicio de Reparación en garantía o por cargo de equipo</span><br>
                    <span class="light-black">IPod, IPad, Iphone y Apple Watch</span>
                </p>
                <p class="mid-black">
                    Venta de extensiones de garantía.
                </p>
            </div>
            <div class="col">
                <p class="mid-black">Respaldo de Información y actualizaciones de memoria y accesorios.</p>
                <p class="mid-black">Redes en Plataforma Mac.</p>
                <p class="mid-black">Interconexión con dispositivos de terceros.</p>
                <p class="mid-black">Actualizaciones de Sistema Operativo.</p>
            </div>
        </div>
        
    </div>
    <div id="mac-mouse" class="col"></div>
   </div>
</section>

<section id="nuestros-servicios">
    <div class="contenedor">
        
    </div>
</section>

<section id="brindamos">
   
   <div class="flex">
       <div class="col" id="col-servicio">
            <div class="contenedor-center">
            <h2><span class="light-big-black">Te brindamos el mejor</span><br>
            <span class="bigest-sandia">Servicio</span></h2>
            <p class="light-mid-black">
            en todas estas marcas
            </p>       
       </div>
    </div>
      
       <div class="col" id="col-logos">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/all-logos.png" alt="dell, epson, brother, samsung">
       </div>
   </div>
   
</section>

<section id="beneficios">
    <div class="contenedor">
        <div class="flex">
            <div class="col">
                <h2><b><span class="light-bigest-sandia">Beneficios</span></b><br>
                <span class="giant-sandia">Adicionales</span></h2>
            </div>
            <div class="col">
                <h3 class="big-sandia">Te brindamos el mejor servicio</h3>
                <p class="black">Satisfacemos tus necesidades de computación, refacciones y consumibles, de forma efectiva.</p>
                <p class="black btn-pad">Con atención personalizada, venta, reparación especializada y planes anuales que se adaptan a ti. </p>
                <a href="porque.php" class="btn-sandia">Saber más </a>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>


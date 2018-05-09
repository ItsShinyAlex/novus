<?php
    /* Template Name:  home*/ 
    get_header();
?>

<section id="reparamos-inicio">

      <?php do_shortcode("[rev_slider alias='home1']"); ?>
      <?php putRevSlider("home1", "home-new.php"); ?>

</section>

<section id="who">
    <div class="contenedor-center">
        
        <h2 class="giant-white shadow">¿Quiénes Somos?</h2>
        <p class="white">Somos una empresa dedicada a la venta y reparación de computadoras, teléfonos, sistemas de voz y datos, equipos de video y máquinas de coser. </p>
        <p class="white btn-pad">Nos mantenemos actualizados en los avances tecnológicos de nuestro rubro, para brindarte exactamente lo que necesitas de la mano de nuestros profesionales certificados.</p>
        <a class="btn-yellow">SABER MÁS</a>
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
                <a class="btn-sandia">Saber más </a>
            </div>
        </div>
    </div>
</section>

<section id="contacto">
    <div class="flex">
        <div class="col">
            <h2 class="bigest-white">CONTACTO <br>
            <span class="giant-white">NOVUS</span></h2>
        </div>
        <div id="icons" class="col">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/002-phone-call.svg" alt="teléfono"> 
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/001-pin.svg" alt="ubicación">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/003-clock.svg" alt="horario reloj">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/mail.png" alt="Correo electrónico">
        </div>
        <div class="col contacto">        
            <p><b>TELÉFONO</b><br>
            55 5589 8928</p>
            
            <p><b>Calzada de Tlalpan<br>
            local 109 CDMX</b></p>
  
            <p ><b>HORARIO DE ATENCIÓN</b><br>Lunes a Viernes de<br>
                9:00 am a 6 pm<br> 
                Sábado de<br> 
                9:00 am a 1:00 pm</p>
                
            <p class="btn-pad"><b>CORREO</b><br>
            garantias@novussupply.com</p>    
            <a class="btn-yellow">¿Cómo llegar?</a>
        </div>
    </div>
</section>

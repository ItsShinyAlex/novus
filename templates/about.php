<?php
    /* Template Name:  Quienes Somos (About)*/ 
    get_header();
?>

<section id="whoweare">
    <div class="flex">
        <div class="col">
            <h1>
                <span class="light-big-white">¿Quiénes</span>
                <span-bigest-white>Somos?</span-bigest-white>
            </h1>
            <p class="white">Somos una empresa dedicada a la venta y 
            reparación de computadoras, teléfonos, sistemas
            de voz y datos, equipos de video y máquinas de
            coser. Nos mantenemos actualizados en los
            avances tecnológicos de nuestro rubro, para
             brindarte exactamente lo que necesitas de la
            mano de nuestros profesionales certificados.</p>
            <button class="yellow">MÁS INFORMACIÓN</button>
        </div>
        <div class="col">
            
        </div>
    </div>
</section>

<section id="mision-vision">
    <div class="contenedor">
        <div class="flex">
            <div class="col">
                <h2 class="bigest-white shadow">Misión</h2>
                <p class="white">Ofrecer los mejores servicios del sector informático para satisfacer las necesidades de nuestros clientes con excelentes productos, reparaciones realizadas por profesionales certificados y contratos personalizados.
                <img src="../img/about/pc-armada-azul.png" alt="Computadora ensamblada">
                </p>
            </div>
            <div class="col">
                <img src="../img/about/device-mac-windows.png" alt="Dispositivos Apple y Windows">
                <h2 class="bigest-white shadow">Visión</h2>
                <p class="white">Ser líderes en la gestión de soluciones de cómputo efectivas para mejorar los procesos de integración tecnológica. Posicionarnos como el centro de servicio para equipos tecnológicos más importante de México.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="logros">
    <div class="contenedor-center">
        <h2>
            <span class="light-big-sandia">Logros</span>
            <span class="bigest-sandia">Comerciales</span>
        </h2>
        <div class="flex">
            <div class="col">
                <img src="../img/about/logros1-tablet.png" alt="tablet">
                <p class="black">Nuestro personal es capacitado y  certificado por las marcas más reconocidas del sector tecnológico.</p>
                <img src="../img/about/logros3-walmart.png" alt="Walmart">
                <p class="black"></p>
            </div>
            <div class="col">
                <p class="black">Hemos crecido con la tecnología acumulando experiencia por más de 20 años.</p>
                <img src="../img/about/logros2-dedo.png" alt="dedo engrane">
                <p class="black"> Representamos a las más importantes aseguradoras de garantía extendida (Tiendas retail como Wallmart y Bestbuy).</p>
                <img src="../img/about/logros4-site.png" alt="SITE">
                <p class="black">Somos proveedores de empresas como UAEM, IMSS, ISSSTE, AIG SEGUROS y UNAM, entre otras.</p>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>

<?php echo get_stylesheet_directory_uri(); ?>
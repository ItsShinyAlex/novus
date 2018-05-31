<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if ( $post_id ) {
	$show_footer = get_post_meta( $post_id, '_template', true );
	$cases = array( 'no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title' );
	$footer_status = in_array( $show_footer, $cases );
}

if ( $mk_options['disable_footer'] == 'false' || ( $footer_status ) ) {
	$mk_footer_class .= ' mk-footer-disable';
}

if ( $mk_options['footer_type'] == '2' ) {
	$mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset( $mk_options['boxed_footer'] ) && ! empty( $mk_options['boxed_footer'] )) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true' ) ? $mk_footer_class .= ' disable-on-mobile' : ' ';


	
?>


<footer>	
	
<section id="contacto">
    <div class="left">
        <h2 class="bigest-white">CONTACTO <br>
        <span class="giant-white">NOVUS</span></h2>
    </div>
    <div class="flex">
        <div id="contact-form" class="col">
        	<?php echo do_shortcode('[caldera_form id="CF5afe3cbd67b13"]'); ?>
        </div>
        

        <div class="col">                     
                <div>
                    <div class="flex">
                        <div class="contacto center">
                            <img id="phone" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/002-phone-call.png" alt="teléfono">
                        </div>

                        <div class="columna-contacto">
                            <p class="white"><b>TELÉFONO</b><br>
                                                55 5589 8928</p>
                        </div>
                    </div>
                    
                    <div class="flex ">
                        <div class="contacto center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/001-pin.png" alt="ubicación">
                        </div>

                        <div class="columna-contacto">
                            <p class="white"><b>Calzada de Tlalpan 4456<br>
                            local 109 CDMX</b></p>
                        </div>
                    </div>
                       
                    <div class="flex">   
                        <div class="contacto center">
                            <img id="clock"  src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/003-clock.png" alt="horario reloj">
                        </div>
                    
                        <div class="columna-contacto">
                            <p class="white"><b>HORARIO DE ATENCIÓN</b><br>Lunes a Viernes de<br>
                                                9 a 19 HRS.<br> 
                                                Sábado de<br> 
                                                9 a 14 HRS.</p>
                        </div>
                     </div>
                    
                    <div class="flex">
                        <div class="contacto center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/mail.png" alt="Correo electrónico">
                        </div>

                        <div class="columna-contacto">
                             <p class="btn-pad white"><b>CORREO</b><br>
                                garantias@novussupply.com</p>    
                                <a href="https://www.google.com.mx/maps/dir/''/Calzada+de+Tlalpan+local+109+CDMX+novus/data=!4m5!4m4!1m0!1m2!1m1!1s0x85ce00571633a6d5:0x8557efa4fc38697e?sa=X&ved=2ahUKEwijqdeDu5DbAhUCyGMKHdHnBUgQ9RcwAHoECAEQCQ" class="btn-yellow">¿Cómo llegar?</a>
                        </div>
                     </div>
                </div>    
        </div>
        
        
    </div>
</section>


</footer>
    
    
</div>
<?php

	global $is_header_shortcode_added;

	/**
	 * After new changed, it will return null if there is no header shortcode
	 * added. Need to check and save it as array if it's null to avoid error.
	 *
	 * @since 6.0.3
	 * @see /components/shortcodes/mk_header/config.php
	 */
	if ( ! is_array( $is_header_shortcode_added ) ) {
		$is_header_shortcode_added = array();
	}

if ( $mk_options['seondary_header_for_all'] === 'true' || get_header_style() === '3' || in_array( '3', $is_header_shortcode_added, true ) ) {
	mk_get_header_view(
		'holders', 'secondary-menu', [
			'header_shortcode_style' => $is_header_shortcode_added,
		]
	);
}
?>
</div>

<div class="bottom-corner-btns js-bottom-corner-btns">
<?php
if ( 'false' !== $mk_options['go_to_top'] ) {
	mk_get_view( 'footer', 'navigate-top' );
}

if ( 'false' !== $mk_options['disable_quick_contact'] ) {
	mk_get_view( 'footer', 'quick-contact' );
}

		do_action( 'add_to_cart_responsive' );
?>
</div>


<?php
if ( $mk_options['header_search_location'] === 'fullscreen_search' ) {
	mk_get_header_view( 'global', 'full-screen-search' );
}
?>

<?php if ( ! empty( $mk_options['body_border'] ) && $mk_options['body_border'] === 'true' ) { ?>
	<div class="border-body border-body--top"></div>
	<div class="border-body border-body--left border-body--side"></div>
	<div class="border-body border-body--right border-body--side"></div>
	<div class="border-body border-body--bottom"></div>
<?php } ?>

	<?php wp_footer(); ?>

	<?php do_action( 'mk_theme_before_body_closing' ); ?>
</body>
</html>

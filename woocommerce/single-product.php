<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
//.................................ALTERNATIVAS PARA TOMAR LOS PRECIOS
/*
$product_id = $product->get_id();
$producto = new WC_Product($product_id);
echo $producto->get_regular_price();
echo $producto->get_sale_price();
*/

add_filter('woocommerce_get_price_html','ShowOrNotPrice');

function ShowOrNotPrice($hooks){
global $product;
$Precio = $product->get_price();
$preciolimite = esc_attr(get_option('precio_limite'));
if( !empty($Precio) && $Precio <= $preciolimite ){
	return $Precio;
}
else {
	wp_register_style('alexplug_singlePage', plugin_dir_url(__DIR__).'css/hide-attributes.css', array(), '1.0.0', 'all' );
	wp_enqueue_style('alexplug_singlePage');
    echo '<div class="alert alert-warning" style="text-align:center;;"><a href="https://www.lqsea.com/contacto/">Ver precio</a>
	</div>';
      }
}
?>
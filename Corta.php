<?php
function add_subtitle_to_product (){
global $post;
$the_product="";
if (isset($post) && isset($the_product)){	
	$the_product = wc_get_product( $post );
		$parrafocorto='<div class="sku" style="margin-bottom:0; margin-top:4%;"><label><strong>SKU:&nbsp;&nbsp;'.$the_product->get_sku().'</strong></label><br>
		<br>'.the_title('<p hidden>', '</p>').'</div>
		<div style="BORDER-TOP: 1px SOLID BLACK; padding-top: 1%; padding-bottom: 2%;">
		<img class="alignnone wp-image-4876" src="https://www.lqsea.com/wp-content/uploads/2017/02/foto-iconos-de-tarjetas.png" width="60%" />
		</div>
		<div style="BORDER-BOTTOM: 1PX SOLID BLACK; BORDER-TOP: 1PX SOLID BLACK;">
		<i class="fa fa-truck fa-3x" aria-hidden="true"></i>&nbsp; &nbsp;<strong>Envio a domicilio</strong>
		</div><strong>Nota: </strong>
		<ul><li style=”text-align: justify;”>Si usted hizo su pago con tarjeta es necesario que 
		el dueño de la misma presente su cédula de identidad al momento de 
		entrega de su producto, para evitar cualquier tipo de fraude y garantizar 
		la seguridad de nuestros clientes.</li>
		</ul>';
	echo $parrafocorto;
	}
}
add_filter( 'woocommerce_single_product_summary', 'add_subtitle_to_product',98);
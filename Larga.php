<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
//
function descripcion_shortcode() {
	$envios = esc_attr(get_option('lugares_envio'));
	$dev = esc_attr(get_option('devoluciones'));
	
			if ( !empty($envios) && !empty($dev) ){
				$parrafoCompleto ='
				<div id="parrafoAlex">
				'.the_title( '<strong><h1>', '</h1></strong>' ).'<br>
				<strong>ENVÍOS, DEVOLUCIONES Y PAGOS</strong>
				<br>
				<br>
				<strong>Lugares de Envío:</strong> '. $envios .'<br>
				<strong>Devoluciones:</strong> '. $dev.'<br>
				<strong>Días de Garantía:</strong><br>
				<br>
				<p style="display: inline;">
				Tipos de Envió:
				<ul>
					<li>Gratis (Usualmente 7 – 12 días).</li>
					<li>Normal (Usualmente 3 – 7 días).</li>
					<li>Rápido (Usualmente 1 – 3 días).</li>
				</ul>
				'.the_title( '<label style ="display:none;">', '</label>' ).'
				</p>
				<p style="display: inline;">
				Tipos de Pagos:
				<ul>
					<li>Tarjeta de Crédito.</li>
					<li>Efectivo</li>
					<li>POS Móvil (Pago vía celular).</li>
				</ul>
				</p>
				<p>
				<strong>Nota:</strong><label style ="display:none;">tambien,finalmente</label> Si usted hizo su pago con tarjeta es necesario que el dueño de la misma presente su cédula de identidad al momento de entrega de su producto, para evitar cualquier tipo de fraude y garantizar la seguridad de nuestros clientes.
				'.the_title('<p hidden>' , '</p>' ).'
				<br>
				<br>
				</p>
				<p>
				<a href="https://www.facebook.com/LQsea-967973289961722"><img class="alignleft" src="https://www.lqsea.com/wp-content/uploads/2017/03/facebook.png" 
				width="50" /></a>
				<img class="alignleft" src="https://www.lqsea.com/wp-content/uploads/2017/02/whatsapp.png" width="50" />
				<label>Tienes dudas?  llámanos ó escríbenos a nuestro Whatsapp<br>
				<label>Teléf: 57721081 0 82294114</label>
				<br>
				'.the_title('<p hidden>' , '</p>' ).'
				'.the_title('<p hidden>' , '</p>' ).'
				<br>
				<br>
				</p>
				</div>
				<div>
				<h2 style="text-align:center;"><strong>PREGUNTAS FRECUENTES</strong></h2>'.
				do_shortcode('[su_spoiler title="<h3>Política de devolución de LQsea</h3>" style="fancy" icon="chevron"]
				<br>
				<br>
				<h1>Política de Devolución de LQsea.</h1>
				Los consumidores tendrán derecho a la reposición del producto o en su caso a la devolución de la suma pagada por el mismo, en los siguientes casos:
				<ul>
				<li>Cuando habiendo sido considerados los límites de tolerancia permitidos, el contenido neto de un producto sea inferior al que debiera ser, o la calidad 
				sea inferior a la indicada la descripción del producto;</li>
				<li>Si el producto se encontrare en mal estado.</li>
				</ul>
				<br>
				<br>
				<h2>Condiciones:</h2>
				<ul>
					<li>Para ser elegible para una reembolso, el artículo debe estar sin usar y en las mismas condiciones en que lo recibió.</li>
					<li>Debe estar en el empaque original.</li>
					<li>Para completar su declaración, se requiere un recibo o comprobante de compra.</li>
					<li>El tiempo de devolución se especifica en la descripcion de cada uno de los productos. No podremos ofrecer un reembolso o cambio si han pasado mas del numero días estipulado para su devolución desde su compra.</li>
					<li>Varios tipos de bienes están exentos de ser devueltos como por ejemplo:</li>
				</ul>	
				<ol>
					<li>productos íntimos.</li>
					<li>sanitarios.</li>
					<li>cosméticos.</li>
					<li>Las tarjetas de regalo</li>
					<li>Productos de software para descargar</li>
					<li>Algunos artículos de salud y cuidado personal</li>
					<li>Productos con signos evidentes de uso.</li>
					<li>CD, DVD, cintas VHS, software, juegos de video, cinta de casete o disco de vinilo, perfumes que se ha abierto.</li>
					<li>Cualquier artículo que no este en su estado original, este dañado o faltan piezas por razones no se deban a un error nuestro.</li>
				</ol>
				<ul>
					<li>Por favor, no envíe su compra al fabricante.</li>
					<li>Hay ciertas situaciones en las que sólo se otorgan reembolsos parciales (si procede)</li>
					<li>Sólo artículos con precio normal se pueden devolver, por desgracia artículos de promociones no pueden ser reembolsados.</li>
				</ul>
				<p>
				<h2><strong>Los reembolsos (si procede)</strong></h2>
				Una vez que hayamos sido notificados por parte del comprador sobre la devolución del producto, dispondremos de 3 días hábiles para poder resolver sobre la aprobación o rechazo de su reembolso y con esto la notificación de la decisión al comprador. Si es aprobado, entonces su reembolso será procesado, y se aplicará automáticamente a su tarjeta de crédito o (método de pago original), dentro de una cierta cantidad de días, dependiendo de la forma usada al momento de la compra.<br>
				</p>
				<p>
				'.the_title('<p hidden>' , '</p>').'
				Reembolso que tarden o se han perdido(si es aplicable)
				Si usted no ha recibido aun su reembolso, por favor, de nuevo compruebe su cuenta bancaria,  luego, póngase en contacto con su compañía de tarjeta de crédito, también tenga en cuenta  que puede tomar algún tiempo antes de que su devolución se refleje oficialmente.<br>
				Siga en contacto con su banco por que a menudo pasa algún tiempo antes de que el procesamiento de devolución se refleje.
				Si usted ha hecho todo esto y todavía no ha recibido su reembolso, póngase en contacto con nosotros en info@lqsea.com.<br>
				</p>
				<p>
				<label style ="display:none;">también,finalmente,</label>Usted igualmente será responsable de pagar sus propios gastos de envío para devolver su artículo. 
				Los gastos de envío no son reembolsables. Si recibe un reembolso, el coste de envío de devolución será deducido de su reembolso.
				Dependiendo del lugar de donde usted vive asi tambien sera el tiempo que puede tomar el producto intercambiado para que llegue a usted.<br>
				LQsea es propiedad de variedades vida y es tanto como una extensión de la actividades de esta empresa, ubicada en la ciudad de Estelí con dirección "De 
				Sinsa 3 cuadras al norte"<br>
				<a href="https://www.facebook.com/LQsea-967973289961722"><img class="alignleft" src="https://www.staging1.lqsea.com/wp-content/uploads/2017/03/facebook.png" 
				width="50" />
				<img class="alignleft" src="https://www.staging1.lqsea.com/wp-content/uploads/2017/02/whatsapp.png" width="50" /></li></a><br>
				<label>Tienes dudas?  llámanos ó escríbenos a nuestro Whatsapp
				57721081 0 82294114</label>
				</p>
				[/su_spoiler]
				[su_spoiler title="<h3>¿LQsea ofrece reemplazos?</h3>" open="yes" style="fancy" icon="chevron"]
				<p>
				Sí, puede hacerlo llamando o mandandonos tus mensajes a info@lqsea.com. Si recibió un artículo dañado o defectuoso, le enviaremos un reemplazo del artículo 
				exacto. Si desea intercambiar un artículo por otro, puede cambiarlo por un tamaño o color diferente o por un otro artículo siempre que sea notificado y este 
				de acuerdo a nuestras politicas.
				</p>[/su_spoiler]
				[su_spoiler title="<h3>¿Contrareembolso o pago en efectivo?</h3>" open="yes" style="fancy" icon="chevron"]
				<p>
				Podras hacer tus pedidos por medio de esta pagina, para que hasta el momento de la entrega puedas pagar tu pedido y asi hacer efectiva tu compra.
				</p>[/su_spoiler]
				[su_spoiler title="<h3>¿Entregas a domicilio?</h3>" open="yes" style="fancy" icon="chevron"]
				<p>
				Las entregas a domicilio se haran solamente en el lugar de domicilio del comprador o lugar de trabajo, esto con el proposito de evitar fraudes que puedan 
				repercutir en daños a nuestro usuarios y siempre durante horas laborales. La persona que reciba el producto debe tener disponible la identificación adecuada 
				(cedula o licencia) para cerciorar que el producto se le entrega a la persona adecuada.
				Tambien existe la recogida en nuestro punto de conveniencia autorizado y el comprador podra pasar recogiendo personalmente el producto cuando este viera necesario, siempre y cuando sean durante horas laborales.
				</p>[/su_spoiler]
				[su_spoiler title="<h3>¿Descuentos especiales?</h3>" open="yes" style="fancy" icon="chevron"]
				<p>
				Los descuentos especiales se haran efectivos apartir de la compra de tres unidades del mismo producto. 
				</p>[/su_spoiler]
				[su_spoiler title="<h3>¿Recepción de la compra?</h3>" open="yes" style="fancy" icon="chevron"]
				<p>
				Todos los productos deberan ser revisados en el momento de su entrega como responsabilidad del cliente con esto demostrara su plena satisfación.
				</p></div>[/su_spoiler]');
			echo $parrafoCompleto;	
		}
}
//isset($tab['title']) ? $tab['title']:""
//

function woo_custom_description_tab( $tabs ) {
	$tabs['description']['callback'] = 'descripcion_shortcode';	// Custom description callback
	return $tabs;
}

function woo_rename_tabs( $tabs ) {

	$tabs['description']['title'] = __( 'Mas información' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Valoraciones' );			// Rename the reviews tab
    $tabs['specification']['title'] = __( 'Características' );
	return $tabs;

}
function custom_reorder_tabs( $tabs ) {
	$tabs['reviews']['priority'] = 20;			/* Reviews goes  first*/
	$tabs['description']['priority'] = 15;		/* Description goes  second */

return $tabs;   /* Return all tabs to display */
}
add_filter( 'woocommerce_product_tabs', 'woo_custom_description_tab', 98 );
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs',98);
add_filter( 'woocommerce_product_tabs', 'custom_reorder_tabs', 98 );
?>
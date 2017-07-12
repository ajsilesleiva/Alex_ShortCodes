<?php settings_errors();?>
<h1 class="title">Menu Principal Alex Plugin</h1>
<hr>
<div class="alexplug_sidebar_preview">
	<div class="alexplug_sidebar">
		<h1 class="alexplug_username"></h1>
		<h2 class="alexplug_description"></h2>
		<div class="alexplug_main_admin">
			<div><label><strong>SKU:&nbsp;&nbsp;12345678</strong></label>	<br>
				<br><?php the_title('<p hidden>', '</p>');?>
			</div>
			<div style="BORDER-TOP: 1px SOLID BLACK; padding-top: 1%; padding-bottom: 2%;">
				<img class="alignnone wp-image-4876" src="https://www.lqsea.com/wp-content/uploads/2017/02/foto-iconos-de-tarjetas.png" width="60%" />
			</div>
			<div style="BORDER-BOTTOM: 1PX SOLID BLACK; BORDER-TOP: 1PX SOLID BLACK;">
				<i class="fa fa-truck fa-3x" aria-hidden="true"></i>&nbsp; &nbsp;<strong>Envio a domicilio</strong>
			</div>
			<div class="alexplug_main_admin">
			<strong>Nota: </strong>
				<ul><li style=”text-align: justify;”>Si usted hizo su pago con tarjeta es necesario que 
				el dueño de la misma presente su cédula de identidad al momento de 
				entrega de su producto, para evitar cualquier tipo de fraude y garantizar 
				la seguridad de nuestros clientes.</li>
				</ul>
			</div>
			<hr id="separador" size="2px">
			<div id="parrafoAlex">
			<?php the_title( '<strong><h1>', '</h1></strong>' ); ?>
			<br>
			<strong>ENVÍOS, DEVOLUCIONES Y PAGOS</strong>
			<br>
			<br>
			<strong>Lugares de Envío:</strong>
			<?php echo esc_attr(get_option('lugares_envio')); ?>
			<br>
			<strong>Devoluciones:</strong> <?php echo esc_attr(get_option('devoluciones')); ?><br>
			<strong>Días de Garantía:</strong><br>
			<br>
			<p style="display: inline;">
			Tipos de Envió:
				<ul>
					<li>Gratis (Usualmente 7 – 12 días).</li>
					<li>Normal (Usualmente 3 – 7 días).</li>
					<li>Rápido (Usualmente 1 – 3 días).</li>
				</ul>
			<?php the_title( '<label style ="display:none;">', '</label>' ); ?>
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
			<?php the_title('<p hidden>' , '</p>' ); ?>
			</div>
		</div>
	</div>
</div>
<form method="post" action="options.php" class="alexplug_form_general">
	<?php do_settings_sections('alex_plug');?>
	<?php settings_fields('alexplug-ajustes-group');?>
	<?php submit_button();?>
</form>